<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Validator;
use App\User;
use App\CompanySetting;
use App\Admin;
class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('admin.profile.index');
       
    }
    public function profileupdate(Request $request){
        $input = $request->all();
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users,email,' . Auth::guard('admin')->user()->id,

        ];
        $messages = [
            'name' => 'Please enter first name.',
            //'image.mimes' => 'Upload image with valid extension. Only .jpg, .jpeg, .png and .gif extensions are allowed.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $arr = array("status" => 400, "msg" => $validator->errors()->first(), "result" => array());
        } else {

            try {

                $admin = Admin::find(Auth::guard('admin')->user()->id);
                $admin->name = $request->name;
                $admin->email = $request->email;
                $admin->save();
                $msg = 'Profile updated successfully.';
                $arr = array("status" => 200, "msg" => $msg);

            } catch ( \Illuminate\Database\QueryException $ex) {
                $msg = $ex->getMessage();
                if(isset($ex->errorInfo[2])) {
                    $msg = $ex->errorInfo[2];
                }
                $arr = array("status" => 400, "msg" => $msg, "result" => array());

            } catch (Exception $ex) {
                $msg = $ex->getMessage();
                if(isset($ex->errorInfo[2])) {
                    $msg = $ex->errorInfo[2];
                }
                $arr = array("status" => 400, "msg" => $msg, "result" => array());
            }
        }
        return \Response::json($arr);
    }
    public function changepassword(Request $request){
        $input = $request->all();
        $id = Auth::guard('admin')->user()->id;
        $rules =[
            'current_password' => "required",
            'new_password' => "required|min:6",
            'password_confirmation' => 'required|min:6|same:new_password',
        ];
        $messages = [
            'password_confirmation.same' => 'Password Confirmation should match the Password',
        ];
        $validator = Validator::make($input, $rules, $messages );

        if ($validator->fails()) {
            $arr = array("status" => 400, "msg" => $validator->errors()->first(), "data" => (object) []);
        } else {
            try {
                $current_password = $input["current_password"];
                $new_password = Hash::make($input["new_password"]);
                $data = Admin::find($id);
                if ($data) {
                    if (Hash::check($current_password, $data->password)) {
                        $data->password = $new_password;
                        $data->save();
                        $arr = array("status" => 200, "msg" => "Password change successfully", "data" => []);
                    } else {
                        $arr = array("status" => 400, "msg" => "Current Password Not Match.", "data" => []);
                    }
                } else {
                    $arr = array("status" => 400, "msg" => "User not found.", "data" =>  []);
                }
            } catch (Exception $ex) {
                if (isset($ex->errorInfo[2])) {
                    $msg = $ex->errorInfo[2];
                } else {
                    $msg = $ex->getMessage();
                }
                $arr = array("status" => 400, "msg" => $msg, "data" =>  []);
            }
        }
        return \Response::json($arr);
    }
}

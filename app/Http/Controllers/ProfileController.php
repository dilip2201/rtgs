<?php

namespace App\Http\Controllers;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profileupdate(Request $request){
        $input = $request->all();

        $rules = [
            'name' => 'required',
            // 'email' => 'required|unique:users,email,' . Auth::user()->id,
            'phone' => 'required|unique:users,phone,' . Auth::user()->id,

        ];
        $messages = [
            'name' => 'Please enter first name.',
            'phone' => 'Please enter phone number.',
            //'image.mimes' => 'Upload image with valid extension. Only .jpg, .jpeg, .png and .gif extensions are allowed.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $arr = array("status" => 400, "msg" => $validator->errors()->first(), "result" => array());
        } else {

            try {
                $user = User::find(Auth::user()->id);
                $user->name = $request->name;
                $user->phone = $request->phone;
                if ($request->hasFile('profile_avatar')) {
                    if(file_exists(public_path('company/employee/'.$user->image)) && $user->image!='') {
                        unlink(public_path('company/employee/'.$user->image));
                    }
                    $destinationPath = public_path().'/company/employee/';
                    $file = $request->profile_avatar;
                    $fileName = time() . '.'.$file->clientExtension();
                    $file->move($destinationPath, $fileName);
                    $user->image = $fileName;
                }

                $user->save();
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
        $id = Auth::user()->id;
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
                $data = User::find($id);
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
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('front.profile.index');
       
    }

    public function remove_profile(Request $request){
        $user = User::find(Auth::user()->id);
        $user->image = '';
        $user->save();
        if(file_exists(public_path('company/employee/'.$user->image)) && $user->image!='') {
                        unlink(public_path('company/employee/'.$user->image));
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

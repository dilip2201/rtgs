<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;
use DataTables;

class BenificiariesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	return view('front.benificiaries.index');
    }

     /**
     * Get model for add edit user
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getmodal(Request $request)
    {

        $user = array();
        if (isset($request->id) && $request->id != '') {
            $id = decrypt($request->id);
            $user = User::where('id',$id)->first();

        }
        return view('front.user.getmodal', compact('user'));
    }
    
    public function store(Request $request)
    {
        $rules = [
            
            'user_name' => 'required',
            'address' => 'required',
        ];
        if (isset($request->companyid)) {
            $company_id = decrypt($request->companyid);
            $rules['email'] = 'required|email|unique:users,email,'.$company_id;
        }else{
            $rules['email'] = 'required|email|unique:users,email';
  
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $arr = array("status" => 400, "msg" => $validator->errors()->first(), "result" => array());
        } else {
            try {
                if (isset($company_id)) {
                    $user = User::find($company_id);
                    $user->name = $request->user_name;
                    $user->c_name = auth()->user()->c_name;
                    $user->address = $request->address;
                    $user->email = $request->email;
                    $user->phone = $request->phone;
                    if(!empty($request->password)){
                        $user->password = \Hash::make($request->password);
                    }

                    $user->save();
                    $msg = "User updated successfully.";
                }else{
                    //$token = random_int(10000000, 99999999);

                    $user = new User;
                    $user->name = $request->user_name;
                    $user->c_name = $request->c_name;
                    $user->address = $request->address;
                    $user->email = $request->email;
                   // $user->token = $token;
                    $user->parent_id = auth()->user()->id;
                    $user->type = 'user';
                    $user->phone = $request->phone;
                    $user->password = \Hash::make($request->password);
                    $user->save();

                    
                    /*$encrypted = Crypt::encryptString($token);
                   
                    $last_u_id = $user->id;
                    $resetpasslink = url('invite/password/'.$encrypted);
                    $data['name'] = $request->name;
                    $data['email'] = $request->email;
                    $data['url'] = $resetpasslink;
                    $data['text'] = "Welcome to RTGS Group! You're invited by ".Auth::user()->name.". Please verify your account and generate password to login in Intunor Group.";
                    $view = 'company-invitation';
                    $subject = "RTGS Group! You're invited to register ";
                    sendmail($data,$subject);*/
                    
                    $msg = "User added successfully.";
                }



                $arr = array("status" => 200, "msg" => $msg);
            } catch (\Illuminate\Database\QueryException $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) :
                    $msg = $ex->errorInfo[2];
                endif;
                $arr = array("status" => 400, "msg" => $msg, "result" => array());
            } catch (Exception $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) :
                    $msg = $ex->errorInfo[2];
                endif;
                $arr = array("status" => 400, "msg" => $msg, "result" => array());
            }
        }

        return \Response::json($arr);
    }

        /**
     * Get all the users
     * @param Request $request
     * @return mixed
     */
    public function getall(Request $request)
    {

        $user = User::where('type','user')->where('parent_id',auth()->user()->id)->orderby('id', 'desc');
        if ((isset($request->status) && !empty($request->status)) || $request->status == '0') {
            $user = $user->where('status',$request->status);
        }        
        $user = $user->get();
        
        return DataTables::of($user)
            ->addColumn('action', function ($q) {
                $id = encrypt($q->id);
                $return = '<a title="Edit"  data-id="'.$id.'"   data-toggle="modal" data-target=".add_modal" class="openaddmodal" href="javascript:void(0)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <a class="delete_record" data-id="'.$q->id.'" href="javascript:void(0)"> <i class="fa fa-trash" aria-hidden="true"></i> </a>';
                
                return $return;
            })
            ->addColumn('c_name', function ($q) {
                return $q->c_name;
            })
            ->addColumn('user_name', function ($q) {
                return $q->name;
            })
            ->addColumn('email', function ($q) {
                return $q->email;
            })
            ->addColumn('address', function ($q) {
                return $q->address;
            })
            ->addColumn('phone_number', function ($q) {
                return $q->phone;
            })
            ->addColumn('status', function ($q) {
                $id = encrypt($q->id);
                if ($q->status == '1') {
                    return '<span class="label label-success label-dot mr-2"></span><span style="color:#1bc5bd!important; cursor:pointer;" class="font-weight-bold changestatus" data-status="0" data-id="' . $id . '" text-success">Enable</span>';
                }
                if ($q->status == '0') {
                    return '<span class="label label-danger label-dot mr-2"></span><span  style="color:#f64e60!important; cursor:pointer;" class="font-weight-bold changestatus" data-status="1"  data-id="' . $id . '" text-success">Disable</span>';
                }
            })
            ->addIndexColumn()
            ->rawColumns(['image','status', 'action'])->make(true);
    }

        /**
     * Change status of user active or inactive
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response send response in json
     */
    public function changestatus(Request $request)
    {

        try {
            $id = decrypt($request->id);
            $holiday = User::find($id);
            if ($holiday) {
                $holiday->update(['status' => $request->status]);
                $arr = array("status" => 200, "msg" => 'Company status change successfully.');
            } else {
                $arr = array("status" => 400, "msg" => 'Company not found. please try again!');
            }

        } catch (\Illuminate\Database\QueryException $ex) {

            $msg = $ex->getMessage();
            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            }

            $arr = array("status" => 400, "msg" => $msg, "result" => array());
        } catch (Exception $ex) {

            $msg = $ex->getMessage();
            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            }
            $arr = array("status" => 400, "msg" => $msg, "result" => array());
        }
        return \Response::json($arr);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $company = User::find($id);
            if ($company) {
                $company->delete();
                $arr = array("status" => 200, "msg" => 'Company deleted successfully.');
            } else {
                $arr = array("status" => 400, "msg" => 'Company not found. please try again!');
            }

        } catch (\Illuminate\Database\QueryException $ex) {
            $msg = 'You can not delete this as related data are there in system.';
            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            }
            $arr = array("status" => 400, "msg" => $msg, "result" => array());
        } catch (Exception $ex) {
            $msg = 'You can not delete this as related data are there in system.';
            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            }
            $arr = array("status" => 400, "msg" => $msg, "result" => array());
        }
        return \Response::json($arr);
    
    }
}

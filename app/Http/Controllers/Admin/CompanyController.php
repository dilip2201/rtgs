<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Company;
use DataTables;
use Validator;
use Carbon\Carbon;
use App\User;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.company.index');
    }

    /**
     * Get all the users
     * @param Request $request
     * @return mixed
     */
    public function getall(Request $request)
    {

        \DB::enableQueryLog();
        $user = User::where('type','company')->orderby('id', 'desc');
        
        if ((isset($request->status) && !empty($request->status)) || $request->status == '0') {
            $user = $user->where('status',$request->status);
        }        
        $user = $user->get();
        
        return DataTables::of($user)
            ->addColumn('action', function ($q) {
                $id = encrypt($q->id);
                $return = '<a title="Edit"  data-id="'.$id.'"   data-toggle="modal" data-target=".add_modal" class="btn btn-info btn-sm openaddmodal" href="javascript:void(0)"><i class="fas fa-pencil-alt"></i></a> | <a class="btn btn-danger btn-sm delete_record" data-id="'.$q->id.'" href="javascript:void(0)"> <i class="fas fa-trash"></i> </a>';
                
                return $return;
            })
            ->addColumn('c_name', function ($q) {
                return $q->c_name;
            })
            ->addColumn('user_name', function ($q) {
                return $q->name;
            })
            ->addColumn('address', function ($q) {
                return $q->address;
            })
            ->addColumn('phone', function ($q) {
                return $q->phone;
            })
            ->addColumn('status', function ($q) {
                $id = encrypt($q->id);
                if ($q->status == '1') {
                    return ' <a  class="badge badgesize badge-success right changestatus" data-status="0" data-id="' . $id . '" href="javascript:void(0)">Enable</a>';
                }
                if ($q->status == '0') {
                    return '<a class="badge badgesize badge-danger right changestatus"  data-status="1"  data-id="' . $id . '" href="javascript:void(0)">Disable</a>';
                }
            })
            ->addIndexColumn()
            ->rawColumns(['image','status', 'action'])->make(true);
    }

    /**
     * Get model for add edit user
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getmodal(Request $request)
    {

        $company = array();
        if (isset($request->id) && $request->id != '') {
            $id = decrypt($request->id);
            $company = User::where('id',$id)->first();

        }
        return view('admin.company.getmodal', compact('company'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $rules = [
            'c_name' => 'required',
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
                    $user->c_name = $request->c_name;
                    $user->address = $request->address;
                    $user->email = $request->email;
                    $user->phone = $request->phone;
                    $user->save();
                    $msg = "Company updated successfully.";
                }else{
                    $token = random_int(10000000, 99999999);

                    $user = new User;
                    $user->name = $request->user_name;
                    $user->c_name = $request->c_name;
                    $user->address = $request->address;
                    $user->email = $request->email;
                    $user->token = $token;
                    $user->type = 'company';
                    $user->phone = $request->phone;
                    $user->save();

                    
                    $encrypted = Crypt::encryptString($token);
                   
                    $last_u_id = $user->id;
                    $resetpasslink = url('invite/password/'.$encrypted);
                    $data['name'] = $request->name;
                    $data['email'] = $request->email;
                    $data['url'] = $resetpasslink;
                    $data['text'] = "Welcome to RTGS Group! You're invited by ".Auth::user()->name.". Please verify your account and generate password to login in Intunor Group.";
                    $view = 'company-invitation';
                    $subject = "RTGS Group! You're invited to register ";
                    sendmail($data,$subject);
                    
                    $msg = "Company added successfully.";
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

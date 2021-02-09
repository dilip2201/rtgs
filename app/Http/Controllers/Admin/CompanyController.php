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

        $companies = Company::orderby('id', 'desc');
        if (isset($request->status) && !empty($request->status)) {
            $companies = $companies->where('status',$request->status);
        }
        if (isset($request->role) && !empty($request->role)) {
            $companies = $companies->where('role',$request->role);
        }
        
        $companies = $companies->get();
        return DataTables::of($companies)
            ->addColumn('action', function ($q) {
                $id = encrypt($q->id);
                $return = '<a title="Edit"  data-id="'.$id.'"   data-toggle="modal" data-target=".add_modal" class="btn btn-info btn-sm openaddmodal" href="javascript:void(0)"><i class="fas fa-pencil-alt"></i></a> | <a class="btn btn-danger btn-sm delete_record" data-id="'.$q->id.'" href="javascript:void(0)"> <i class="fas fa-trash"></i> </a>';
                
                return $return;
            })
            ->addColumn('c_name', function ($q) {
                return $q->c_name;
            })
            ->addColumn('user_name', function ($q) {
                return $q->user_name;
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
            $company = Company::where('id',$id)->first();

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
            $rules['email'] = 'required|email|unique:companies,email,'.$company_id;
        }else{
            $rules['email'] = 'required|email|unique:companies,email';
  
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $arr = array("status" => 400, "msg" => $validator->errors()->first(), "result" => array());
        } else {
            try {
                if (isset($company_id)) {
                    $companies = Company::find($company_id);
                    $companies->user_name = $request->user_name;
                    $companies->c_name = $request->c_name;
                    $companies->address = $request->address;
                    $companies->email = $request->email;
                    $companies->phone = $request->phone;
                    $companies->save();
                    $msg = "Company updated successfully.";
                }else{
                    $companies = new Company;
                    $companies->user_name = $request->user_name;
                    $companies->c_name = $request->c_name;
                    $companies->address = $request->address;
                    $companies->email = $request->email;
                    $companies->phone = $request->phone;
                    $companies->save();
                    $last_c_id = $companies->id;
                    $token = random_int(10000000, 99999999);
                    $encrypted = Crypt::encryptString($token);
                    $user = new User;
                    $user->name = $request->user_name;
                    $user->email = $request->email;
                    $user->token = $token;
                    $user->save();
                    $last_u_id = $user->id;
                    $resetpasslink = url('invite/password/'.$encrypted.'/'.encrypt($last_c_id));
                    $data['name'] = $request->name;
                    $data['email'] = $request->email;
                    $data['url'] = $resetpasslink;
                    $data['text'] = "Welcome to RTGS Group! You're invited by ".Auth::user()->name.". Please verify your account and generate password to login in Intunor Group.";
                    $view = 'company-invitation';
                    $subject = "RTGS Group! You're invited to register ";
                    sendmail($data,$subject);
                    $msg = 'Invitation sent successfully.';
                    $data = ['email' => $request->email, 'name' => $request->name];
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
            $holiday = Company::find($id);
            if ($holiday) {
                $holiday->update(['status' => $request->status]);
                $arr = array("status" => 200, "msg" => 'Holiday status change successfully.');
            } else {
                $arr = array("status" => 400, "msg" => 'Holiday not found. please try again!');
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
            $company = Company::find($id);
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

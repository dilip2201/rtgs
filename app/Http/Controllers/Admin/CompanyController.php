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
        $companies = User::where('type','company')->get();
        return view('admin.company.index',compact('companies'));
    }

    /**
     * Get all the users
     * @param Request $request
     * @return mixed
     */
    public function getall(Request $request)
    {

        \DB::enableQueryLog();
        $user = User::orderby('id', 'desc');

        if ((isset($request->status) && !empty($request->status)) || $request->status == '0') {
            $user = $user->where('status',$request->status);
        }
        if (isset($request->company) && !empty($request->company)) {
            $user = $user->where('parent_id',$request->company)->orwhere('id',$request->company);
        }
        $user = $user->get();

        return DataTables::of($user)
            ->addColumn('action', function ($q) {
                $id = encrypt($q->id);
                $return = '<a title="Edit"  data-id="'.$id.'"   data-toggle="modal" data-target=".add_modal" class="btn btn-info btn-sm openaddmodal" href="javascript:void(0)"><i class="fas fa-pencil-alt"></i></a> | <a class="btn btn-danger btn-sm delete_record" data-id="'.$q->id.'" href="javascript:void(0)"> <i class="fas fa-trash"></i> </a>';

                return $return;
            })
            ->addColumn('c_name', function ($q) {
                $name  = $q->type;
                if($q->type == 'company'){
                    $name = $q->c_name.' '.' (Head)';
                }
                return  $name;
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
            ->addColumn('added_by', function ($q) {
                if($q->type == 'user') {
                    $user = User::whereId($q->parent_id)->first();
                    return $user->c_name;
                } else {
                    return '-';
                }
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
                    $newTableName = $user->id."_benificiaries";
                    $createTableSqlString = "CREATE TABLE $newTableName (
                        id BIGINT(20) NOT NULL AUTO_INCREMENT,
                        user_id int(11) DEFAULT NULL,
                        nickname VARCHAR(191) NULL DEFAULT NULL,
                        name VARCHAR(191) NULL DEFAULT NULL,
                        account_number VARCHAR(191) NULL DEFAULT NULL,
                        account_type enum('current','savings','overdraft','cash_credit','nro','nre') NOT NULL DEFAULT 'savings',
                        address TEXT NULL DEFAULT NULL,
                        address2 TEXT NULL DEFAULT NULL,
                        area VARCHAR(191) NULL DEFAULT NULL,
                        city VARCHAR(191) NULL DEFAULT NULL,
                        state VARCHAR(191) NULL DEFAULT NULL,
                        pin VARCHAR(6) NULL DEFAULT NULL,
                        ifsc VARCHAR(30) NULL DEFAULT NULL,
                        bank_name VARCHAR(191) NULL DEFAULT NULL,
                        branch_name VARCHAR(191) NULL DEFAULT NULL,
                        mobile_number VARCHAR(191) NULL DEFAULT NULL,
                        email VARCHAR(191) NULL DEFAULT NULL,
                        is_remitter ENUM('yes','no') NOT NULL DEFAULT 'yes',
                        check_book_image VARCHAR(191) NULL DEFAULT NULL,
                        status ENUM('enabled','disabled') NOT NULL DEFAULT 'enabled',
                        created_at TIMESTAMP NULL DEFAULT NULL,
                        updated_at TIMESTAMP NULL DEFAULT NULL,
    					primary key(id)
                    ) COLLATE='utf8_general_ci' ENGINE=InnoDB AUTO_INCREMENT=1;";
                    DB::statement($createTableSqlString);

                    $transaction_table = $user->id."_transactions";
                    $transactioncreateTableSqlString = "CREATE TABLE $transaction_table (
                            id  BIGINT(20) NOT NULL AUTO_INCREMENT,
                            form_number int(11) DEFAULT NULL,
                            user_id int(11) DEFAULT NULL,
                            remmiter_id int(11) DEFAULT NULL,
                            beneficiary_id int(11) DEFAULT NULL,
                            amount decimal(10,0) NOT NULL,
                            cheque_number varchar(255) DEFAULT NULL,
                            transaction_method enum('neft','rtgs') NOT NULL DEFAULT 'neft',
                            transaction_date date DEFAULT NULL,
                            remarks text,
                            is_deleted enum('yes','no') NOT NULL DEFAULT 'no',
                            created_at TIMESTAMP NULL DEFAULT NULL,
                            updated_at TIMESTAMP NULL DEFAULT NULL,
                            primary key(id)) COLLATE='utf8_general_ci' ENGINE=InnoDB AUTO_INCREMENT=1";
                    DB::statement($transactioncreateTableSqlString);

                    $transaction_logs_table = $user->id."_transaction_logs";
                    $transactionlogscreateTableSqlString = "CREATE TABLE $transaction_logs_table (
                            id  BIGINT(20) NOT NULL AUTO_INCREMENT,
                            type enum('created','updated','deleted') NOT NULL,
                            user_id int(11) NOT NULL,
                            form_id int(11) NOT NULL,
                            created_at TIMESTAMP NULL DEFAULT NULL,
                            updated_at TIMESTAMP NULL DEFAULT NULL,
                            primary key(id)
                     ) COLLATE='utf8_general_ci' ENGINE=InnoDB AUTO_INCREMENT=1";
                     DB::statement($transactionlogscreateTableSqlString);

                    $transactionupdatedlogs_table = $user->id."_transaction_updated_logs";
                    $transactionupdatedlogscreateTableSqlString = "CREATE TABLE $transactionupdatedlogs_table (
                            id  BIGINT(20) NOT NULL AUTO_INCREMENT,
                            log_id  int(50) NOT NULL,
                            type VARCHAR(191) NOT NULL,
                            old_value VARCHAR(191) NOT NULL,
                            new_value VARCHAR(191) NOT NULL,
                            created_at TIMESTAMP NULL DEFAULT NULL,
                            updated_at TIMESTAMP NULL DEFAULT NULL,
                            primary key(id)
                     ) COLLATE='utf8_general_ci' ENGINE=InnoDB AUTO_INCREMENT=1";
                     DB::statement($transactionupdatedlogscreateTableSqlString);

                    $encrypted = Crypt::encryptString($token);

                    $last_u_id = $user->id;
                    $resetpasslink = url('invite/password/'.$encrypted);
                    $data['name'] = $request->user_name;
                    $data['email'] = $request->email;
                    $data['url'] = $resetpasslink;
                    $data['text'] = "Welcome to RTGS Group! You're invited by ".Auth::user()->name.". Please verify your account and generate password to login in RTGS.";
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
                User::where('parent_id',$company->id)->delete();
                if($company->type == 'company'){
                    \Schema::dropIfExists($company->id.'_benificiaries');
                    \Schema::dropIfExists($company->id.'_transactions');
                }
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

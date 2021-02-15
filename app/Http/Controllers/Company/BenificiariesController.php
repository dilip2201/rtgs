<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\User;
use DataTables;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\StateList;
use Carbon\Carbon;

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

    public function create($b_id = 0){

        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;
        }else{
            $id = auth()->user()->parent_id;
        }
        $states = StateList::get();
        $benificiary = DB::table($id.'_benificiaries')->where('id',$b_id)->first();

        return view('front.benificiaries.create',compact('benificiary','states'));
    }


     public function show($id){
         return view('front.benificiaries.view');
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
        return view('front.benificiaries.view', compact('user'));
    }
    
    public function store(Request $request)
    {
        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;
        }else{
            $id = auth()->user()->parent_id;
        }

        $rules = [
            'name' => 'required',
            'nickname' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
            'address' => 'required',
            'address2' => 'required',
            'pin' => 'required',
            'area' => 'required',
            'city' => 'required',
            'states' => 'required',
            'account_number' => 'required',
            'ifsc' => 'required',
            'branch_name' => 'required',
            'bank_name' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $arr = array("status" => 400, "msg" => $validator->errors()->first(), "result" => array());
        } else {
            try {
               
                if($request->is_remitter == ''){
                    $remitter = "no";
                }else{
                    $remitter = "yes";
                }
                if (isset($request->b_id)) {

                    DB::table($id.'_benificiaries')->where('id',$request->b_id)->update(
                        ['user_id' => Auth::user()->id,
                        'name' => $request->name,
                        'nickname' => $request->nickname,
                        'email' => $request->email,
                        'mobile_number' => $request->mobile_number,
                        'is_remitter' => $request->is_remitter,
                        'address' => $request->address,
                        'address2' => $request->address2,
                        'is_remitter'=>$remitter,
                        'pin' => $request->pin,
                        'area' => $request->area,
                        'city' => $request->city,
                        'state' => $request->states,
                        'account_number' => $request->account_number,
                        'ifsc' => $request->ifsc,
                        'branch_name' => $request->branch_name,
                        'updated_at' => Carbon::now(),
                        'bank_name' => $request->bank_name]);
                    return redirect('company/benificiaries')->with('status', 'Benificiaries Update successfully.');
                }else{

                    DB::table($id.'_benificiaries')->insert(['user_id' => Auth::user()->id,'name' => $request->name,'nickname' => $request->nickname,'email' => $request->email,'mobile_number' => $request->mobile_number,'is_remitter' => $request->is_remitter,'address' => $request->address,'address2' => $request->address2,'is_remitter'=>$remitter, 'pin' => $request->pin,'area' => $request->area,'city' => $request->city,'state' => $request->states,'account_number' => $request->account_number,'ifsc' => $request->ifsc,'branch_name' => $request->branch_name,'bank_name' => $request->bank_name,'created_at' => Carbon::now()]);
                    return redirect('company/benificiaries')->with('status', 'Benificiaries added successfully.');
                }
                
            } catch (\Illuminate\Database\QueryException $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) :
                    $msg = $ex->errorInfo[2];
                endif;
                return redirect('company/benificiaries')->with('error', $msg);

            } catch (Exception $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) :
                    $msg = $ex->errorInfo[2];
                endif;
                return redirect('company/benificiaries')->with('error', $msg);
            }
        }
    }

        /**
     * Get all the users
     * @param Request $request
     * @return mixed
     */
    public function getall(Request $request)
    {
        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;
        }else{
            $id = auth()->user()->parent_id;
        }
        $benificiaries = DB::table($id.'_benificiaries')->orderby('id', 'desc');
        $benificiaries = $benificiaries->get();
        
        return DataTables::of($benificiaries)
            ->addColumn('action', function ($q) {
                $id = encrypt($q->id);
                $return = '<a title="Edit"  data-id="'.$id.'"   data-toggle="modal" data-target="#exampleModalSizeLg" class="openaddmodal" href="javascript:void(0)"><i class="fa fa-eye"></i></a>  <a style="color:#000;"  href="'.route('company.benificiaries.edit',$q->id).'"  ><i class="fa fa-pencil"></i></a> ';
                
                return $return;
            })
            ->addColumn('name', function ($q) {
                return $q->name;
            })
            ->addColumn('nickname', function ($q) {
                return $q->nickname;
            })
            ->addColumn('bank_name', function ($q) {
                return $q->bank_name;
            })
            ->addColumn('account_number', function ($q) {
                return $q->account_number;
            })
            ->addColumn('is_remitter', function ($q) {
                $id = $q->id;
                if ($q->is_remitter == 'yes') {
                    return '<span class="label label-success label-dot mr-2"></span><span style="color:#1bc5bd!important; cursor:pointer;" class="font-weight-bold text-success">Yes</span>';
                }else{
                    return '<span class="label label-danger label-dot mr-2"></span><span  style="color:#f64e60!important; cursor:pointer;" class="font-weight-bold">No</span>';
                }
                
            })

            ->addColumn('status', function ($q) {
                $id = $q->id;
                if ($q->status == 'enabled') {
                    return '<span class="label label-success label-dot mr-2"></span><span style="color:#1bc5bd!important; cursor:pointer;" class="font-weight-bold changestatus" data-status="disabled" data-id="' . $id . '" text-success">Enabled</span>';
                }else{
                    return '<span class="label label-danger label-dot mr-2"></span><span  style="color:#f64e60!important; cursor:pointer;" class="font-weight-bold changestatus" data-status="enabled"  data-id="' . $id . '" text-success">Disabled</span>';
                }
                
               
            })
 
            ->addIndexColumn()
            ->rawColumns(['image','status', 'action','is_remitter'])->make(true);
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
            $id = 0;
            if(auth()->user()->parent_id == null){
                $id = auth()->user()->id;
            }else{
                $id = auth()->user()->parent_id;
            }
            $b_id = $request->id;
            $benificiary =  DB::table($id.'_benificiaries')->where('id',$b_id);
            if ($benificiary) {
                $benificiary->update(['status' => $request->status]);
                $arr = array("status" => 200, "msg" => 'Benificiary remitter status change successfully.');
            } else {
                $arr = array("status" => 400, "msg" => 'Benificiary not found. please try again!');
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

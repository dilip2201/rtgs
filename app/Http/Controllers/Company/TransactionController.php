<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use Auth;
use Carbon\Carbon;

class TransactionController extends Controller
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
        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        } else {
            $id = auth()->user()->parent_id;    
        }
        $remmiters = \DB::table($id.'_benificiaries')->where('is_remitter','yes')->get();
        $benificiaries = \DB::table($id.'_benificiaries')->get();
    	return view('front.transaction.index',compact('remmiters','benificiaries'));
    }

    public function getmodal(Request $request){
        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        } else {
            $id = auth()->user()->parent_id;    
        }
        $transactions = DB::table($id.'_transaction_logs')->where( $id.'_transaction_logs'.'.form_id', $request->id)->orderby('id','desc')->get();
        return view('front.transaction.getmodal',compact('transactions'));
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
        $getstartdate = $request->startdate;
        $startdate = explode("GMT", $getstartdate);
        $chkstartdate = date('Y-m-d', strtotime($startdate[0]));


        $getenddate = $request->enddate;
        $enddate = explode("GMT", $getenddate);
        $chkenddate = date('Y-m-d', strtotime($enddate[0]));

        $transactions = DB::table($id.'_transactions')->select([$id.'_transactions.*'])->orderby($id.'_transactions'.'.id', 'desc')->where($id.'_transactions'.'.is_deleted','no');



        if (isset($request->startdate) && !empty($request->startdate) && isset($request->enddate) && !empty($request->enddate)) {
            $transactions = $transactions->whereBetween($id.'_transactions'.'.transaction_date', [$chkstartdate, $chkenddate]);
        }

        if($request->remmiter  && !empty($request->remmiter)){
            $transactions = $transactions->where($id.'_transactions'.'.remmiter_id',$request->remmiter);
        }

        if($request->beneficiary  && !empty($request->beneficiary)){
            $transactions = $transactions->where($id.'_transactions'.'.beneficiary_id',$request->beneficiary);
        }

        if($request->mode  && !empty($request->mode)){
            $transactions = $transactions->where($id.'_transactions'.'.transaction_method',$request->mode);
        }

        $transactions = $transactions->get();
        	
        return DataTables::of($transactions)
            ->addColumn('actions', function ($q) {
                $id = $q->id;
                $return = '<a style="color:#000; margin-right:10px;"  href="'.route('company.form.copyform',$q->id).'"><i class="fas fa-copy" style="color:#616161;"></i></a> <a style="color:#000; margin-right:10px;"  data-id="'.$id.'"   data-toggle="modal" data-target=".add_modal" class="openaddmodal"   ><i class="fas fa-history" style="color:#616161;"></i></a>  <a style="color:#000; margin-right:10px;"  href="'.route('company.form.download',$q->id).'"  ><i class="fas fa-download" style="color:#616161;"></i></a> <a style="color:#000; margin-right:10px;"  href="'.route('company.form.edit',$q->id).'"  ><i class="fas fa-pen" style="color:#616161;"></i></a> <a class="delete_record" style="color:#000;cursor:pointer; margin-right:10px;" data-id="'.$q->id.'"><i class="fas fa-trash" style="color:#616161;"></i></a> ';

                
                return $return;
            })
            ->addColumn('form_id', function ($q) {
                return 'INV - '.$q->form_number;
            })
            ->addColumn('user', function ($q) {
                return getusername($q->user_id);
            })
            ->addColumn('beneficiary', function ($q) use($id) {
                return getbenificiaryfromtran($q->id,$id,'name');
            })
            ->addColumn('remmiter', function ($q) use($id) {
                return getusernamebenificiery($q->remmiter_id,$id);
            })
            ->addColumn('bank', function ($q) use($id) {
                return getbankbenificiery($q->remmiter_id,$id);
            })
            ->addColumn('date', function ($q) {
                return date('Y-m-d',strtotime($q->transaction_date));
            })
            ->addColumn('mode', function ($q) {
            	if($q->transaction_method == 'neft'){
            		return '<div style="border:1px solid #8950fc; padding:5px 15px 5px 7px; float:left; border-radius:5px;"><span class="label label-success label-dot mr-2" style="background-color:#8950fc;"></span><span style="color:#8950fc!important; cursor:pointer;" class="font-weight-bold">NEFT</span></div>';
            	}
            	if($q->transaction_method == 'rtgs'){
            		return '<div style="border:1px solid #ffa800; padding:5px 15px 5px 7px; float:left; border-radius:5px;"><span class="label label-success label-dot mr-2" style="background-color:#ffa800;"></span><span style="color:#ffa800!important; cursor:pointer;" class="font-weight-bold">RTGS</span></div>';
            	}
            })
             ->addColumn('amount', function ($q) {
                return $q->amount;
            })
            
            ->addIndexColumn()
            ->rawColumns(['image','status', 'actions','mode'])->make(true);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tid)
    {
        try {

            $id = 0;
            if(auth()->user()->parent_id == null){
                $id = auth()->user()->id;
            }else{
                $id = auth()->user()->parent_id;
            }
                   DB::table($id.'_transaction_logs')->insert([
                        'user_id' => Auth::user()->id,
                        'type' => 'deleted',
                        'form_id' => $tid,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()]);
            $transactions = DB::table($id.'_transactions')->where('id', $tid)->update(['is_deleted'=>'yes']);
            $arr = array("status" => 200, "msg" => 'Company deleted successfully.');

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

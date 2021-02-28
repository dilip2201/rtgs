<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Auth;
use Carbon\Carbon;
use PDF;

class FormController extends Controller
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

    
    public function download($downloadid){

        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        }else{
            $id = auth()->user()->parent_id;    
        }
        $transactiontable = $id.'_transactions';
        $benificiarytable = $id.'_benificiaries';

        define("DOMPDF_UNICODE_ENABLED", true);
         $rdata = DB::table($transactiontable)
        ->join($benificiarytable.' as b','b.id',$transactiontable.'.beneficiary_id')
        ->join($benificiarytable.' as r','r.id',$transactiontable.'.remmiter_id')
        ->where($transactiontable.'.id', $downloadid)
        ->select([$transactiontable.'.*','b.name as bname','r.name as rname','r.address as raddress','r.address2 as raddress2','r.area as rarea','r.city as rcity','r.state as rstate','r.pin as rpin','r.mobile_number as rmobile_number','b.account_number as baccount_number','b.bank_name as bbank_name','b.ifsc as bifsc','b.branch_name as bbranch_name','r.account_number as raccount_number'])
        ->first();
        $pdf = PDF::setPaper('a4', 'portrait')->loadView('page', ['data'=>$rdata]);
        return $pdf->download('icic.pdf');
    }

    public function copy($copyid){
        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        }else{
            $id = auth()->user()->parent_id;    
        }
        $data = DB::table($id.'_transactions')->where('id', $copyid)->first();
        if(!empty($data)){
            $inser_table = DB::table($id.'_transactions')->insert(['user_id' => Auth::user()->id,
            'remmiter_id' => $data->remmiter_id,
            'beneficiary_id' => $data->beneficiary_id,
            'amount' => $data->amount,
            'cheque_number' => $data->cheque_number,
            'transaction_method' => $data->transaction_method,
            'transaction_date' => date('Y-m-d',strtotime($data->transaction_date)),
            'remarks' => $data->remarks,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
        
            $last_id = \DB::getPdo()->lastInsertId();
            DB::table($id.'_transaction_logs')->insert([
                'user_id' => Auth::user()->id,
                'type' => 'created',
                'form_id' => $last_id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()]);
        }
       
        return redirect('company/transaction')->with('status', 'Transaction copied successfully.');
    }

    public function create($tid = 0){
    	$id = 0;
        $type = 'create';
		if(auth()->user()->parent_id == null){
			$id = auth()->user()->id;	
		} else {
			$id = auth()->user()->parent_id;	
		}
		$benificiaries = \DB::table($id.'_benificiaries')->where('status','enabled')->get();
        $remmiters = \DB::table($id.'_benificiaries')->where('is_remitter','yes')->where('status','enabled')->get();
        $transaction = \DB::table($id.'_transactions')->where('id',$tid)->first();
    	return view('front.form.create',compact('benificiaries','remmiters','transaction','type'));
    }

    public function copyform($tid = 0){
        $id = 0;
        $type = 'copy';
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        } else {
            $id = auth()->user()->parent_id;    
        }
        $benificiaries = \DB::table($id.'_benificiaries')->get();
        $remmiters = \DB::table($id.'_benificiaries')->where('is_remitter','yes')->get();
        $transaction = \DB::table($id.'_transactions')->where('id',$tid)->first();
        return view('front.form.create',compact('benificiaries','remmiters','transaction','type'));
    }

    public function printsectionmodal(){


        define("DOMPDF_UNICODE_ENABLED", true);
        $data = array();
        $rand_num = rand(10,100);
        $pdf = PDF::setPaper('a4', 'portrait')->loadView('pagetwo', $data);
        $filename = $rand_num.".pdf";
        $pdf->save('public/pdf/'.$filename);
        return view('front.form.pdfload',compact('rand_num'));
    }

    public function formpdf($id = 0,Request $request){
       
        // $pdf = PDF::loadView('front.form.formpdf');
        // return $pdf->stream('report.pdf');
        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        }else{
            $id = auth()->user()->parent_id;    
        }
        $data = [];
        $data = DB::table($id.'_transactions')->leftJoin($id.'_benificiaries', $id.'_transactions'.'.beneficiary_id', '=', $id.'_benificiaries'.'.id')->orderby($id.'_transactions'.'.id', 'desc')->where($id.'_transactions'.'.is_deleted','no')->where($id.'_transactions'.'.id', 1)->first();

         return view('front.form.formpdf',compact('data'));
    }

    public function getdata(Request $request){

        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        }else{
            $id = auth()->user()->parent_id;    
        }
        $benificiary = \DB::table($id.'_benificiaries')->where('id',$request->remmiter)->first();
        return view('front.form.remmiter',compact('benificiary'));
    }



    public function getdatabenificiaries(Request $request){

        $id = 0;
        if(auth()->user()->parent_id == null){
            $id = auth()->user()->id;   
        }else{
            $id = auth()->user()->parent_id;    
        }
        $benificiary = \DB::table($id.'_benificiaries')->where('id',$request->benificiaries)->first();
        return view('front.form.benificiaries',compact('benificiary'));
        
        
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
            'remmiter_id' => 'required',
            'beneficiary_id' => 'required',
            'amount' => 'required',
            'cheque_number' => 'required',
            'transaction_method' => 'required',
            'transaction_date' => 'required',
        ];
        
        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $arr = array("status" => 400, "msg" => $validator->errors()->first(), "result" => array());
        } else {
            try {
                if(isset($request->transaction_id) && $request->transaction_id != '' && $request->type == 'create') {
                    $t_id = decrypt($request->transaction_id);

                    $first_transaction = DB::table($id.'_transactions')->where('id',$t_id)->first();
                    
                    DB::table($id.'_transaction_logs')->insert([
                        'user_id' => Auth::user()->id,
                        'type' => 'updated',
                        'form_id' => $t_id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now()]);


                    $last_trans_id = DB::getPdo()->lastInsertId();


                    
                    if($first_transaction->remmiter_id != $request->remmiter_id){
                        DB::table($id.'_transaction_updated_logs')->insert([
                            'log_id' => $last_trans_id,
                            'type' => 'remmiter_id',
                            'old_value' => $first_transaction->remmiter_id,
                            'new_value' => $request->remmiter_id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);

                    }
                    if($first_transaction->beneficiary_id != $request->beneficiary_id){
                        DB::table($id.'_transaction_updated_logs')->insert([
                            'log_id' => $last_trans_id,
                            'type' => 'beneficiary_id',
                            'old_value' => $first_transaction->beneficiary_id,
                            'new_value' => $request->beneficiary_id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);
                    }
                    if($first_transaction->amount !== $request->amount){
                       
                        DB::table($id.'_transaction_updated_logs')->insert([
                            'log_id' => $last_trans_id,
                            'type' => 'amount',
                            'old_value' => $first_transaction->amount,
                            'new_value' => $request->amount,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);
                    }
                    if($first_transaction->cheque_number !== $request->cheque_number){
                        DB::table($id.'_transaction_updated_logs')->insert([
                            'log_id' => $last_trans_id,
                            'type' => 'cheque_number',
                            'old_value' => $first_transaction->cheque_number,
                            'new_value' => $request->cheque_number,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);
                    }
                    if($first_transaction->transaction_method !== $request->transaction_method){
                        DB::table($id.'_transaction_updated_logs')->insert([
                            'log_id' => $last_trans_id,
                            'type' => 'transaction_method',
                            'old_value' => $first_transaction->transaction_method,
                            'new_value' => $request->transaction_method,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);
                    }
                    if($first_transaction->transaction_date !== $request->transaction_date){
                        DB::table($id.'_transaction_updated_logs')->insert([
                            'log_id' => $last_trans_id,
                            'type' => 'transaction_date',
                            'old_value' => $first_transaction->transaction_date,
                            'new_value' => $request->transaction_date,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);
                    }
                    DB::table($id.'_transactions')->where('id',$t_id)->update(
                        ['user_id' => Auth::user()->id,
                        'remmiter_id' => $request->remmiter_id,
                        'beneficiary_id' => $request->beneficiary_id,
                        'amount' => $request->amount,
                        'cheque_number' => $request->cheque_number,
                        'transaction_method' => $request->transaction_method,
                        'transaction_date' => date('Y-m-d',strtotime($request->transaction_date)),
                        'remarks' => $request->remarks,'updated_at'=>Carbon::now()]);
                    return redirect('company/transaction')->with('status', 'Transaction Update successfully.');
                }else{
                    $form_id = '1001';
                    $qry = DB::table($id.'_transactions')->orderby('id','desc')->first();
                    if(!empty($qry)){
                        $form_id = $qry->form_number +1;
                    }
                    DB::table($id.'_transactions')->insert(['user_id' => Auth::user()->id,
                        'remmiter_id' => $request->remmiter_id,
                        'beneficiary_id' => $request->beneficiary_id,
                        'amount' => $request->amount,
                        'cheque_number' => $request->cheque_number,
                        'transaction_method' => $request->transaction_method,
                        'transaction_date' => date('Y-m-d',strtotime($request->transaction_date)),
                        'form_number' => $form_id,
                        'remarks' => $request->remarks,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

                        $last_id = DB::getPdo()->lastInsertId();

                    DB::table($id.'_transaction_logs')->insert([
                            'user_id' => Auth::user()->id,
                            'type' => 'created',
                            'form_id' => $last_id,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now()]);

                    if($request->type == 'create'){
                        return redirect('company/transaction')->with('status', 'Transaction added successfully.');
                    }
                    if($request->type == 'copy'){
                        return redirect('company/transaction')->with('status', 'Transaction copied successfully.');
                    }
                    
                }
                
            } catch (\Illuminate\Database\QueryException $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) :
                    $msg = $ex->errorInfo[2];
                endif;
                return redirect('company/transaction')->with('error', $msg);

            } catch (Exception $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) :
                    $msg = $ex->errorInfo[2];
                endif;
                return redirect('company/transaction')->with('error', $msg);
            }
        }
    }
    
}

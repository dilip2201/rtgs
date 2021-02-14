<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use DB;
use Auth;
use Carbon\Carbon;
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

  

    public function create(){
    	$id = 0;
		if(auth()->user()->parent_id == null){
			$id = auth()->user()->id;	
		}else{
			$id = auth()->user()->parent_id;	
		}


		$benificiaries = \DB::table($id.'_benificiaries')->get();
        $remmiters = \DB::table($id.'_benificiaries')->where('is_remitter','yes')->get();

    	return view('front.form.create',compact('benificiaries','remmiters'));
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
               
                
                
                if (isset($request->transaction_id) && $request->transaction_id != '') {

                    DB::table($id.'_transactions')->where('id',$request->b_id)->update(
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
                        'bank_name' => $request->bank_name]);
                    return redirect('company/benificiaries')->with('status', 'Benificiaries Update successfully.');
                }else{

                    DB::table($id.'_transactions')->insert(['user_id' => Auth::user()->id,
                        'remmiter_id' => $request->remmiter_id,
                        'beneficiary_id' => $request->beneficiary_id,
                        'amount' => $request->amount,
                        'cheque_number' => $request->cheque_number,
                        'transaction_method' => $request->transaction_method,
                        'transaction_date' => date('Y-m-d',strtotime($request->transaction_date)),
                        'remarks' => $request->remarks,'created_at'=>Carbon::now()]);
                    return redirect('company/benificiaries')->with('status', 'Benificiaries added successfully.');
                }
                
            } catch (\Illuminate\Database\QueryException $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) :
                    $msg = $ex->errorInfo[2];
                endif;
                return redirect('company/benificiaries')->with('error', 'Benificiaries added successfully.');

            } catch (Exception $ex) {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2])) :
                    $msg = $ex->errorInfo[2];
                endif;
                return redirect('company/benificiaries')->with('error', 'Benificiaries added successfully.');
            }
        }
    }
    
}

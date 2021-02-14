<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DataTables;
use Auth;
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
    	return view('front.transaction.index');
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
        

        $transactions = DB::table($id.'_transactions')->orderby('id', 'desc');
        $transactions = $transactions->get();
        	
        return DataTables::of($transactions)
            ->addColumn('actions', function ($q) {
                $id = encrypt($q->id);
                $return = '<a style="color:#000;"  href="'.route('company.form.edit',$q->id).'"  ><i class="fa fa-pencil"></i></a> ';
                
                return $return;
            })
            ->addColumn('user', function ($q) {
                return getusername($q->user_id);
            })
            ->addColumn('beneficiary', function ($q) use($id) {
                return getusernamebenificiery($q->beneficiary_id,$id);
            })
            ->addColumn('remmiter', function ($q) use($id) {
                return getusernamebenificiery($q->remmiter_id,$id);
            })
            ->addColumn('bank', function ($q) {
                return 'ICIC Bank';
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
}

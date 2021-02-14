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
                return $q->transaction_method;
            })
             ->addColumn('amount', function ($q) {
                return $q->amount;
            })
            
            ->addIndexColumn()
            ->rawColumns(['image','status', 'actions'])->make(true);
    }
}

<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    
    
    
}

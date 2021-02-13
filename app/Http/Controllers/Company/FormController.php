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
    	return view('front.form.create',compact('benificiaries'));
    }
    
}

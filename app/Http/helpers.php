<?php

use Mail as MailUser;
use App\User;
use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;



/************************************** For Active sidebar *****************************/

function activeMenu($uri = '') {

    $active = '';
    if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
        $active = 'active';
    }
    return $active;
}


function lastnameemail(){
    $name = '';
    $emaildata = \DB::table('password_resets')->orderby('created_at','desc')->first();
    if(!empty($emaildata)){
        $user = \DB::table('users')->where('email',$emaildata->email)->first();
        if(!empty($user)){
            $name = $user->name;
        }
    }
    return $name;
}

function activeMenucompany($uri = '') {

    $active = '';
    if (Request::is(Request::segment(1) . '/' . $uri . '/*') || Request::is(Request::segment(1) . '/' . $uri) || Request::is($uri)) {
        $active = 'menu-item-active';
    }
    return $active;
}

function parentidlogin($uid){
    $user = \DB::table('users')->where('id',$uid)->first();
    if(!empty($user->parent_id)){
        $user = \DB::table('users')->where('id',$user->parent_id)->first();
    }
    return $user->status;
}
function getusername($uid) {
    $user = \DB::table('users')->where('id',$uid)->first();
    $return = '-';
    if(!empty($user)){
        $return = $user->name;
    }
    return $return;
}

function getusernamebenificiery($benificieryid, $id) {
    $user = \DB::table($id.'_benificiaries')->where('id',$benificieryid)->first();
    $return = '-';
    if(!empty($user)){
        $return = $user->name;
    }
    return $return;
}

function getbenificiary($benificieryid) {

    $id = 0;
    if(auth()->user()->parent_id == null){
        $id = auth()->user()->id;   
    } else {
        $id = auth()->user()->parent_id;    
    }
    $user = \DB::table($id.'_benificiaries')->where('id',$benificieryid)->first();
    $return = array();
    if(!empty($user)){
        $return = $user;
    }
    return $return;
}






function checkPermission($permissions){
	if(auth()->check())
	{
		$userAccess = auth()->user()->type;
		foreach ($permissions as $key => $value) {
			if($value == $userAccess){
				return true;
			}
		}
		return false;
	}else{
		return false;
	}
}

function sendmail( $data, $subject)
{
    $receiveremail = $data['email'];
    MailUser::send('admin.mailtemplate.mail', array(
        'email' => $receiveremail,
        'data' => $data
    ), function ($message) use ($receiveremail, $subject) {
        $message->to($receiveremail)->subject($subject);
    });
    if (MailUser::failures()) {
        //  dd('failed');
    }else{
        \Illuminate\Support\Facades\Log::info('Mail sent successfully to : '.$receiveremail.'.');
    }
}
function getstring2latter($str = "") {
    $acronym = "";
    $words = explode(" ", $str);

    if(count($words) > 1){
    foreach ($words as $w) {
    $acronym .= $w[0];
    }
    }else{
    $acronym = substr($str, 0,2);
    }
    return $acronym;
}
function random_color_part() {
return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
return random_color_part() . random_color_part() . random_color_part();
}
?>

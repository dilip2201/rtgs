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


function checkPermission($permissions){
	if(auth()->check())
	{
		$userAccess = auth()->user()->role;
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
?>

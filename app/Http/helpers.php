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

function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);                              
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}

function number_to_word($number){
   $no = floor($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
 return $result . "Rupees  " . $points ;
}
?>

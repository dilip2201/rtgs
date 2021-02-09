<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Company;
use App\User;
use App\UserInvitaionPermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PasswordSetupController extends Controller
{
    /**
     * Dev :- Dhruv Joshi
     * Date :- 18-01-2021
     * Description :- Returns password invitation view for invited users
     * @params Reqeust $request
     * @return view
     */

    public function setPassInvitationView($token,$id)
    {

        $decrypted = Crypt::decryptString($token);
        $isuserexist = User::where('token',$decrypted)->count();
        if($isuserexist == 1) {
            return view('admin.company_password.index',compact('token','id'));
        } else {
            return view('admin.company_password.invalid-token');
        }
    }

    /**
     * Dev :- Dhruv Joshi
     * Date :- 18-01-2021
     * Description :- Update Invited user password
     * @params Reqeust $request
     * @return view
     */

    public function setNewPassword(Request $request)
    {
        $rules['password'] = 'required';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            $arr = array("status"=>400,"msg"=>$validator->errors()->first(),"result"=>array());
        } else {
            $decrypted = Crypt::decryptString($request->token);
            $isuserexist = User::where('token',$decrypted)->first();
            if(!empty($isuserexist)) {
                $isuserexist->password = Hash::make($request->password);
                $isuserexist->token = null;
                $isuserexist->save();
                $company_id = decrypt($request->id);
                $companies = Company::find($company_id);
                $companies->status = true;
                $companies->save();
                $msg = 'Password set successfully. Please login.';
                return redirect()->route('login');
            }
        }
    }
}

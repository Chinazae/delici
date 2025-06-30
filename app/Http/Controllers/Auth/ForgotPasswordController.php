<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    //use SendsPasswordResetEmails;
//first step
    public function forgetPassword()
    {
        return view('auth.passwords.forget-password');
    }

    //second step
    function sendEmail($email, $code){
      $data=array(
        'body'=>$code,

      );

      $view='emails.password_reset';


      try{
//Mail::to($email)->send(new PasswordResetMail($code));

Mail::send($view, $data, function($message) use($email){
$message->to($email, 'Delici')->subject('Delici Reset Password');
$message->from('chinyerechinazaekpere@gmail.com', 'Delici support');
});
      }catch(Exception $e){
dd($e->getMessage());
return redirect()->back()->with('error', $e->getMessage());
      }
    }


    //third step
    public function forgotPassword(Request $request){
        $activation_code=random_int(100000, 999999);

        $user=User::where('email', $request->email)->first();

//dd($user);
        if($user){
            try{
$user->activation_code=$activation_code;
$user->save();

            }catch(Exception $e){
                return redirect()->back()->with('error', $e->getMessage());
            }
            $this->sendEmail($user->email, $activation_code);
            return redirect()->route('confirmCode.email', ["user_email"=>$user->email]);
        }
    }

//fourth step
    protected function confirmCode(){
        return view('auth.passwords.confirm_code', ['email'=>request()->user_email]);
    }

    //fifth step
    protected function submitPasswordResetCode(Request $request)
    {
        $code=$request->code;
        //dd($code);
        $email=$request->user_email;
        //dd($email);

        $account=User::where('email', $email)->first()??false;
        if($account){
            if($code==$account->activation_code){
$account->activation_code=null;
return redirect()->route('password-reset',['user_email'=>$email]);
            }else{
                return redirect()->route('confirmCode.email', ["user_email"=>$email])->with('error', 'invalid code');
            }
        }
    }

//sixth step
    protected function passwordReset()
    {
        return view('auth.passwords.reset', ['email'=>request()->user_email]);
    }


    //seventh step
    protected function createNewPassword(Request $request)
    {
        if($request->password!==$request->confirm_password){
            return redirect()->back()->with('error', 'Password mismatch');
        }else{
            $password=Hash::make($request->password);
            $user=User::where('email', $request->user_email)->first();
            try{
                $user->password=$password;
                $user->save();
            }catch(Exception $e){
return redirect()->back()->with('error', $e->getMessage());
            }
            return redirect()->route('login')->with('message', 'Password updated successfully, please login');
        }
    }
}

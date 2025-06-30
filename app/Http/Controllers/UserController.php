<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

    public function signUp()
    {
        //dd('Register View');
        return view('auth.register');
    }

    public function aboutUs()
    {
        //dd('About Us View');
        return view('about');
    }

    public function contactUs()
    {
        //dd('About Us View');
        return view('contact-us');
    }

    public function menuOne()
    {
        //dd('About Us View');
        return view('menuone');
    }

    public function menuTwo()
    {
        //dd('About Us View');
        return view('menutwo');
    }

    public function menuThree()
    {
        //dd('About Us View');
        return view('menuthree');
    }

    public function menuFour()
    {
        //dd('About Us View');
        return view('menufour');
    }


    public function createUser(Request $request)
    {
        //validation
        $validator=Validator::make($request->all(),[
'name'=>'required|string',
'email'=>'required|email|unique:users,email|max:255,string',
'password'=>'required|min:5|max:40',
'confirm_password'=>'required|min:5|max:40|same:password',

        ],
        [
            "email.unique"=>"This email is already registered. Please sign in or use a different email",
            //"name.required"=>""
        ]
    );

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->otp_sent_at = now(); // Update the timestamp of when the OTP was sent

        //generate otp
        ($user->email_verification_otp=rand(100000, 999999));

        $save=$user->save();

        if($save){
            //send otp mail
            Mail::to($user->email)->send(new OtpMail($user->email_verification_otp));
            return redirect()->route('verify.otp', ['email'=>$user->email]);
        }else{
            return redirect()->back()->with('error', 'Registration failed');
        }
    }

      public function user_dashboard()
    {
        return view('welcome');
    }


    public function showOtpForm($email)
    {
        //dd($email);
        return view('auth.verify-otp', compact('email'));
    }


    public function submitOtp(Request $request, $email)
    {
        $request->validate([
            'otp' => 'required|numeric|digits:6'
        ]);

        $user = User::where('email', $email)
                    ->where('email_verification_otp', $request->otp)
                    ->first();

        if ($user) {
            // Check if the OTP is still valid (within 5 minutes)
            $otpSentAt = $user->otp_sent_at; // Assuming `otp_sent_at` is the timestamp when the OTP was sent
            $currentTime = Carbon::now();

            if ($otpSentAt && $currentTime->diffInMinutes($otpSentAt) <= 5) {
                // OTP is valid
                $user->email_verified_at = Carbon::now();
                $user->email_verification_otp = null; // Clear the OTP after successful verification
                $user->save();

                return redirect()->route('login')->with('message', 'Email verified successfully, please login');
            } else {
                // OTP is invalid (older than 5 minutes)
                return redirect()->back()->with('error', 'OTP has expired. Please request a new one.');
            }
        } else {
            // Invalid OTP (does not match)
            return redirect()->back()->with('error', 'Invalid OTP');
        }
    }


    public function resendOtp($email)
    {
        $user = User::where('email', $email)->first();

        if (!$user) {
            return response()->json(['error' => 'User not found.'], 404);
        }

        // Check if the OTP was sent recently (within the last 60 seconds)
        $lastSent = $user->otp_sent_at; // Assuming you have an `otp_sent_at` column in your users table
        if ($lastSent && now()->diffInSeconds($lastSent) < 60) {
            return response()->json(['error' => 'Please wait 60 seconds before requesting a new OTP.'], 429);
        }

        // Generate a new OTP
        $user->email_verification_otp = rand(100000, 999999);
        $user->otp_sent_at = now(); // Update the timestamp of when the OTP was sent
        $user->save();

        // Send the OTP via email
        Mail::to($user->email)->send(new OtpMail($user->email_verification_otp));

        return response()->json(['message' => 'A new OTP has been sent to your email.']);
    }


}

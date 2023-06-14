<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VerificationCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class AuthOtpController extends Controller
{
    // Return View of OTP Login Page
    public function login()
    {
        return view('auth.login');
    }

    // Generate OTP
    public function generate(Request $request)
    {
        # Validate Data
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);

        $user = DB::table('users')
            ->where('email', $request->email)
            ->where('status', 'active')
            ->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                # Generate An OTP
                $verificationCode = $this->generateOtp($user);

                $message = "Your OTP To Login is - " . $verificationCode->otp;
                # Return With OTP
                return redirect()->route('otp.verification', ['user_id' => $user->id]);
                // $deleteotp = VerificationCode::destroy()->first();
            } else {
                return redirect()->back()->with('error', 'Password not correct');
            }
        } else {
            return redirect()->back()->with('error', 'User not found');
        }

    }

    public function generateOtp($user)
    {

        # User Does not Have Any Existing OTP
        $verificationCode = VerificationCode::where('user_id', $user->id)->latest()->first();
        $phone = $user->mobile_no;
        $now = Carbon::now();

        if ($verificationCode && $now->isBefore($verificationCode->expire_at)) {
            return $verificationCode;
        }

        $otpCode = 12345;
//        $otpCode = rand(12345, 99999);
        //$this->sendSms("$phone", "Hi,your otp code for saccos management system is $otpCode, Thank you");
        //


        // Create a New OTP
        return VerificationCode::create([
            'user_id' => $user->id,
            'otp' => $otpCode,
            'expire_at' => Carbon::now()->addMinutes(5),
        ]);
        // dd($message);
    }

    public function verification($user_id)
    {
        return view('auth.otp-verification')->with([
            'user_id' => $user_id,
        ]);
    }

    public function loginWithOtp(Request $request)
    {
            // dd($request->all());
        #Validation
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'otp' => 'required',
        ]);
        #Validation Logic
        $verificationCode = VerificationCode::where('user_id', $request->user_id)->where('otp', $request->otp)->first();

        $now = Carbon::now();
        if (!$verificationCode) {
            return redirect()->back()->with('error', 'Your OTP is not correct');
        } elseif ($verificationCode && $now->isAfter($verificationCode->expire_at)) {
            return redirect()->route('otp.login')->with('error', 'Your OTP has been expired');
        }

        $user = User::whereId($request->user_id)->first();
        if ($user) {

            Auth::login($user);
            $verificationCode->delete();
            return redirect()->route('dashboard');
        }

        return redirect()->route('otp.login')->with('error', 'Your Otp is not correct');
    }

//    public function sendSms($phone, $message)
//    {
//
//        $body = [
//            "from" => "",
//            "to" => "+" . $phone,
//            "body" => $message,
//            "reference" => Str::random(8),
//        ];
//
//        $response = Http::withHeaders([
//            "accept" => 'application/json',
//            "content-type" => 'application/json',
//            "authorization" => "Bearer 2|coZHVo9xUGDjvj3s7LtJJVb4GKtDJJ42AJGAzvVa",
//        ])->post('http://192.231.237.87:8083/api/v1/text/single', $body);
//
//        // dd($response->body());
//    }
}

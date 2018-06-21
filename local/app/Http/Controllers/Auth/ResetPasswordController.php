<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use DB;
use Mail;
use Hash;
use Log;
use Session;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest');
    }


    // public function show_reset_form($email) {
    //   $test = DB::table('users')->where('email',$email)->first();
    //   if(time() < $test->reset_on_timestamp+(5*60)) {//link expires in five minutes
    //     return view('auth.passwords.reset')->with('email',$email);
    //   }
    //   else {
    //     echo "Link Expired";
    //   }
    // }



    public function forgot() {
      return view('auth.passwords.email');
    }



    public function send_reset_link() {

      $email = $_POST['email'];
      $res = DB::table('users')->where('email',$email)->first();
      if($res!=null) {
        $array =  (array) $res->email;
         $link=url('show_reset_form',$res->email);
             $test = Mail::send('reset_password', ['link'=>$link], function($message) use ($array) {
                 $message->to($array);
                $message->subject('E-Mail Example');
              });
              DB::table('users')->where('email',$email)->update(['reset_on_timestamp'=>time()]);
              Log::info("email sent to ".$email." on ".date('l jS \of F Y h:i:s A'));
             Session::flash('email_sent','Please Check Your Email and Reset Using The Link Sent!!!');
            return Redirect()->route('login');
      }
      else {
        Log::info("email sending failed to ".$email." on ".date('l jS \of F Y h:i:s A'));
            Session::flash('invalid_email','Please Enter A Valid Email');
            return Redirect()->route('login');
      }


    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use DB;
use Session;
use Hash;
use Log;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request) {

        $test = $request->all();
        unset($test['_token']);
        // print_r($test);exit;
        // print_r(Auth::attempt($test));exit;
        $this->validate($request,[
          'email'=>'email|required|exists:users,email',
          'password'=>'required'
        ]);

        $email = $request->input('email');
        // $password =$request->input('password');
        $rec = DB::table('users')->where('email',$email)->first();

        // $password_db = $rec->password;
        // if(Hash::check($password,$password_db)) {
        //
        // }
        // else {
        //   Session::flash('login_failed','Incorrect Email Or Password');
        //   return Redirect()->route('login');
        // }

        if(Auth::attempt($test)) {
          $username = $rec->name;
          Session::put('username',$username);
          Session::put('email',$email);
          Session::put('role',$rec->role);
          return redirect()->route('admin');
        }
        else {
          Session::flash('login_failed','Incorrect Email Or Password');

          return Redirect()->route('login');

        }

        // if (Auth::attempt(['email' => $email, 'password' => $password])) {
        //     // Authentication passed...
        //     return redirect()->route('admin');
        // }
        // else {
        //     echo "failed";
        // }

    }
    public function logout() {
        Log::info("User '".Session::get('username')."' logged out in ".date('l jS \of F Y h:i:s A'));
        session()->flush();
        return redirect()->route('login');
    }
    // public function users() {
    // }

}

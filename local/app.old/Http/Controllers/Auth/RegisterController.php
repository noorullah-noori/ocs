<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Hash;
use DB;
use Auth;
use Carbon\Carbon;
use App\Log;
use Session;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin/users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    
    protected function show_register() {
        return view('admin.register');
    }

//     protected function register(Request $request) {

//         $this->validate($request,[
//           'name'=>'required',
//           'email'=>'required|unique:users|max:30',
//           'password'=>'required|confirmed|min:8'
//         ]);
//         $user = new User();
//         $user->name = $request->input('name');
//         $user->email = $request->input('email');
//         $user->password = Hash::make($request->input('password'));
//         $user->role = $request->input('role');
//         $user->save();
//         return Redirect()->Route('users');
// =======
    protected function register(Request $request) {
      
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password =Hash::make($_POST['password']);
        $password_confirmation =$_POST['password_confirmation'];
        if(Hash::check($password_confirmation,$password)) {
            $user = new User();
            $db = DB::table('users')->where('email',$email)->first();
            if($db==null) {
                  
                $log = new Log();

                $user->name = $name;
                $user->email = $email;
                $user->password = $password;
                $user->role = $_POST['role'];
                
                $user->save();
                
                $log->table_name = 'users';
                $log->table_item_id = $user->id;
                $log->activity = 'create';
                $log->user_id = Auth::user()->id;
                $log->save();

                // Log::info($user->email." created on ".date('l jS \of F Y h:i:s A'));
                return Redirect()->Route('users');
            }
            else {
              // Log::info($user->email." user creation failed on ".date('l jS \of F Y h:i:s A'));
                Session::flash('user_exists','User Already Exists');
                Session::put('email_exists',$email);
                return Redirect()->Route('register_user');
            }
        }
        else {
          // Log::info($user->email." user creation failed on ".date('l jS \of F Y h:i:s A'));
            Session::flash('bad_match','Passwords Do not Match');
            return Redirect()->Route('register_user');
        }
    }

    public function edit_user($id) {
        $user = User::findOrFail($id);
        return view('admin.edit_user')->with('user',$user);
    }

       public function update_user($id,Request $request) {
      $user = User::findOrFail($id);
      $user->name = $request->input('name');
      $user->email = $request->input('email');
      $user->role = $request->input('role');
      $user->save();

      $log = new Log();

      $log->table_name = 'users';
      $log->table_item_id = $id;
      $log->activity = 'update';
      $log->user_id = Auth::user()->id;
      $log->save();

      // Log::info("User '".$user->email."' updated on ".date('l jS \of F Y h:i:s A'));
      return Redirect()->route('users');
    }

     public function show_reset_form($email) {
      $user = DB::table('users')->where('email',$email)->first();
      // if(time() < $user->reset_on_timestamp+(5*60)) {
        return view('auth.passwords.reset')->with('email',$email);
      // }
      // else {
      //   echo "Link Expired";
      // }
    }

     public function reset_password(Request $request) {
        if(isset($_POST['password'])) {
            if(Session::has('email')) {
                session()->flush();
                $email = $_POST['email'];
                $password = $_POST['password'];
                // print_r($email);exit;
                DB::table('users')->where('email',$email)->update(['password'=>Hash::make($password)]);
                // Log::info($email." password reset on ".date('l jS \of F Y h:i:s A'));
                Session::flash('reset_success','Password Reset was Successfull!!!');
                return Redirect()->route('login');
            }
        }
        
        $user = DB::table('users')->where('email',$request->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        $log = new Log();

        $log->table_name = 'users';
        $log->table_item_id = $user->id;
        $log->activity = 'update';
        $log->user_id = Auth::user()->id;
        $log->save();

        // DB::table('users')->where('email',$email)->update(['password'=>Hash::make($password)]);
        
        Session::flash('reset_success','Password Reset was Successfull!!!');
        return Redirect()->route('login');
    }

    public function destroy($id)
    {
        // $user = User::findOrFail($id);
        // $email = $user->email;
        // $user->delete();
        // Log::info("User '".$email." has been deleted on ".date('l jS \of F Y h:i:s A'));
        // return Redirect()->route('users');
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\User;
use Log;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      
      $email = Session::get('email');
      $user = User::where('email',$email)->first();
      if(sizeof($user)>0){
        return $next($request);
      }
      Log::info($email." login attempt failed on ".date('l jS \of F Y h:i:s A'));
      return redirect()->route('login');
        // if(!Session::has('email')){
        //     return redirect()->route('login');
        // }
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;


class Language
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

        $langs = ['dr','pa','en'];
        $lang = $request->segment(1);
		
        if(!in_array($lang, $langs)){
            $lang = $request->session()->get('locale');
        }
        
        $request->session()->put('locale', $lang);
        App::setLocale($lang);

        return $next($request);
    }
}

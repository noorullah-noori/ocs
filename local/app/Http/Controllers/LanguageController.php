<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App;
use Lang; 


class LanguageController extends Controller
{
    //change language with Ajax 
   public function changeLanguage(Request $request)
   {
     if($request->ajax())
     {
        $request->session()->put('locale', $request->locale);
        App::setLocale($request->locale);
	  }

   } 
}

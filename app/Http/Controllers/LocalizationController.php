<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    

    public function set_locale($lang)
    {

    	App::setLocale($lang);
    	Session::put('lang',$lang);
        // dd($lang);
    	return redirect()->back();
    }
    // {
    //     if (array_key_exists($lang, Config::get('languages'))) {
    //         Session::put('applocale', $lang);
    //     }
    //     return Redirect::back();
    // }
}

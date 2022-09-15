<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebControlller extends Controller
{
    //
    public function show(){
        if(!session()->get('is_login')){
            return view('users.login');
        }
        return view('users.index');
    }
}

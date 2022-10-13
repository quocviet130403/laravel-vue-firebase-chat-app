<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;

function user(){
    return User::find(session()->get('is_login'));
}
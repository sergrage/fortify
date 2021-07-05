<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthCheckController extends Controller
{
    public function authCheck() {
        dd(Auth::check());
    }


    public function test()
    {
    	return view('test');
    }
}

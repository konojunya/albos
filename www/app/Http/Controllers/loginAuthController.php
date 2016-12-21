<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class loginAuthController extends Controller
{
    public function login(Request $request)
    {	
		// $user_id = Request::input('user_id');
		$user_id = $request->input('user_id');
		// $password = Request::input('password');
		return view("welcome",array('user_id' => $user_id));
    }
}

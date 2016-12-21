<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class loginAuthController extends Controller
{
    public function login(Request $request)
    {	
		$user_id = $request->input('user_id');
		return view("welcome",array('user_id' => $user_id));
    }
}

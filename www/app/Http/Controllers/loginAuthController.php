<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class loginAuthController extends Controller
{
    public function login(Request $request)
    {	
    	$database_user_id = 'kinoko';  //DBから取得
    	$database_password = 'kinoko'; //DBから取得
		$user_id = $request->input('user_id');
		$password = $request->input('password');

		if ($database_user_id != $user_id) {
			return view("mypage",array('result' => 'login error'));
		}
		if ($database_password != $password) {
			return view("mypage",array('result' => 'login error'));
		}
		return view("mypage",array('result' => 'login success'));
		
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\test_user;
use App\Http\Requests;

class loginAuthController extends Controller
{
    public function login(Request $request)
    {
    	//入力情報の取得
		$user_id = $request->input('user_id');
		$password = $request->input('password');

		//データベースからユーザー情報の取得
		$database_user_id = test_user::where('user_id', $user_id)->value('user_id');
    	$database_password = test_user::where('user_id', $user_id)->value('password');

		if ($database_user_id != $user_id) {
			return view("mypage",array('result' => 'login error'));
		}
		if ($database_password != $password) {
			return view("mypage",array('result' => 'login error'));
		}
		return view("mypage",array('result' => 'login success'));
    }
}

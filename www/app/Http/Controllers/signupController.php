<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\test_user;
use App\Http\Requests;

class signupController extends Controller
{
	// public function insert(Request $request)
	public function insert()
	{
		// $user_id            = $request->'user_id';
		// $user_name          = $request->'user_name';
		// $password           = $request->'password';
		// $credit_card_number = $request->'credit_card_number';
		// $mail_address       = $request->'mail_address';

		$user_id            = 'zzz';
		$user_name          = 'hogeko';
		$password           = 'hoge';
		$credit_card_number = '5602220555843841';
		$mail_address       = 'hoge@hoge.hoge';

		test_user::insert([
		    ['user_id' => $user_id, 'user_name' => $user_name, 'password' => $password, 'credit_card_number' => $credit_card_number, 'mail_address' => $mail_address]
		]);

		return 'insert success';

		// return view('signup')->with([
		// 	'user_id'            => $user_id,
		// 	'user_name'          => $user_name,
		// 	'password'           => $password,
		// 	'credit_card_number' => $credit_card_number,
		// 	'mail_address'       => $mail_address
	 //    ]);
	}
}

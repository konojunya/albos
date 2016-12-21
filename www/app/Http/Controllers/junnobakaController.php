<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Http\Requests;

class junnobakaController extends Controller
{
    public function index()
    {
    	$user_id = DB::select('select user_id from test_user where user_id = ?', ["aboyd27"]);
		// $user_id = DB::select('select user_id from test_user where user_id = "aboyd27"');
		// $users = DB::table('user')->get();
		// $users = DB::table('test_user')->select('user_id')->get();

        // return view('mypage', ['user_id' => $user_id]);

		// return view("mypage",array('user_id' => $user_id));
    }
}
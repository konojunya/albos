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
		return view("welcome",array('user_id' => $user_id));
    }
}
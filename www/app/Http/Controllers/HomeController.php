<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function apiIndex(Request $request)
    {
        $user_id            = $request->user()->user_id;
        $user_name          = $request->user()->user_name;
        $credit_card_number = $request->user()->credit_card_number;
        $email              = $request->user()->email;

        $user_json[] = array(
            'user_id'            => $user_id,
            'user_name'          => $user_name,
            'credit_card_number' => $credit_card_number,
            'email'              => $email
        );

        return array(
            "user" => $user_json
        );
    }

    public function apiEdit(Request $request)
    {
        //マイページ編集処理
    }

    public function apiHistory()
    {
        //購入履歴
    }
}

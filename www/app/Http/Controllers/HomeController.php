<?php

namespace App\Http\Controllers;

use App\User;
use App\album;
use App\band;
use App\music;
use App\sales_description;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $history_json = [];
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
     * Show the user mypage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.mypage');
    }

    public function edit()
    {
        return view('user.edit');
    }

    public function apiIndex(Request $request)
    {
        $user_id            = $request->user()->user_id;
        $user_name          = $request->user()->user_name;
        $credit_card_number = $request->user()->credit_card_number;
        $email              = $request->user()->email;

        $history = $this->apiHistory($request);

        $user_json = array(
            'user_id'            => $user_id,
            'user_name'          => $user_name,
            'email'              => $email,
            'history'            => $history
        );

        return $user_json;
    }

    public function apiEdit(Request $request)
    {
        //登録情報を更新するユーザーの特定
        $id = $request->user()->id;
        
        //更新情報の受け取り
        $user_id = $request->input('user_id');
        $user_name = $request->input('user_name');
        $credit_card_number = $request->input('credit_card_number');
        $email = $request->input('email');
        $password = $request->input('password');

        if ($user_id == null) {
            return;
        }
        if ($user_name == null) {
            return;
        }
        if ($credit_card_number == null) {
            return;
        }
        if ($email == null) {
            return;
        }
        if ($password == null) {
            return;
        }

        // パスワードの暗号化
        $password = bcrypt($password);

        // 登録情報の更新
        User::where('id', $id)
            ->update([
                'user_id' => $user_id,
                'user_name' => $user_name,
                'credit_card_number' => $credit_card_number,
                'email' => $email,
                'password' => $password
                ]);

        $user_json[] = array(
            'user_id'            => $user_id,
            'user_name'          => $user_name,
            'credit_card_number' => $credit_card_number,
            'email'              => $email,
            'password' => $password
        );

        return array(
            "user" => $user_json
        );
    }

    public function apiHistory($request)
    {
        //履歴を表示するユーザーを特定
        $id = $request->user()->id;

        //購入履歴
        $purchase_details = sales_description::where('user_id', $id)->get();

        $music_ids = array();
        $purchase_dates = array();
        foreach ($purchase_details as $purchase_detail) {
            $music_ids[] = $purchase_detail->music_id;
            $purchase_dates[] = $purchase_detail->purchase_date;
        }

        $musics = array();
        $music_titles = array();
        $album_ids = array();
        $prices = array();
        foreach ($music_ids as $music_id) {
            $musics = music::where('music_id', $music_id)->get();

            foreach ($musics as $music) {
                $music_titles[] = $music->music_title;
                $album_ids[] = $music->album_id;
                $prices[] = $music->price;
            }
            
        }

        $album_titles = array();
        $band_names = array();
        foreach ($album_ids as $album_id) {
            $album = album::where('album_id', $album_id)->first();
            $album_titles[] = $album->album_title;
            $band_id = $album->band_id;
            
            $band_names[] = band::where('band_id', $band_id)->value('band_name');
        }

        foreach ($music_ids as $key => $music_id) {
            $history = array(
                'music_id'      => $music_id,
                'music_title'   => $music_titles[$key],
                'album_title'   => $album_titles[$key],
                'band_name'     => $band_names[$key],
                'price'         => $prices[$key],
                'purchase_date' => $purchase_dates[$key]
            );
            $this->history_json[] = $history;
        }

        return $this->history_json;
    }
}

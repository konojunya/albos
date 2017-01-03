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
        //更新情報の受け取り
        $user_id            = $request->user()->user_id;
        $user_name          = $request->user()->user_name;
        $credit_card_number = $request->user()->credit_card_number;
        $email              = $request->user()->email;

        //データベースへ格納
        User::insert([
            'user_id'            => $user_id,
            'user_name'          => $user_name,
            'credit_card_number' => $credit_card_number,
            'email'              => $email  
        ]);

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

    public function apiHistory(Request $request)
    {
        //履歴を表示するユーザーを特定
        $id = $request->user()->id;

        //購入履歴
        $purchase_details = sales_description::where('user_id', $id)->get();
        foreach ($purchase_details as $purchase_detail) {
            $music_ids[] = $purchase_detail->music_id;
            $purchase_dates[] = $purchase_detail->purchase_date;
        }

        foreach ($music_ids as $music_id) {
            $musics = music::where('music_id', $music_id)->get();

            foreach ($musics as $music) {
                $music_titles[] = $music->music_title;
                $album_ids[] = $music->album_id;
                $prices[] = $music->price;
            }
            
        }


        foreach ($album_ids as $album_id) {
            $albums = album::where('album_id', $album_id)->get();

            foreach ($albums as $album) {
                $album_titles[] = $album->album_title;
                $band_id = $album->band_id;
            }
            
            $band_names[] = band::where('band_id', $band_id)->value('band_name');
        }

        foreach ($music_titles as $key => $music_title) {
            $history = array(
                'music_title'   => $music_title,
                'album_title'   => $album_titles[$key],
                'band_name'     => $band_names[$key],
                'price'         => $prices[$key],
                'purchase_date' => $purchase_dates[$key]
            );
            $history_json[] = $history;
        }

        return array(
            'history' => $history_json
        );
    }
}

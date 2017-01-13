<?php

namespace App\Http\Controllers;

use App\sales_description;
use App\album;
use App\band;
use App\music;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class BuyController extends Controller
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

    public function buy(Request $request, $music_id)
    {
        //存在する曲IDかチェック
        if (!$this->exsistMusic($music_id)) {
            return view('errors.401');
        }

        //購入処理を行うユーザーのユーザーIDを取得
        $id = $request->user()->id;

        //曲情報の取得
        $music_data = music::where('music_id', $music_id);

        //アルバムIDを取得
        $album_id  = $music_data->value('album_id');

        //すでに購入済みか確認
        if(sales_description::where([
                    ['user_id', $id],
                    ['music_id', $music_id]
                ])->count()){
            return redirect('/music/'.$album_id);
        }

        //売り上げ明細にインサート
        $this->sales_insert($id ,$music_id);

        //曲名の取得
        $music_title = $music_data->value('music_title');
        //曲データ保存場所のパスを取得
        $music_data_path = $music_data->value('music_data_path');

        //アルバムIDからバンドIDを取得
        $band_id = album::where('album_id', $album_id)->value('band_id');

        //バンドIDからバンド名を取得
        $band_name = band::where('band_id', $band_id)->value('band_name');

        //パスを完全なものにする
        $pathToFile = storage_path($music_data_path);

        //ダウンロード時のファイル名を作成
        $file_name = $music_title.' - '.$band_name.'.mp3';

        return response()->download($pathToFile, $file_name);
    }

    private function sales_insert($id, $music_id)
    {
        sales_description::insert(
            [
                'user_id' => $id,
                'music_id' => $music_id,
                'purchase_date' => Carbon::now()
            ]
        );
    }

    private function payment()
    {
        //カード決済
    }

    private function creditCheck()
    {
        //まさる堂のクレジットカードチェッカーにカード番号を送る
    }

    public function reDownload(Request $request, $music_id)
    {
        //存在する曲IDかチェック
        if (!$this->exsistMusic($music_id)) {
            return view('errors.401');
        }

        //購入処理を行うユーザーのユーザーIDを取得
        $id = $request->user()->id;

        //曲情報の取得
        $music_data = music::where('music_id', $music_id);

        //アルバムIDを取得
        $album_id  = $music_data->value('album_id');

        //購入したことがあるか確認
        if(!sales_description::where([
                    ['user_id', $id],
                    ['music_id', $music_id]
                ])->count()){

            //購入していないためリダイレクト
            return redirect('/music/'.$album_id);
        }

        
        //曲名の取得
        $music_title = $music_data->value('music_title');
        //曲データ保存場所のパスを取得
        $music_data_path = $music_data->value('music_data_path');

        //アルバムIDからバンドIDを取得
        $band_id = album::where('album_id', $album_id)->value('band_id');

        //バンドIDからバンド名を取得
        $band_name = band::where('band_id', $band_id)->value('band_name');

        //パスを完全なものにする
        $pathToFile = storage_path($music_data_path);

        //ダウンロード時のファイル名を作成
        $file_name = $music_title.' - '.$band_name.'.mp3';

        return response()->download($pathToFile, $file_name);
        // echo response()->download($pathToFile, $file_name);
    }

    /**
     * Check if the music exists.
     *
     * @return bool
     */
    public function exsistMusic($music_id)
    {
        $exist_flg = false;
        //曲テーブルから曲情報取得
        $music = music::where('music_id', $music_id);

        //正しい曲IDかチェック
        if (!$music->value('music_title') == NULL) {
            $exist_flg = true;
        }

        return $exist_flg;
    }
}

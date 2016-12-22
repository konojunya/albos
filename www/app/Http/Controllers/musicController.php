<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class musicController extends Controller
{
	public function select(Request $request, $music_id)
	{
		//データベースから曲情報の取得
		// $music = music::where('music_id', $music_id);
		return view('music.music_detail', array('music_id' => $music_id));
	}
}

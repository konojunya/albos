<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\music;
use App\Http\Requests;

class musicController extends Controller
{
	public function select($music_id)
	{
		//データベースから曲情報の取得
		$musics = music::where('music_id', $music_id);

		return view('music.music_detail', array('musics' => $musics));
	}
}

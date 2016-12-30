<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\album;
use App\band;
use App\music;
use App\Http\Requests;

class musicController extends Controller
{
	public function all()
	{
		//アルバムテーブルからアルバムタイトル取得
		$album_ids    = album::pluck('album_id');
		$album_titles = album::pluck('album_title');
		$band_ids     = album::pluck('band_id');

		//バンドテーブルからバンド名取得
		for ($i=0; $i < count($band_ids); $i++) { 
			$band_names[$i] = band::where('band_id', $band_ids[$i])->value('band_name');
		}
		

		return view('music.music_list')->with([
	       	'album_ids'    => $album_ids,
	       	'album_titles' => $album_titles,
			'band_names'   => $band_names
	    ]);
	}

	public function select($album_id)
	{
		//アルバムテーブルからアルバム情報取得
		$albums = album::where('album_id', $album_id);

		//albumsの情報を変数に格納
		$album_title  = $albums->value('album_title');
		$artwork_path = $albums->value('artwork_path');
		$property     = $albums->value('property');
		//日付けを◯年◯月◯日にする
		$release      = date('Y年n月j日', strtotime($albums->value('release')));
		$band_id      = $albums->value('band_id');

		//バンドテーブルからバンド名取得
		$band_name = band::where('band_id', $band_id)->value('band_name');

		//曲テーブルから曲情報取得
		$music_ids        = music::where('album_id', $album_id)->pluck('music_id');
		$music_titles     = music::where('album_id', $album_id)->pluck('music_title');
		$prices           = music::where('album_id', $album_id)->pluck('price');
		$music_data_paths = music::where('album_id', $album_id)->pluck('music_data_path');
		$music_times      = music::where('album_id', $album_id)->pluck('music_time');
		//↑SELECT文を4回投げてるなら重いから変えたほうが良い

		return view('music.music_detail')->with([
	       	'album_title'      => $album_title,
			'artwork_path'     => $artwork_path,
			'property'         => $property,
			'release'          => $release,
			'band_name'        => $band_name,
			'music_ids'        => $music_ids,
			'music_titles'     => $music_titles,
			'prices'           => $prices,
			'music_data_paths' => $music_data_paths,
			'music_times'      => $music_times
	    ]);
	}
}

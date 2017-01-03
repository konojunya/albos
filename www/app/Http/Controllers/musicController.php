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
		//アルバムテーブルからアルバム情報取得
		$albums = album::get();
		$album_ids     = array();
		$album_titles  = array();
		$band_ids      = array();
		$artwork_paths = array();

		$i = 0;
		foreach ($albums as $album) {
			$album_ids[$i]     = $album->album_id;
			$album_titles[$i]  = $album->album_title;
			$artwork_paths[$i] = $album->artwork_path;
			$band_ids[$i]      = $album->band_id;
			$i++;
		}

		//アルバムテーブルからアルバムタイトル取得
		// $album_ids    = album::pluck('album_id');
		// $album_titles = album::pluck('album_title');
		// $band_ids     = album::pluck('band_id');

		$band_names   = array();
		// バンドテーブルからバンド名取得
		for ($i=0; $i < count($band_ids); $i++) { 
			$band_names[$i] = band::where('band_id', $band_ids[$i])->value('band_name');
		}
		

		return view('music.music_list')->with([
	       	'album_ids'     => $album_ids,
	       	'artwork_paths' => $artwork_paths,
	       	'album_titles'  => $album_titles,
	       	'band_names'    => $band_names
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
		$musics = music::where('album_id', $album_id)->get();
		$music_ids        = array();
		$music_titles     = array();
		$prices           = array();
		$music_data_paths = array();
		$music_times      = array();
		$i = 0;
		foreach ($musics as $music) {
			$music_ids[$i]        = $music->music_id;
			$music_titles[$i]     = $music->music_title;
			$prices[$i]           = $music->price;
			$music_data_paths[$i] = $music->music_data_path;
			$music_times[$i]      = $music->music_time;
			$i++;
		}

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

	public function hoge(){
		return array(
				"path" => storage_path()."/music_data/0000000001.mp3",
        "name" => "konojunya",
        "age" => 19
    );
	}
}

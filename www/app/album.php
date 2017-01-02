<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    protected $table = 'album';

    protected $fillable = ['album_id', 'album_title', 'artwork_path', 'property', 'release', 'band_id', 'genre_id'];
}

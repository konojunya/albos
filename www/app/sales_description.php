<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales_description extends Model
{
    protected $table = 'sales_description';

	protected $fillable = ['user_id', 'music_id', 'purchase_date'];
}

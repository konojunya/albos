<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class test_user extends Model
{
	protected $table = 'test_user';

	protected $fillable = ['user_id', 'user_name', 'password', 'credit_card_number', 'mail_address'];
}

<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Message extends Eloquent
{
	protected $fillable = [
		'name',
		'email',
		'phone',
		'subject',
		'message',
		'ip'
	];
}

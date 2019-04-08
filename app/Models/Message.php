<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Reliese\Database\Eloquent\Model as Eloquent;

class Message extends Eloquent
{
	protected $casts = [
		'unread' => 'bool'
	];

	protected $fillable = [
		'name',
		'email',
		'phone',
		'subject',
		'message',
		'ip',
		'unread'
	];
}

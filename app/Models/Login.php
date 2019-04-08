<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Login extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'mobile' => 'bool',
		'tablet' => 'bool',
		'desktop' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'ip',
		'browser',
		'system',
		'device',
		'mobile',
		'tablet',
		'desktop'
	];

	public function user()
	{
		return $this->belongsTo(\App\User::class);
	}
}

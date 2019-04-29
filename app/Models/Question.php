<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Question extends Eloquent
{
    protected $table = 'questions';

	protected $casts = [
		'property_id' => 'int',
		'unread' => 'bool'
	];

	protected $fillable = [
		'property_id',
		'ip',
		'name',
		'email',
		'message',
		'unread'
	];

	public function property()
	{
		return $this->belongsTo(\App\Models\Property::class);
	}
}

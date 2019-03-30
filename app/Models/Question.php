<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Question extends Eloquent
{
	protected $casts = [
		'property_id' => 'int',
		'readed' => 'bool'
	];

	protected $fillable = [
		'property_id',
		'ip',
		'name',
		'email',
		'message',
		'readed'
	];

	public function property()
	{
		return $this->belongsTo(\App\Models\Property::class);
	}
}

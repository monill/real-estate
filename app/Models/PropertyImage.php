<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class PropertyImage extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'property_id' => 'int',
        'feature' => 'bool'
	];

	protected $fillable = [
		'property_id',
		'image',
        'feature'
	];

	public function property()
	{
		return $this->belongsTo(\App\Models\Property::class);
	}
}

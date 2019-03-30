<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent
{
	protected $casts = [
		'views' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'views'
	];

	public function properties()
	{
		return $this->hasMany(\App\Models\Property::class);
	}
}

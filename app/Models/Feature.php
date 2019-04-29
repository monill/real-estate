<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Feature extends Eloquent
{
    protected $table = 'features';

	protected $fillable = [
		'name'
	];

	public function properties()
	{
		return $this->belongsToMany(\App\Models\Property::class, 'property_features')
					->withPivot('id');
	}
}

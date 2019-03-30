<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Property extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'category_id' => 'int',
		'purpose' => 'int',
		'type' => 'int',
		'price' => 'float',
		'bathrooms' => 'int',
		'bedrooms' => 'int',
		'garage' => 'int',
		'views' => 'int',
		'latitude' => 'float',
		'longitude' => 'float',
		'slider' => 'bool',
		'featured' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'category_id',
		'name',
		'slug',
		'purpose',
		'type',
		'price',
		'address',
		'bathrooms',
		'bedrooms',
		'garage',
		'views',
		'area',
		'description',
		'main_img',
		'latitude',
		'longitude',
		'video1',
		'video2',
		'slider',
		'featured'
	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function user()
	{
		return $this->belongsTo(\App\Models\User::class);
	}

	public function features()
	{
		return $this->belongsToMany(\App\Models\Feature::class, 'property_features')
					->withPivot('id');
	}

	public function property_images()
	{
		return $this->hasMany(\App\Models\PropertyImage::class);
	}

	public function questions()
	{
		return $this->hasMany(\App\Models\Question::class);
	}
}

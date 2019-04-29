<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class PropertyImage extends Eloquent
{
	public $timestamps = false;

    protected $table = 'property_images';

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

    public function getImages()
    {
        return asset('uploads/properties/' . $this->property->id . '/' . $this->image);
	}

    public function getFeature(string $size = '')
    {
        if ($this->feature) {
            return '<i class="fa fa-star ' .$size . ' text-warning"></i>';
        } else {
            return '<i class="fa fa-star-o ' .$size . '"></i>';
        }
	}
}

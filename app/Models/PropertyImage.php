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
		'filename',
        'feature'
	];

	public function property()
	{
		return $this->belongsTo(\App\Models\Property::class);
	}

    public function getImages(int $id)
    {
        return asset('uploads/properties/' . $id . '/' . $this->filename);
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

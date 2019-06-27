<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class PropertyFeature extends Eloquent
{
    public $timestamps = false;

    protected $table = 'property_features';

    protected $casts = [
        'property_id' => 'int',
        'feature_id' => 'int'
    ];

    protected $fillable = [
        'property_id',
        'feature_id'
    ];

    public function feature()
    {
        return $this->belongsTo(\App\Models\Feature::class);
    }

    public function property()
    {
        return $this->belongsTo(\App\Models\Property::class);
    }
}

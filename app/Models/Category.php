<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Reliese\Database\Eloquent\Model as Eloquent;

class Category extends Eloquent
{
    use Sluggable;

    protected $table = 'categories';

    protected $casts = [
        'views' => 'int'
    ];

    protected $fillable = [
        'name',
        'slug',
        'views'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function properties()
    {
        return $this->hasMany(\App\Models\Property::class);
    }
}

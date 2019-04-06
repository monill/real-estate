<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Reliese\Database\Eloquent\Model as Eloquent;

class Tag extends Eloquent
{
    use Sluggable;

	protected $casts = [
		'views' => 'int'
	];

	protected $fillable = [
		'name',
		'slug',
		'views'
	];

	public function blogs()
	{
		return $this->belongsToMany(\App\Models\Blog::class, 'blog_tags')
					->withPivot('id');
	}

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}

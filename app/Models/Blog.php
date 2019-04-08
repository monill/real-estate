<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Reliese\Database\Eloquent\Model as Eloquent;

class Blog extends Eloquent
{
    use Sluggable;

	protected $casts = [
		'user_id' => 'int',
		'views' => 'int'
	];

	protected $fillable = [
		'user_id',
		'name',
		'slug',
		'image',
		'content',
		'meta_title',
		'meta_keywords',
		'meta_description',
		'views'
	];

	public function user()
	{
		return $this->belongsTo(\App\User::class);
	}

	public function tags()
	{
		return $this->belongsToMany(\App\Models\Tag::class, 'blog_tags')
					->withPivot('id');
	}

	public function comments()
	{
		return $this->hasMany(\App\Models\Comment::class);
	}

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

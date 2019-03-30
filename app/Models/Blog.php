<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Blog extends Eloquent
{
	protected $casts = [
		'user_id' => 'int',
		'views' => 'int'
	];

	protected $fillable = [
		'user_id',
		'title',
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
		return $this->belongsTo(\App\Models\User::class);
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
}

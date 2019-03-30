<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class BlogTag extends Eloquent
{
	public $timestamps = false;

	protected $casts = [
		'blog_id' => 'int',
		'tag_id' => 'int'
	];

	protected $fillable = [
		'blog_id',
		'tag_id'
	];

	public function blog()
	{
		return $this->belongsTo(\App\Models\Blog::class);
	}

	public function tag()
	{
		return $this->belongsTo(\App\Models\Tag::class);
	}
}

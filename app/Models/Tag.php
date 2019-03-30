<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Tag extends Eloquent
{
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
}

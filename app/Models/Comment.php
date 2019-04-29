<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Comment extends Eloquent
{
    protected $table = 'comments';

	protected $casts = [
		'blog_id' => 'int',
		'allowed' => 'bool'
	];

	protected $fillable = [
		'blog_id',
		'ip',
		'name',
		'email',
		'message',
		'allowed'
	];

	public function blog()
	{
		return $this->belongsTo(\App\Models\Blog::class);
	}
}

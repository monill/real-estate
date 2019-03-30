<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
	protected $hidden = [
		'password',
		'remember_token'
	];

    protected $casts = [
        'admin' => 'bool'
    ];

	protected $fillable = [
		'name',
		'email',
		'password',
		'avatar',
		'job',
		'about',
        'admin',
		'remember_token'
	];

	public function blogs()
	{
		return $this->hasMany(\App\Models\Blog::class);
	}

	public function properties()
	{
		return $this->hasMany(\App\Models\Property::class);
	}
}

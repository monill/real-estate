<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'job',
        'about',
        'remember_token'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function blogs()
    {
        return $this->hasMany(\App\Models\Blog::class);
    }

    public function logins()
    {
        return $this->hasMany(\App\Models\Login::class);
    }

    public function logs()
    {
        return $this->hasMany(\App\Models\Log::class);
    }

    public function properties()
    {
        return $this->hasMany(\App\Models\Property::class);
    }
}

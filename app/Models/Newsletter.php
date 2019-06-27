<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Newsletter extends Eloquent
{
    protected $table = 'newsletters';

    protected $casts = [
        'accept' => 'bool'
    ];

    protected $fillable = [
        'name',
        'email',
        'accept'
    ];
}

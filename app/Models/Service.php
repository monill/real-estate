<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Service extends Eloquent
{
    protected $table = 'services';

    protected $fillable = [
        'title',
        'content'
    ];
}

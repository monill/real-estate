<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Visitor extends Eloquent
{
    protected $table = 'visitors';

    protected $casts = [
        'mobile' => 'bool',
        'phone' => 'bool',
        'tablet' => 'bool',
        'desktop' => 'bool',
        'bot' => 'bool',
        'numaccess' => 'int'
    ];

    protected $fillable = [
        'ip',
        'country',
        'city',
        'estate',
        'browser',
        'system',
        'device',
        'mobile',
        'phone',
        'tablet',
        'desktop',
        'bot',
        'referrer',
        'loadtime',
        'numaccess'
    ];
}

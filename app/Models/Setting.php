<?php

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

class Setting extends Eloquent
{
    protected $table = 'settings';

    protected $fillable = [
        'site_title',
        'meta_keywords',
        'meta_description',
        'analytics',
        'about',
        'address',
        'email',
        'phone1',
        'phone2',
        'facebook',
        'twitter',
        'googleplus',
        'linkedin',
        'link',
        'terms',
        'privacy'
    ];
}

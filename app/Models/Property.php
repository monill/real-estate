<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Reliese\Database\Eloquent\Model as Eloquent;

class Property extends Eloquent
{
    use Sluggable;

    protected $casts = [
        'user_id' => 'int',
        'category_id' => 'int',
        'purpose' => 'int',
        'type' => 'int',
        'price' => 'float',
        'bathrooms' => 'int',
        'bedrooms' => 'int',
        'garage' => 'int',
        'views' => 'int',
        'latitude' => 'float',
        'longitude' => 'float',
        'slider' => 'bool',
        'featured' => 'bool',
        'avaliable' => 'bool'
    ];

    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'slug',
        'purpose',
        'type',
        'price',
        'address',
        'bathrooms',
        'bedrooms',
        'garage',
        'views',
        'area',
        'description',
        'latitude',
        'longitude',
        'video1',
        'video2',
        'slider',
        'featured',
        'avaliable'
    ];

    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    public function features()
    {
        return $this->belongsToMany(\App\Models\Feature::class, 'property_features')
            ->withPivot('id');
    }

    public function property_images()
    {
        return $this->hasMany(\App\Models\PropertyImage::class);
    }

    public function questions()
    {
        return $this->hasMany(\App\Models\Question::class);
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function videoOne()
    {
        if ($this->video1 != null) {
            $url = $this->video1;

            if ($this->checkUrl($url)) {
                $fetch = explode("v=", $url);
                $videoId = $fetch[1];

                return $this->videoImage($videoId);
            }
        }
    }

    public function videoTwo()
    {
        if ($this->video2 != null) {
            $url = $this->video2;

            if ($this->checkUrl($url)) {
                $fetch = explode("v=", $url);
                $videoId = $fetch[1];

                return $this->videoImage($videoId);
            }
        }
    }

    protected function checkUrl($url)
    {
        // Remove all illegal characters from a url
        $url = filter_var($url, FILTER_SANITIZE_URL);

        // Validate URI
        // And check only for http/https schemes.
        if (filter_var($url, FILTER_VALIDATE_URL) === false || !in_array(strtolower(parse_url($url, PHP_URL_SCHEME)), ['http', 'https'], true)) {
            return false;
        }

        // Check that URL exists
        $file_headers = @get_headers($url);
        return !$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found' ? false : true;
    }

    protected function videoImage($videoId)
    {
        if ($this->checkUrl('https://i.ytimg.com/vi/' . $videoId . '/maxresdefault.jpg')) {
            return 'https://i.ytimg.com/vi/' . $videoId . '/maxresdefault.jpg';
        } elseif ($this->checkUrl('https://img.youtube.com/vi/' . $videoId . '/maxresdefault.jpg"')) {
            return 'https://img.youtube.com/vi/' . $videoId . '/maxresdefault.jpg"';
        } else {
            return asset('site/assets/images/no-image-found.png');
        }
    }
}

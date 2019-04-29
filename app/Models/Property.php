<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Reliese\Database\Eloquent\Model as Eloquent;

class Property extends Eloquent
{
    use Sluggable;

    protected $table = 'properties';

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
                return $url;
            }
        }
    }

    public function videoTwo()
    {
        if ($this->video2 != null) {
            $url = $this->video2;

            if ($this->checkUrl($url)) {
                return $url;
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

    public function getPurpose()
    {
        $purpose = $this->purpose;
        if ($purpose == 1) {
            return 'Locação';
        } else {
            return 'Venda';
        }
    }

    public function getType()
    {
        $type = $this->type;
        if ($type == 1) {
            return 'Casa';
        } elseif ($type == 2) {
            return 'Apartamento';
        } elseif ($type == 3) {
            return 'Terreno';
        } else {
            return 'Flat';
        }
    }

    public function getMainImage()
    {
        $image = PropertyImage::where('property_id', '=', $this->id)->where('feature', '=', true)->first();
        return asset('uploads/properties/' . $this->id . '/' . $image->image);
    }

    public function getValue()
    {
        $price = (float)$this->price;
        return $price;
            //number_format($price, '.', ',');
    }
}

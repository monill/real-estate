<?php

namespace App\Models;

use Jenssegers\Agent\Agent;
use Reliese\Database\Eloquent\Model as Eloquent;

class Log extends Eloquent
{
    protected $table = 'logs';

	protected $casts = [
		'user_id' => 'int',
		'mobile' => 'bool',
		'tablet' => 'bool',
		'desktop' => 'bool'
	];

	protected $fillable = [
		'user_id',
		'content',
		'ip',
		'browser',
		'system',
		'device',
		'mobile',
		'tablet',
		'desktop'
	];

	public function user()
	{
		return $this->belongsTo(\App\User::class);
	}

    public function log(string $content)
    {
        $agent = new Agent();

        return self::create([
            'user_id' => auth()->user()->id,
            'content' => $content,
            'ip' => request()->ip(),
            'browser' => $agent->browser() ? $agent->browser() : NULL,
            'system' => $agent->platform() ? $agent->platform() : NULL,
            'device' => $agent->device() ? $agent->device() : NULL,
            'mobile' => $agent->isMobile(),
            'tablet' => $agent->isTablet(),
            'desktop' => $agent->isDesktop()
        ]);
	}
}

<?php

namespace App\Models;

use Jenssegers\Agent\Agent;
use Reliese\Database\Eloquent\Model as Eloquent;

class Login extends Eloquent
{
    protected $table = 'logins';

	protected $casts = [
		'user_id' => 'int',
		'mobile' => 'bool',
		'tablet' => 'bool',
		'desktop' => 'bool'
	];

	protected $fillable = [
		'user_id',
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

    public static function novo($user_id, $ip)
    {
        $agent = new Agent();

        return Login::create([
            'user_id' => $user_id,
            'ip' => $ip,
            'browser' => $agent->browser(),
            'system' => $agent->platform(),
            'device' => $agent->device(),
            'mobile' => $agent->isMobile(),
            'tablet' => $agent->isTablet(),
            'desktop' => $agent->isDesktop()
        ]);
    }
}

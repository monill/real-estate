<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SettingsRequest;
use App\Models\Log;
use App\Models\Setting;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    protected $log;

    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    public function index()
    {
        $setting = Setting::findOrFail(1);
        return view('admin.settings.index', compact('setting'));
    }

    public function update(SettingsRequest $request, $id)
    {
        $setting = Setting::findOrFail($id);
        $setting->update($request->except('_token'));

        $this->log->log('Usuario(a) atualizou as configuracoes do site');
        return redirect()->to('settings');
    }
}

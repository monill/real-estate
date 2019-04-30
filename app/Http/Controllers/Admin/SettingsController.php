<?php

namespace App\Http\Controllers\Admin;

use App\Models\Log;
use App\Models\Setting;
use Illuminate\Http\Request;
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

    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        $setting->update($request->except('_token'));

        $this->log->log('Usuario(a) atualizou as configuracoes do site');
        return redirect()->to('settings');
    }
}

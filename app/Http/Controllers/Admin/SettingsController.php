<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SettingsRequest;
use App\Models\Log;
use App\Models\Setting;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    protected $log;

    /**
     * SettingsController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     * Class LOG, salva em banco o que foi pelos corretores/admins
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    /**
     * Página inicial Configurações
     */
    public function index()
    {
        $setting = Setting::findOrFail(1);
        return view('admin.settings.index', compact('setting'));
    }

    /**
     * Atualiza configurações no banco
     */
    public function update(SettingsRequest $request, $setting_id)
    {
        $setting = Setting::findOrFail($setting_id);
        $setting->site_title = $request->input('site_title');
        $setting->meta_keywords = $request->input('meta_keywords');
        $setting->meta_description = $request->input('meta_description');
        $setting->facebook = $request->input('facebook');
        $setting->twitter = $request->input('twitter');
        $setting->googleplus = $request->input('googleplus');
        $setting->linkedin = $request->input('linkedin');
        $setting->link = $request->input('link');
        $setting->analytics = $request->input('analytics');
        $setting->about = $request->input('about');
        $setting->address = $request->input('address');
        $setting->email = $request->input('email');
        $setting->phone1 = $request->input('phone1');
        $setting->phone2 = $request->input('phone2');
        $setting->latitude = $request->input('latitude');
        $setting->longitude = $request->input('longitude');
        $setting->terms = $request->input('terms');
        $setting->privacy = $request->input('privacy');
        $setting->update();

        $this->log->log('Usuario(a) atualizou as configuracoes do site');
        return redirect()->to('settings');
    }
}

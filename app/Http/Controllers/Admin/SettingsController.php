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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        $setting->site_title = $request->input('site_title');
        $setting->meta_title = $request->input('site_title');
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

    public function destroy($id)
    {
        //
    }
}

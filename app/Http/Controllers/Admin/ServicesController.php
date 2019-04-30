<?php

namespace App\Http\Controllers\Admin;

use App\Models\Log;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    protected $log;

    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.add');
    }

    public function store(Request $request)
    {
        $service = new Service($request->except('_token'));
        $service->save();

        $this->log->log('Usuario(a) adicinou novo serviço');
        return redirect()->to('services');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->update($request->except('_token'));
        $this->log->log('Usuario(a) atualizou serviço');
        return redirect()->to('services');
    }

    public function destroy($id)
    {
        Service::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou serviço');
        return redirect()->to('services');
    }
}

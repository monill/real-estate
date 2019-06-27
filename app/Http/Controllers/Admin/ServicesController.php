<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ServicesRequest;
use App\Models\Log;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    protected $log;

    /**
     * ServicesController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     * Class LOG, salva em banco o que foi pelos corretores/admins
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    /**
     * Página inicial Serviço
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Adiciona serviço
     */
    public function create()
    {
        return view('admin.services.add');
    }

    /**
     * Salva informações passada no formulário no banco
     */
    public function store(ServicesRequest $request)
    {
        $service = new Service($request->except('_token'));
        $service->save();

        $this->log->log('Usuario(a) adicinou novo serviço');
        return redirect()->to('services');
    }

    /**
     * Edita serviço
     */
    public function edit($service_id)
    {
        $service = Service::findOrFail($service_id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Atualiza serviço no banco
     */
    public function update(ServicesRequest $request, $service_id)
    {
        $service = Service::findOrFail($service_id);
        $service->update($request->except('_token'));
        $this->log->log('Usuario(a) atualizou serviço');
        return redirect()->to('services');
    }

    /**
     * Deleta serviço do banco
     */
    public function destroy($service_id)
    {
        Service::findOrFail($service_id)->delete();
        $this->log->log('Usuario(a) deletou serviço');
        return redirect()->to('services');
    }
}

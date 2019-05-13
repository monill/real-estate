<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\FeaturesRequest;
use App\Models\Feature;
use App\Models\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FeaturesController extends Controller
{
    protected $log;

    /**
     * BlogCommentsController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     * Class LOG, salva em banco o que foi pelos corretores/admins
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    /**
     * Página dos Destaques
     */
    public function index()
    {
        $features = Feature::orderBy('name', 'ASC')->get();
        return view('admin.features.index', compact('features'));
    }

    /**
     * Salva no banco
     */
    public function store(FeaturesRequest $request)
    {
        $feature = new Feature($request->except('_token'));
        $feature->save();
        $this->log->log('Usuario(a) cadastrou nova caracteristica.');
        return redirect()->to('features');
    }

    /**
     * Atualiza no banco
     */
    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            DB::table('features')
                ->where('id', $request->get('pk'))
                ->update([$request->input('name') => $request->input('value')]);

            $this->log->log('Usuario(a) atualizou caracteristica');
            return response()->json(['success' => 'Info atulizada.'], 200);
        }
        return response()->json(['error' => 400, 'message' => 'Parametros insuficientes.'], 400);
    }

    /**
     * Deleta do banco
     */
    public function destroy($id)
    {
        Feature::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou um caracteristica');
        return redirect()->to('features');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use App\Models\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FeaturesController extends Controller
{
    protected $log;

    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    public function index()
    {
        $features = Feature::orderBy('name', 'ASC')->get();
        return view('admin.features.index', compact('features'));
    }

    public function store(Request $request)
    {
        $feature = new Feature($request->except('_token'));
        $feature->save();
        $this->log->log('Usuario(a) cadastrou nova caracteristica.');
        return redirect()->to('features');
    }

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

    public function destroy($id)
    {
        Feature::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou um caracteristica');
        return redirect()->to('features');
    }
}

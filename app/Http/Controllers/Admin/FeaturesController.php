<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feature;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FeaturesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $features = Feature::orderBy('name', 'ASC')->get();
        return view('admin.features.index', compact('features'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $feature = new Feature($request->except('_token'));
        $feature->save();
        return redirect()->to('features');
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
        if ($request->ajax()) {
            DB::table('features')
                ->where('id', $request->get('pk'))
                ->update([$request->input('name') => $request->input('value')]);

            return response()->json(['success' => 'Info atulizada.'], 200);
        }
        return response()->json(['error' => 400, 'message' => 'Parametros insuficientes.'], 400);
    }

    public function destroy($id)
    {
        Feature::findOrFail($id)->delete();
        return redirect()->to('features');
    }
}

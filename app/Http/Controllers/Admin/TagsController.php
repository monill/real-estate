<?php

namespace App\Http\Controllers\Admin;

use App\Models\Log;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagsController extends Controller
{
    protected $log;

    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    public function index()
    {
        $tags = Tag::orderBy('name', 'ASC')->get();
        return view('admin.tags.index', compact('tags'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $tag = new Tag($request->except('_token'));
        $tag->save();

        $this->log->log('Usuario(a) cadastrou nova Tag');
        return redirect()->to('tags');
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
            $pk = $request->get('pk');
            $category = Tag::findOrFail($pk);
            $category->name = $request->input('value');
            $category->update();

            $this->log->log('Usuario(a) atualizou Tag');

            return response()->json(['success' => 'Tag atualizada.'], 200);
        }
        return response()->json(['error' => 400, 'message' => 'Parametros insuficientes.'], 400);
    }

    public function destroy($id)
    {
        Tag::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou Tag');
        return redirect()->to('tags');
    }
}

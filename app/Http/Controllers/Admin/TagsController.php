<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TagsRequest;
use App\Models\Log;
use App\Models\Tag;
use App\Http\Controllers\Controller;

class TagsController extends Controller
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
     *
     */
    public function index()
    {
        $tags = Tag::orderBy('name', 'ASC')->get();
        return view('admin.tags.index', compact('tags'));
    }

    /**
     *
     */
    public function store(TagsRequest $request)
    {
        $tag = new Tag($request->except('_token'));
        $tag->save();

        $this->log->log('Usuario(a) cadastrou nova Tag');
        return redirect()->to('tags');
    }

    /**
     *
     */
    public function update(TagsRequest $request, $id)
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

    /**
     *
     */
    public function destroy($id)
    {
        Tag::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou Tag');
        return redirect()->to('tags');
    }
}

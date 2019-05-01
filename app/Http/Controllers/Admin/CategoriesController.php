<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoriesRequest;
use App\Models\Category;
use App\Models\Log;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    protected $log;

    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    public function index()
    {
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('admin.categories.index', compact('categories'));
    }

    public function store(CategoriesRequest $request)
    {
        $feature = new Category($request->except('_token'));
        $feature->save();
        $this->log->log('Usuario(a) cadastrou nova categoria.');
        return redirect()->to('categories');
    }

    public function update(Request $request, $id)
    {
        if ($request->ajax()) {
            $pk = $request->get('pk');
            $category = Category::findOrFail($pk);
            $category->name = $request->input('value');
            $category->update();

            $this->log->log('Usuario(a) atualizou categoria');
            return response()->json(['success' => 'Categoria atualizada.'], 200);
        }
        return response()->json(['error' => 400, 'message' => 'Parametros insuficientes.'], 400);
    }

    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou categoria');
        return redirect()->to('categories');
    }
}

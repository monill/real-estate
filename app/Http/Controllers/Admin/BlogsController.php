<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BlogsRequest;
use App\Models\Blog;
use App\Models\Log;
use App\Models\Tag;
use App\Traits\ImageFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    protected $photosPath;
    protected $log;
    protected $imageFile;

    /**
     * BlogCommentsController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     * Class LOG, salva em banco o que foi pelos corretores/admins
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->photosPath = public_path('uploads/blogs/');
        $this->log = new Log();
        $this->imageFile = new ImageFile();
    }

    /**
     *
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(12);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     *
     */
    public function create()
    {
        if (Tag::count() <= 0) {
            return redirect()->to('tags')->withErrors(['Erro! Nenhuma tag cadastrada, cadastre ao menos uma e tente novamente.']);
        }

        $tags = Tag::all()->pluck('name', 'id');
        return view('admin.blogs.add', compact('tags'));
    }

    /**
     *
     */
    public function store(BlogsRequest $request)
    {
        if ($request->has('image') && $request->file('image')->isValid()) {
            $blog = new Blog();
            $blog->user_id = auth()->user()->id;
            $blog->title = $request->input('title');

            //Image
            $img = $request->file('image');
            $filename = md5Gen();
            //End Image

            $blog->image = $filename . '.' . $img->getClientOriginalExtension();
            $blog->content = $request->input('content');

            $blog->meta_title = $request->input('title');
            $blog->meta_keywords = $request->input('meta_keywords');
            $blog->meta_description = $request->input('meta_description');
            $blog->save();

            $blog->tags()->attach($request->input('tags'));

            $this->imageFile->uploadImage($this->photosPath, $blog->id, $filename, $img);

            $this->log->log('Usuario(a) cadastrou novo blog');
            return redirect()->to('blogs');
        } else {
            return redirect()->to('blogs')->withErrors(['Erro no arquivo de imagem, check o arquivo e tente novamente.']);
        }
    }

    /**
     *
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $tags = Tag::all()->pluck('name', 'id');
        return view('admin.blogs.edit', compact('blog', 'tags'));
    }

    /**
     *
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->user_id = auth()->user()->id;
        $blog->title = $request->input('title');

        //Image
        $img = $request->file('image');
        if ($img != null) {
            $this->imageFile->removeImage($this->photosPath, $id, $blog->image);
            $filename = md5Gen() . '.' . $img->getClientOriginalExtension();
        } else {
            $filename = $blog->image;
        }
        //End Image

        $blog->image = $filename;
        $blog->content = $request->input('content');

        $blog->meta_title = $request->input('title');
        $blog->meta_keywords = $request->input('meta_keywords');
        $blog->meta_description = $request->input('meta_description');

        $blog->tags()->sync($request->input('tags'));

        $blog->update();

        if ($img != null) {
            $this->imageFile->uploadImage($this->photosPath, $id, $filename, $img);
        }

        $this->log->log('Usuario(a) atualizou blog');
        return redirect()->to('blogs');
    }

    /**
     *
     */
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        $this->imageFile->removeDirectory($this->photosPath, $id);
        $this->log->log('Usuario(a) deletou blog');
        return redirect()->to('blogs');
    }

    /**
     *
     */
    public function publishOnOff($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->published = !$blog->published;
        $blog->update();

        $this->log->log('Usuario(a) publicou ou colocou blog em modo rascunho');
        return redirect()->to('blogs');
    }
}

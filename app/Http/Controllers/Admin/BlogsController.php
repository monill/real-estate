<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Log;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class BlogsController extends Controller
{
    private $photos_path;
    protected $log;

    public function __construct()
    {
        $this->middleware('auth');
        $this->photos_path = public_path('uploads/blogs/');
        $this->log = new Log();
    }

    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(12);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        if (Tag::count() <= 0) {
            return redirect()->to('tags')->withErrors(['Erro! Nenhuma tag cadastrada, cadastre ao menos uma e tente novamente.']);
        }

        $tags = Tag::all()->pluck('name', 'id');
        return view('admin.blogs.add', compact('tags'));
    }

    public function store(Request $request)
    {
        if ($request->has('image') && $request->file('image')->isValid())
        {
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

            $this->uploadImage($blog->id, $filename, $img);

            $this->log->log('Usuario(a) cadastrou novo blog');
            return redirect()->to('blogs');
        } else {
            return redirect()->to('blogs')->withErrors(['Erro no arquivo de imagem, check o arquivo e tente novamente.']);
        }
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $tags = Tag::all()->pluck('name', 'id');
        return view('admin.blogs.edit', compact('blog', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->user_id = auth()->user()->id;
        $blog->title = $request->input('title');

        //Image
        $img = $request->file('image');
        if ($img != null) {
            $this->removeImage($id, $blog->image);
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
            $this->uploadImage($id, $filename, $img);
        }

        $this->log->log('Usuario(a) atualizou blog');
        return redirect()->to('blogs');
    }

    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        $this->removeDirectory($id);
        $this->log->log('Usuario(a) deletou blog');
        return redirect()->to('blogs');
    }

    public function publishOnOff($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->published = !$blog->published;
        $blog->update();

        $this->log->log('Usuario(a) publicou ou colocou blog em modo rascunho');
        return redirect()->to('blogs');
    }

    private function uploadImage($id, $filename, $img)
    {
        $this->pathExist($id);

        $local = $this->photos_path . $id . '/';

        $image = Image::make($img);

        $image->save($local . $filename);
    }

    private function removeImage($id, $image)
    {
        return File::delete($this->photos_path . $id . '/' . $image);
    }

    private function removeDirectory($id)
    {
        return File::delete($this->photos_path . $id . '/' . $id);
    }

    private function pathExist($id)
    {
        $path = $this->photos_path . $id . '/';

        if (!file_exists($path) && !is_dir($path)) {
            mkdir($path, 0777, true);
        }
    }
}

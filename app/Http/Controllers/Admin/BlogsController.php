<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Image;

class BlogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(12);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        if (Tag::count() <= 0) {
            return redirect()->to('blogs')->withErrors(['Erro! Nenhuma tag cadastrada, cadastre ao menos uma e tente novamente.']);
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

            foreach ($request->input('tags') as $key => $tag) {
                BlogTag::create(['blog_id' => $blog->id, 'tag_id' => $tag]);
            }

            $this->uploadImage($blog->id, $filename, $img);

            return redirect()->to('blogs');
        } else {
            return redirect()->to('blogs')->withErrors(['Erro no arquivo de imagem, check o arquivo e tente novamente.']);
        }
    }

    public function show($id)
    {
        //
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

        $blog->update();

        if ($img != null) {
            $this->uploadImage($id, $filename, $img);
        }

        return redirect()->to('blogs');
    }

    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        $this->removeDirectory($id);
        return redirect()->to('blogs');
    }

    public function publishOnOff($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->published = !$blog->published;
        $blog->update();

        return redirect()->to('blogs');
    }

    private function uploadImage($id, $filename, $img)
    {
        $this->pathExist($id);

        $local = public_path('uploads/blogs/' . $id . '/');

        $image = Image::make($img);

        $image->save($local . $filename);
    }

    private function removeImage($id, $image)
    {
        return File::delete(public_path('uploads/blogs/' . $id . '/' . $image));
    }

    private function removeDirectory($id)
    {
        return File::delete(public_path('uploads/blogs/' . $id));
    }

    private function pathExist($id)
    {
        $path = public_path('uploads/blogs/' . $id . '/');

        if (!file_exists($path) && !is_dir($path)) {
            mkdir($path, 0777, true);
        }
    }
}

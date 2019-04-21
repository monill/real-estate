<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\BlogTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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
        if (Tag::count() <= 0 ) {
            return redirect()->to('blogs')->withErrors(['Erro! Nenhuma tag cadastrada, cadastre ao menos uma e tente novamente.']);
        } else {
            $tags = Tag::all()->pluck('name', 'id');
            return view('admin.blogs.add', compact('tags'));
        }
    }

    public function store(Request $request)
    {
        if ($request->has('image') && $request->file('image')->isValid()) {

            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $randonName = md5($image . time());

            Storage::disk('public')->put($image->getFilename().'.'.$extension,  File::get($image));

            $blog = new Blog();
            $blog->user_id = auth()->user()->id;
            $blog->title = $request->input('title');
            $blog->image = $image->getFilename().'.'.$extension;
            $blog->content = $request->input('content');

            $blog->meta_title = $request->input('title');
            $blog->meta_keywords = $request->input('meta_keywords');
            $blog->meta_description = $request->input('meta_description');
            $blog->save();

            foreach ($request->input('tags') as $key => $tag) {
                BlogTag::create(['blog_id' => $blog->id, 'tag_id' => $tag]);
            }

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
        $blog->image = $request->input('');
        $blog->content = $request->input('content');

        $blog->meta_title = $request->input('title');
        $blog->meta_keywords = $request->input('meta_keywords');
        $blog->meta_description = $request->input('meta_description');

        $blog->update();

        return redirect()->to('blogs');
    }

    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        return redirect()->to('blogs');
    }

    public function publishOnOff($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->published = !$blog->published;
        $blog->update();

        return redirect()->to('blogs');
    }
}

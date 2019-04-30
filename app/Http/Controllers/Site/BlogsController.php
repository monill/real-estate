<?php

namespace App\Http\Controllers\Site;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'DESC')->paginate(4);
        return view('site.blogs.index', compact('blogs'));
    }

    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->blog_id = $request->input('blog_id');
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->message = $request->input('message');
        $comment->ip = getIP();
        $comment->save();

        //flash('Comentario enviado com sucesso, aguarde aprovação')->success();
        return back();
    }

    public function show($id, $slug)
    {
        $blog = Blog::where('id', '=', $id)->whereSlug($slug)->firstOrFail();
        $blog->increment('views');

        $comments = Comment::where('blog_id', '=', $id)->where('allowed', '=', true)->get();

        return view('site.blogs.blog', compact('blog', 'comments'));
    }
}

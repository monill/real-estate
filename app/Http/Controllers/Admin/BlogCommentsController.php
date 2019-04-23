<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogCommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $comments = Comment::all();
        return view('admin.comments.index', compact('comments'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
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
        $comment = Comment::findOrFail($id);
        $comment->allowed = !$comment->allowed;
        $comment->update();
        return redirect()->to('comments');
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect()->to('comments');
    }

}

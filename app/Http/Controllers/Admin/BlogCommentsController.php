<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use App\Http\Controllers\Controller;

class BlogCommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comments.index', compact('comments'));
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect()->to('comments');
    }

    public function approveDisapprove($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->allowed = !$comment->allowed;
        $comment->update();
        return redirect()->to('comments');
    }
}

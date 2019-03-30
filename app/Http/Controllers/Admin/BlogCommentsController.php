<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogCommentsController extends Controller
{
    public function index()
    {
        return view('admin.comments.index');
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        return redirect()->to('blogs/comments');
    }

    public function approveDesapruve($id)
    {
        $blog = Comment::findOrFail($id);
        $blog->allowed = !$blog->allowed;
        return redirect()->to('blogs/comments');
    }
}

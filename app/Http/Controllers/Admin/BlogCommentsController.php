<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;

class BlogCommentsController extends Controller
{
    protected $log;

    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
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

        $this->log->log('Usuario(a) aprovou ou reprovou comentario.');
        return redirect()->to('comments');
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou comentario');
        return redirect()->to('comments');
    }

}

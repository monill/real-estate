<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $messages = Message::paginate(25);
        $unread = Message::where('unread', '=', false)->count();
        return view('admin.messages.index', compact('messages', 'unread'));
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
        $message = Message::findOrFail($id);
        $message->unread = true;
        $message->update();

        $unread = Message::where('unread', '=', false)->count();
        return view('admin.messages.message', compact('message', 'unread'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        Message::findOrFail($id)->delete();
        return redirect()->to('messages');
    }
}

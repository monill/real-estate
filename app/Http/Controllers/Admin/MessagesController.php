<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Message::paginate(25);
        $unread = Message::where('unread', '=', false)->count();
        return view('admin.messages.index', compact('messages', 'unread'));
    }

    public function show($id)
    {
        $message = Message::findOrFail($id);
        $message->unread = true;
        $message->update();

        $unread = Message::where('unread', '=', false)->count();
        return view('admin.messages.message', compact('message', 'unread'));
    }

    public function destroy($id)
    {
        Message::findOrFail($id)->delete();
        return redirect()->to('messages');
    }
}

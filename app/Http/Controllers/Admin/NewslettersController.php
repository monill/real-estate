<?php

namespace App\Http\Controllers\Admin;

use App\Models\Log;
use App\Models\Newsletter;
use App\Http\Controllers\Controller;

class NewslettersController extends Controller
{
    protected $log;

    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    public function index()
    {
        $newsletters = Newsletter::all();
        return view('admin.newsletters.index', compact('newsletters'));
    }

    public function destroy($id)
    {
        Newsletter::findOrFail($id)->delete();
        $this->log->log('Usuario(a) deletou um e-mail do newsletter');
        return redirect()->to('newsletters');
    }
}

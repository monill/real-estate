<?php

namespace App\Http\Controllers\Admin;

use App\Models\Log;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class UsersController extends Controller
{
    protected $log;

    public function __construct()
    {
        $this->middleware('auth');
        $this->log = new Log();
    }

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.add');
    }

    public function store(Request $request)
    {
        if ($request->has('image') && $request->file('image')->isValid())
        {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('senha'));

            //Image
            $img = $request->file('avatar');
            $filename = md5Gen();
            //End Image

            $user->avatar = $filename . '.' . $img->getClientOriginalExtension();;
            $user->job = $request->input('job');
            $user->about = $request->input('about');
            $user->admin = $request->input('admin') ? true : false;
            $user->save();

            $this->uploadImage($user->id, $filename, $img);

            $this->log->log('Usuario(a) adicionou nova conta de usuario');
            return redirect()->to('users');
        } else {
            return redirect()->to('users')->withErrors(['Erro no arquivo de imagem, check o arquivo e tente novamente.']);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name');

        if (auth()->user()->isAdmin() || $user->id == auth()->user()->id) {
            if ($request->input('senha') != null) {
                $user->password = bcrypt($request->input('senha'));
            }
        }

        //Image
        $img = $request->file('avatar');
        if ($img != null) {
            $this->removeImage($id, $user->avatar);
            $filename = md5Gen() . '.' . $img->getClientOriginalExtension();
        } else {
            $filename = $user->avatar;
        }
        //End Image

        $user->avatar = $filename;
        $user->job = $request->input('job');
        $user->about = $request->input('about');
        $user->admin = $request->input('admin') ? true : false;
        $user->update();

        if ($img != null) {
            $this->uploadImage($id, $filename, $img);
        }

        $this->log->log('Usuario(a) atualizou sua conta ou de outro usuario');
        return redirect()->to('users');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        $this->removeDirectory($id);
        $this->log->log('Usuario(a) deletou uma conta');
        return redirect()->to('users');
    }

    private function uploadImage($id, $filename, $img)
    {
        $this->pathExist($id);

        $local = public_path('uploads/users/' . $id . '/');

        $image = Image::make($img);

        $image->save($local . $filename);
    }

    private function removeImage($id, $filename)
    {
        return File::delete(public_path('uploads/users/' . $id . '/' . $filename));
    }

    private function removeDirectory($id)
    {
        return File::delete(public_path('uploads/users/' . $id));
    }

    private function pathExist($id)
    {
        $path = public_path('uploads/users/' . $id . '/');

        if (!file_exists($path) && !is_dir($path)) {
            mkdir($path, 0777, true);
        }
    }
}

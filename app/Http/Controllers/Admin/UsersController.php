<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UsersRequest;
use App\Models\Log;
use App\Traits\ImageFile;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $photosPath;
    protected $log;
    protected $imageFile;

    /**
     * BlogCommentsController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     * Class LOG, salva em banco o que foi pelos corretores/admins
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->photosPath = public_path('uploads/users/');
        $this->log = new Log();
        $this->imageFile = new ImageFile();
    }

    /**
     *
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     *
     */
    public function create()
    {
        return view('admin.users.add');
    }

    /**
     *
     */
    public function store(UsersRequest $request)
    {
        if ($request->has('image') && $request->file('image')->isValid()) {
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

            $this->imageFile->uploadImage($this->photosPath, $user->id, $filename, $img);

            $this->log->log('Usuario(a) adicionou nova conta de usuario');
            return redirect()->to('users');
        } else {
            return redirect()->to('users')->withErrors(['Erro no arquivo de imagem, check o arquivo e tente novamente.']);
        }
    }

    /**
     *
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     *
     */
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
            $this->imageFile->removeImage($this->photosPath, $id, $user->avatar);
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
            $this->imageFile->uploadImage($this->photosPath, $id, $filename, $img);
        }

        $this->log->log('Usuario(a) atualizou sua conta ou de outro usuario');
        return redirect()->to('users');
    }

    /**
     *
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        $this->imageFile->removeDirectory($this->photosPath, $id);
        $this->log->log('Usuario(a) deletou uma conta');
        return redirect()->to('users');
    }
}

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
     * UsersController constructor.
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
     * Página inicial Corretores
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Página para adicionar corretores
     */
    public function create()
    {
        return view('admin.users.add');
    }

    /**
     * Salva no banco
     */
    public function store(UsersRequest $request)
    {
        //checa se existe uma imagem e ela é válida
        if ($request->has('image') && $request->file('image')->isValid()) {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('senha'));

            //Image
            $img = $request->file('avatar');
            $filename = md5Gen();
            //End Image

            $user->avatar = $filename . '.' . $img->getClientOriginalExtension(); //recebe nome aleatório e a extensão do arquivo
            $user->job = $request->input('job');
            $user->about = $request->input('about');
            $user->admin = $request->input('admin') ? true : false;
            $user->save();

            $this->imageFile->uploadImage($this->photosPath, $user->id, $filename, $img); //upload da imagem

            $this->log->log('Usuario(a) adicionou nova conta de usuario');
            return redirect()->to('users');
        } else {
            return redirect()->to('users')->withErrors(['Erro no arquivo de imagem, check o arquivo e tente novamente.']);
        }
    }

    /**
     * Página para editar corretor(a)
     */
    public function edit($user_id)
    {
        $user = User::findOrFail($user_id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Atualiza os dados no banco
     */
    public function update(Request $request, $user_id)
    {
        $user = User::findOrFail($user_id);
        $user->name = $request->input('name');

        //somente quem for Admin ou mesmo usuário da conta pode alterar a senha
        if (auth()->user()->isAdmin() || $user->id == auth()->user()->id) {
            if ($request->input('senha') != null) {
                $user->password = bcrypt($request->input('senha'));
            }
        }

        //Image
        $img = $request->file('avatar');
        if ($img != null) {
            $this->imageFile->removeImage($this->photosPath, $user_id, $user->avatar); //remove a imagem antiga
            $filename = md5Gen() . '.' . $img->getClientOriginalExtension(); //recebe nome aleatório e a extensão do arquivo
        } else {
            $filename = $user->avatar; //se o usuario nao atualizar a imagem o nome e extensão continua igual
        }
        //End Image

        $user->avatar = $filename;
        $user->job = $request->input('job');
        $user->about = $request->input('about');
        $user->admin = $request->input('admin') ? true : false;
        $user->update();

        if ($img != null) {
            $this->imageFile->uploadImage($this->photosPath, $user_id, $filename, $img); //upload da imagem
        }

        $this->log->log('Usuario(a) atualizou sua conta ou de outro usuario');
        return redirect()->to('users');
    }

    /**
     * Delete a conta cadastrada
     * Remove o diretório junto com a imagem
     */
    public function destroy($user_id)
    {
        User::findOrFail($user_id)->delete();
        $this->imageFile->removeDirectory($this->photosPath, $user_id);
        $this->log->log('Usuario(a) deletou uma conta');
        return redirect()->to('users');
    }
}

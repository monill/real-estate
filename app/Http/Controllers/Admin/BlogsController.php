<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BlogsRequest;
use App\Models\Blog;
use App\Models\Log;
use App\Models\Tag;
use App\Traits\ImageFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    protected $photosPath;
    protected $log;
    protected $imageFile;

    /**
     * BlogsController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     * Class LOG, salva em banco o que foi pelos corretores/admins
     * photosPath define o diretório onde a imagem vai ser armazenada
     * imageFile inicializa a classe que vai criar o diretório e efetua o upload da imagem
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->photosPath = public_path('uploads/blogs/');
        $this->log = new Log();
        $this->imageFile = new ImageFile();
    }

    /**
     * Página inicial Blogs
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'DESC')->paginate(12);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Checa se existe ao menos uma Tag cadastrada, caso contrário redireciona
     * para Página de Tags onde deve ser efetuado o cadastrado
     *
     * Se existir ao menos 1 tag, redireciona para página de cadastro
     * passando as tags utilizando um form select
     */
    public function create()
    {
        if (Tag::count() <= 0) {
            return redirect()->to('tags')->withErrors(['Erro! Nenhuma tag cadastrada, cadastre ao menos uma e tente novamente.']);
        }

        $tags = Tag::all()->pluck('name', 'id');
        return view('admin.blogs.add', compact('tags'));
    }

    /**
     * Salva no banco
     *
     *
     */
    public function store(BlogsRequest $request)
    {
        //checa se existe uma imagem e ela é válida
        if ($request->has('image') && $request->file('image')->isValid()) {
            $blog = new Blog();
            $blog->user_id = auth()->user()->id; //pega o ID do usuário logado
            $blog->title = $request->input('title');

            //Image
            $img = $request->file('image');
            $filename = md5Gen() . '.' . $img->getClientOriginalExtension(); //recebe nome aleatório e a extensão do arquivo
            //End Image

            $blog->image = $filename;
            $blog->content = $request->input('content');

            $blog->meta_keywords = $request->input('meta_keywords');
            $blog->meta_description = $request->input('meta_description');
            $blog->save();

            $blog->tags()->attach($request->input('tags')); //salva as Tags selecionadas no formulário na tabela blog_tags

            $this->imageFile->uploadImage($this->photosPath, $blog->id, $filename, $img); //upload da imagem

            $this->log->log('Usuario(a) cadastrou novo blog');
            return redirect()->to('blogs');
        } else {
            return redirect()->to('blogs')->withErrors(['Erro no arquivo de imagem, check o arquivo e tente novamente.']);
        }
    }

    /**
     * Edita o Blog
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $tags = Tag::all()->pluck('name', 'id');
        return view('admin.blogs.edit', compact('blog', 'tags'));
    }

    /**
     * Atualiza no banco
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->user_id = auth()->user()->id; //pega o ID do usuário logado
        $blog->title = $request->input('title');

        //Image
        $img = $request->file('image');
        if ($img != null) {
            $this->imageFile->removeImage($this->photosPath, $id, $blog->image); //remove a imagem antiga
            $filename = md5Gen() . '.' . $img->getClientOriginalExtension(); //recebe nome aleatório e a extensão do arquivo
        } else {
            $filename = $blog->image; //se o usuario nao atualizar a imagem o nome e extensão continua igual
        }
        //End Image

        $blog->image = $filename;
        $blog->content = $request->input('content');

        $blog->meta_keywords = $request->input('meta_keywords');
        $blog->meta_description = $request->input('meta_description');

        $blog->tags()->sync($request->input('tags')); //atualiza as Tags selecionadas no formulário na tabela blog_tags

        $blog->update();

        if ($img != null) {
            $this->imageFile->uploadImage($this->photosPath, $id, $filename, $img); //upload da imagem
        }

        $this->log->log('Usuario(a) atualizou blog');
        return redirect()->to('blogs');
    }

    /**
     * Deleta o Blog
     * Deleta o diretório da imagem do blog
     */
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        $this->imageFile->removeDirectory($this->photosPath, $id);
        $this->log->log('Usuario(a) deletou blog');
        return redirect()->to('blogs');
    }

    /**
     * Publica ou coloca blog em modo rascunho
     */
    public function publishOnOff($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->published = !$blog->published;
        $blog->update();

        $this->log->log('Usuario(a) publicou ou colocou blog em modo rascunho');
        return redirect()->to('blogs');
    }
}

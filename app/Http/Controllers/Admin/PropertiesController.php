<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImagesRequest;
use App\Http\Requests\PropertiesRequest;
use App\Http\Requests\SearchesRequest;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Log;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Traits\ImageFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{
    protected $photosPath;
    protected $log;
    protected $imageFile;

    /**
     * PropertiesController constructor.
     * Middleware valida a sessão do usuario ok e ativa, caso contrario redireciona para o login
     * Class LOG, salva em banco o que foi pelos corretores/admins
     * photosPath define o diretório onde a imagem vai ser armazenada
     * imageFile inicializa a classe que vai criar o diretório e efetua o upload da imagem
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->photosPath = public_path('/uploads/properties/');
        $this->log = new Log();
        $this->imageFile = new ImageFile();
    }

    /**
     * Página inicial Propriedades
     * Ordena por ID em ordem decrescente, paginando 8 por página
     */
    public function index()
    {
        $properties = Property::orderBy('id', 'DESC')->paginate(8);
        return view('admin.properties.index', compact('properties'));
    }

    /**
     * Checa se existe ao menos uma Categoria e Destaque cadastrada, caso contrário redireciona
     * para Página de Categoria e Destaque onde deve ser efetuado o cadastrado
     *
     * Se existir ao menos 1 Categoria e Destaque, redireciona para página de cadastro
     * passando as Categorias e Destaques utilizando um form select
     */
    public function create()
    {
        if (Feature::count() <= 0) {
            return redirect()->to('features')->withErrors(['Erro! Nenhuma Característica cadastrada, cadastre ao menos uma e tente novamente.']);
        }
        if (Category::count() <= 0) {
            return redirect()->to('categories')->withErrors(['Erro! Nenhuma Categoria cadastrada, cadastre ao menos uma e tente novamente.']);
        }

        $features = Feature::all();//->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        return view('admin.properties.add', compact('features', 'categories'));
    }

    /**
     * Salva no banco
     */
    public function store(PropertiesRequest $request)
    {
        $property = new Property();
        $property->user_id = auth()->user()->id;
        $property->category_id = $request->input('category_id');
        $property->name = $request->input('name');
        $property->purpose = $request->input('purpose');
        $property->type = $request->input('type');
        $property->address = $request->input('address');
        $property->description = $request->input('description');
        $property->price = formatPrice($request->input('price')); //formata os preço recebido para Decimal
        $property->bathrooms = $request->input('bathrooms');
        $property->bedrooms = $request->input('bedrooms');
        $property->garage = $request->input('garage');
        $property->city = $request->input('city');
        $property->area = $request->input('area');
        $property->slider = $request->input('slider');
        $property->year = $request->input('year');
        $property->video1 = $request->input('video1');
        $property->video2 = $request->input('video2');
        $property->latitude = $request->input('latitude');
        $property->longitude = $request->input('longitude');
        $property->save();

        $property->features()->attach($request->input('feature')); //salva os Destaques selecionadas no formulário na tabela property_features

        $this->log->log('Usuario(a) cadastrou nova propriedade.');

        return redirect()->route('images', $property->id);
    }

    /**
     * Edita a propriedade cadastrada
     */
    public function edit($id)
    {
        $property = Property::findOrFail($id);
        $features = Feature::all();//->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        $destaque = DB::table('property_features')->where('property_features.property_id', $id)->pluck('property_features.feature_id', 'property_features.feature_id')->all();
        return view('admin.properties.edit', compact('property', 'features', 'categories', 'destaque'));
    }

    /**
     * Atualiza a propriedade cadastrada
     */
    public function update(PropertiesRequest $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->user_id = auth()->user()->id;
        $property->category_id = $request->input('category_id');
        $property->name = $request->input('name');
        $property->purpose = $request->input('purpose');
        $property->type = $request->input('type');
        $property->address = $request->input('address');
        $property->description = $request->input('description');
        $property->price = formatPrice($request->input('price'));
        $property->bathrooms = $request->input('bathrooms');
        $property->bedrooms = $request->input('bedrooms');
        $property->garage = $request->input('garage');
        $property->city = $request->input('city');
        $property->area = $request->input('area');
        $property->slider = $request->input('slider');
        $property->year = $request->input('year');
        $property->video1 = $request->input('video1');
        $property->video2 = $request->input('video2');
        $property->latitude = $request->input('latitude');
        $property->longitude = $request->input('longitude');
        $property->update();

        $property->features()->sync($request->input('feature')); //atualiza os Destaques selecionadas no formulário na tabela property_features

        $this->log->log('Usuario(a) atualizou uma propriedade.');

        return redirect()->to('properties');
    }

    /**
     * Deleta a propriedade cadastrada
     */
    public function destroy($id)
    {
        Property::findOrFail($id)->delete();
        $this->imageFile->removeDirectory($this->photosPath, $id);
        $this->log->log('Usuario(a) deletou uma propriedade.');
        return redirect()->to('properties');
    }

    /**
     * Pesquisa no banco pela propriedade
     * Valida os campos com SearchesRequest
     * Se o campo passado no formulário estiver vazio, pesquisa somente o que foi recebido
     * Retorna o que foi encontrado, paginando com 8 por página
     */
    public function search(SearchesRequest $request)
    {
        if ($request->isMethod('POST')) {
            $purpose = $request->get('purpose');
            $city = $request->get('city');
            $slider = $request->get('slider');
            $type = $request->get('type');

            $properties = DB::table('properties');

            if ($request->has('purpose') && $request->input('purpose') != null) {
                $properties->where(function ($query) use ($purpose) {
                    $query->where('properties.purpose', '=', $purpose);
                });
            }
            if ($request->has('city') && $request->input('city') != null) {
                $properties->where(function ($query) use ($city) {
                    $query->where('properties.city', 'like', '%' . $city . '%');
                });
            }
            if ($request->has('slider') && $request->input('slider') != null) {
                $properties->where(function ($query) use ($slider) {
                    $query->where('properties.slider', '=', $slider);
                });
            }
            if ($request->has('type') && $request->input('type') != null) {
                $properties->where(function ($query) use ($type) {
                    $query->where('properties.type', '=', $type);
                });
            }

            $properties = $properties->paginate(8);

            return view('admin.properties.search', compact('properties'));
        } else {
            return redirect()->to('properties');
        }
    }

    /**
     * Adiciona ou remove imagem da propriedade
     */
    public function images($id)
    {
        $property = Property::findOrFail($id);
        $images = PropertyImage::where('property_id', '=', $id)->get();
        return view('admin.properties.images', compact('property', 'images'));
    }

    /**
     * Upload das imagens
     */
    public function uploadImage(ImagesRequest $request)
    {
        $photos = $request->file('file');
        $property_id = $request->input('pp_id');

        if (!is_array($photos)) {
            $photos = [$photos];
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $filename = md5Gen() . '.' . $photo->getClientOriginalExtension(); //recebe nome aleatório e a extensão do arquivo

            //salva na tabela property_images, a propriedade e o nome da imagem
            $upload = new PropertyImage();
            $upload->property_id = $property_id;
            $upload->image = $filename;
            $upload->save();

            $this->imageFile->uploadImage($this->photosPath, $property_id, $filename, $photo); //upload da imagem
        }

        $this->log->log('Usuario(a) adicionou imagens a propriedade');
        return response()->json(['message' => 'Imagem salva com sucesso'], 200);
        // return redirect()->route('images', $property_id);
    }

    /**
     * Deleta imagem selecionada
     */
    public function deleteImage($id)
    {
        $uploaded_image = PropertyImage::where('id', '=', $id)->first();

        //caso o ID recebido nao exista, retorna mensagem
        if (!$uploaded_image) {
            return response()->json(['message' => 'Desculpe, arquivo inexistente'], 400);
        }

        //Remove imagem
        $this->imageFile->removeImage($this->photosPath, $uploaded_image->property_id, $uploaded_image->image);

        //caso o ID recebido exista, deleta do banco
        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }

        $this->log->log('Usuario(a) deletou uma ou mais imagens');
        return redirect()->route('images', $uploaded_image->property_id);
    }

    /**
     * Seta imagem escolhida como Principal
     */
    public function mainImage(Request $request, $photo_id)
    {
        $property_id = $request->input('pp_id'); //recebe o ID da propriedade

        $images = PropertyImage::where('property_id', '=', $property_id)->get(); //seleciona todas as imagens da propriedade

        //seta todas as imagens para destaque = falso
        foreach ($images as $image) {
            $image->feature = false;
            $image->update();
        }

        //seta a imagem para destaque = true
        DB::table('property_images')->where('id', '=', $photo_id)->update(['feature' => true]);

        $this->log->log('Usuario(a) definiu uma imagem principal');
        return redirect()->route('images', $property_id);
    }

    /**
     * Alterar valor true ou false para o campo featured
     */
    public function feature($id)
    {
        $property = Property::findOrFail($id);
        $property->featured = !$property->featured;
        $property->update();

        $this->log->log('Usuario(a) adicinou ou removeu propriedade em destaque');
        return redirect()->to('properties');
    }

    /**
     * Adiciona ou remove como Slider na página Inicial
     */
    public function slider($id)
    {
        $property = Property::findOrFail($id);
        $property->slider = !$property->slider;
        $property->update();

        $this->log->log('Usuario(a) adicinou ou removeu propriedade da tela inicial');
        return redirect()->to('properties');
    }
}

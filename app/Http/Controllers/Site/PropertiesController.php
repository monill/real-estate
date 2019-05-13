<?php

namespace App\Http\Controllers\Site;

use App\Http\Requests\PesquisasRequest;
use App\Http\Requests\QuestionsRequest;
use App\Models\Property;
use App\Models\PropertyFeature;
use App\Models\PropertyImage;
use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{
    /**
     * Página PROPRIEDADES do site
     */
    public function index()
    {
        $properties = Property::orderBy('id', 'DESC')->paginate(12);
        return view('site.properties.index', compact('properties'));
    }

    /**
     * Salva no banco os dados passado por formulário na página da propriedade
     * Valida os campos com QuestionsRequest, se tiver tudo OK salva no banco,
     * caso contrário retorna uma mensagem com erro
     */
    public function store(QuestionsRequest $request)
    {
        $question = new Question();
        $question->property_id = $request->input('property_id');
        $question->name = $request->input('name');
        $question->email = $request->input('email');
        $question->message = $request->input('message');
        $question->ip = $request->ip();
        $question->save();

        //flash('Mensagem enviada com sucesso, aguarde nosso retorno')->success();
        return redirect()->back();
    }

    /**
     * Página da propriedade selecionado
     * Caso propriedade não exista, retorna 404
     * Incrementa o VIEWS na banco cada vez que visualiza o propriedade
     * Retorna as imagens cadastradas
     * Retorna os destaques cadastrados
     */
    public function show($id, $slug)
    {
        $property = Property::where('id', '=', $id)->whereSlug($slug)->firstOrFail();
        $property->increment('views');

        $images = PropertyImage::where('property_id', '=', $id)->get();
        $features = PropertyFeature::where('property_id', '=', $id)->get();
        return view('site.properties.property', compact('property', 'images', 'features'));
    }

    /**
     * Pesquisa no banco pela propriedade
     * Valida os campos com PesquisasRequest
     * Se o campo passado no formulário estiver vazio, pesquisa somente o que foi recebido
     * Retorna o que foi encontrado, paginando com 12 por página
     */
    public function pesquisar(PesquisasRequest $request)
    {
        if (Request::METHOD_POST) {

            $id = $request->input('id');
            $city = $request->input('city');
            $purpose = $request->input('purpose');
            $type = $request->input('type');
            $bedrooms = $request->input('bedrooms');
            $bathrooms = $request->input('bathrooms');
            $min_price = $request->input('min_price');
            $max_price = $request->input('max_price');

            $properties = DB::table('properties');

            if ($request->has('id') && $request->input('id') != null) {
                $properties->where(function ($query) use ($id) {
                    $query->where('properties.id', '=', $id);
                });
            }
            if ($request->has('city') && $request->input('city') != null) {
                $properties->where(function ($query) use ($city) {
                    $query->where('properties.city', 'like', '%' . $city . '%');
                });
            }
            if ($request->has('purpose') && $request->input('purpose') != null) {
                $properties->where(function ($query) use ($purpose) {
                    $query->where('properties.purpose', '=', $purpose);
                });
            }
            if ($request->has('type') && $request->input('type') != null) {
                $properties->where(function ($query) use ($type) {
                    $query->where('properties.type', '=', $type);
                });
            }
            if ($request->has('bedrooms') && $request->input('bedrooms') != null) {
                $properties->where(function ($query) use ($bedrooms) {
                    $query->where('properties.bedrooms', '=', $bedrooms);
                });
            }
            if ($request->has('bathrooms') && $request->input('bathrooms') != null) {
                $properties->where(function ($query) use ($bathrooms) {
                    $query->where('properties.bathrooms', '=', $bathrooms);
                });
            }
            if ($request->has('min_price') && $request->input('min_price') != null &&
                $request->has('max_price') && $request->input('max_price') != null) {
                $properties->where(function ($query) use ($min_price, $max_price) {
                    $query->whereBetween('properties.price', [$min_price, $max_price]);
                });
            }

            $properties = $properties->paginate(12);

            return view('site.properties.pesquisa', compact('properties'));
        } else {
            return redirect()->to('propriedades');
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Feature;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{
    private $photos_path;

    public function __construct()
    {
        $this->middleware('auth');
        $this->photos_path = public_path('/uploads/properties/');
    }

    public function index()
    {
        $properties = Property::orderBy('created_at', 'DESC')->paginate(8);
        return view('admin.properties.index', compact('properties'));
    }

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

    public function store(Request $request)
    {
        $property = new Property();
        $property->user_id = auth()->user()->id;
        $property->category_id = $request->input('category_id');
        $property->name = $request->input('name');
        $property->purpose = $request->input('purpose');
        $property->type = $request->input('type');
        $property->address = $request->input('address');
        $property->description = $request->input('description');
        $property->price = $request->input('price');
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

        return redirect()->route('images', $property->id);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $property = Property::findOrFail($id);
        $features = Feature::all();//->pluck('name', 'id');
        $categories = Category::all()->pluck('name', 'id');
        return view('admin.properties.edit', compact('property', 'features', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->user_id = auth()->user()->id;
        $property->category_id = $request->input('category_id');
        $property->name = $request->input('name');
        $property->purpose = $request->input('purpose');
        $property->type = $request->input('type');
        $property->address = $request->input('address');
        $property->description = $request->input('description');
        $property->price = $request->input('price');
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

        return redirect()->to('properties');
    }

    public function destroy($id)
    {
        Property::findOrFail($id)->delete();
        return redirect()->to('properties');
    }

    public function search(Request $request)
    {
        //TODO
        $purpose = $request->get('purpose');
        $city = $request->get('city');
        $slider = $request->get('slider');
        $type = $request->get('type');

//        $properties = Property::
        return view('admin.properties.index', compact('properties'));
    }

    public function images($id)
    {
        $property = Property::findOrFail($id);
        $images = PropertyImage::where('property_id', '=', $id)->get();
        return view('admin.properties.images', compact('property', 'images'));
    }

    public function uploadImage(Request $request)
    {
        $photos = $request->file('file');
        $property_id = $request->input('pp_id');

        if (!is_array($photos)) {
            $photos = [$photos];
        }

        if (!is_dir($this->photos_path . $property_id . '/')) {
            mkdir($this->photos_path . $property_id . '/', 0777);
        }

        for ($i = 0; $i < count($photos); $i++) {
            $photo = $photos[$i];
            $name = md5Gen();
            $save_name = $name . '.' . $photo->getClientOriginalExtension();

            $photo->move($this->photos_path . $property_id . '/', $save_name);

            $upload = new PropertyImage();
            $upload->property_id = $property_id;
            $upload->image = $save_name;
            $upload->save();
        }

        return response()->json(['message' => 'Imagem salva com sucesso'], 200);
//        return redirect()->route('images', $property_id);
    }

    public function deleteImage($id)
    {
        $uploaded_image = PropertyImage::where('id', '=', $id)->first();

        if (empty($uploaded_image)) {
            return response()->json(['message' => 'Desculpe, arquivo inexistente'], 400);
        }

        $file_path = $this->photos_path . $id . '/' . $uploaded_image->image;

        if (file_exists($file_path)) {
            unlink($file_path);
        }

        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }

        return redirect()->route('images', $uploaded_image->property_id);
    }

    public function mainImage(Request $request, $photo_id)
    {
        $property_id = $request->input('pp_id');

        $images = PropertyImage::where('property_id', '=', $property_id)->get();

        foreach ($images as $image) {
            $image->feature = false;
            $image->update();
        }

        DB::table('property_images')->where('id', '=', $photo_id)->update(['feature' => true]);

        return redirect()->route('images', $property_id);
    }

    public function feature($id)
    {
        $property = Property::findOrFail($id);
        $property->featured = !$property->featured;
        $property->update();
        return redirect()->to('properties');
    }
}

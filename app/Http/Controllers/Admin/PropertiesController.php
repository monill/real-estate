<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Feature;
use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $purpose = $request->get('purpose');
        $city = $request->get('city');
        $slider = $request->get('slider');
        $type = $request->get('type');
    }

    public function images($id)
    {
        $property = Property::findOrFail($id);
        return view('admin.properties.images', compact('property'));
    }

    public function addImages(Request $request)
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
            $upload->filename = $save_name;
            $upload->save();
        }

        return response()->json(['message' => 'Image saved Successfully'], 200);
    }

    public function deleteImages($id)
    {
        $filename = $request->id;
        $uploaded_image = PropertyImage::where('original_name', basename($filename))->first();

        if (empty($uploaded_image)) {
            return response()->json(['message' => 'Sorry file does not exist'], 400);
        }

        $file_path = $this->photos_path . '/' . $uploaded_image->filename;
        $resized_file = $this->photos_path . '/' . $uploaded_image->resized_name;

        if (file_exists($file_path)) {
            unlink($file_path);
        }

        if (file_exists($resized_file)) {
            unlink($resized_file);
        }

        if (!empty($uploaded_image)) {
            $uploaded_image->delete();
        }

        return response()->json(['message' => 'File successfully delete'], 200);
    }
}

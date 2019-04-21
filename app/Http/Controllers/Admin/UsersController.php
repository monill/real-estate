<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('senha'));
        $user->avatar = $request->input('avatar');
        $user->job = $request->input('job');
        $user->about = $request->input('about');
        $user->save();

        return redirect()->to('users');
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
        $avatar = $request->file('avatar');
        $extension = $avatar->getClientOriginalExtension();
        $randonName = md5($avatar . time());

        Storage::disk('public')->put($avatar->getFilename().'.'.$extension,  File::get($avatar));

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('senha'));
        $user->avatar = $randonName.'.'.$extension();
        $user->job = $request->input('job');
        $user->about = $request->input('about');
        $user->update();

        return redirect()->to('users');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->to('users');
    }

    protected function imageUpload($userId, $file)
    {
//        $local = public_path('uploads/users/' . $userId . '/');
//        $arq = $ . str_random(10);
//        $image = Image::make($img);
//        $image->resize(600, 600)->save($local . $arq . '.' . $img->getClientOriginalExtension());
//        $user->img_icone = $arq . '.' . $img->getClientOriginalExtension();
    }
}

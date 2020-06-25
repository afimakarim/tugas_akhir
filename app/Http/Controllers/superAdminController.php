<?php

namespace App\Http\Controllers;

use App\Merek;
use App\User;
use App\Jenis;
use Illuminate\Http\Request;
use Storage;

class superAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('superAdmin.homeSuperAdmin');
    }


    public function homeSuperAdmin()
    {
        return view('superAdmin.homeSuperAdmin');
    }

    public function userAdminPusat()
    {
        $mereks = Merek::all();
        $users = User::all();

        return view('superAdmin.userAdminPusat', compact(['mereks', 'users']));
    }

    public function store2(Request $request)
    {
        $user = new User();
        $user->gambar = $request->file('gambar')->store('pusat');
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->name = $request->name;
        $user->merek_id = $request->merek_id;
        $user->save();
//        var_dump($request);
//        User::create([
//            'name' => $request['name'],
//            'gambar' => $request['gambar'],
//            'email' => $request['email'],
//            'password' => bcrypt($request->password),
//            'merek_id' => $request['merek_id']
//        ]);
        return redirect()->route('admin.pusat')->withInfo('Merek Ditambahkan');
    }

    public function editUserAdminPusat(User $user)
    {
        $mereks = Merek::all();
        return view('superAdmin.editUserAdminPusat', compact('user', 'mereks'));
    }

    public function updateUserAdminPusat(Request $request, User $user)
    {
        if ($request['gambar']) {
            Storage::delete($user['gambar']);
            $user->gambar = $request->file('gambar')->store('pusat');
        }
        $user->email = $request->email;
        $user->name = $request->name;
        $user->merek_id = $request->merek_id;
        if (!empty($request['password'])) {
            $user->password = bcrypt($request->password);
        }
        $user->update();
//        $user->update([
//            'name' => $request['name'],
//            'gambar' => $request['gambar'],
//            'email' => $request['email'],
//            'password' => bcrypt($request['password']),
//            'merek_id' => $request['merek_id']
//        ]);
        return redirect()->route('admin.pusat')->withInfo('Merek berhasil dirubah');
    }

    public function destroy2(User $user)
    {
//        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->route('admin.pusat')->withDanger('Merek berhasil dihapus');
    }


    public function merek()
    {
        $mereks = Merek::all();
        return view('superAdmin.merek', compact('mereks'));
    }

    public function store(Request $request)
    {
        $merek = new Merek();
        $merek->gambar = $request->file('gambar')->store('merk');
        $merek->name = $request->name;
        $merek->save();
//        merek::create([
//            'name' => $request['name'],
//            'gambar' => $request['gambar']
//        ]);
        return redirect()->route('admin.merek')->withInfo('Merek Ditambahkan');
    }

    public function editMerek(Merek $merek)
    {
        return view('superAdmin.editMerek', compact('merek'));
    }

    public function updateMerek(Request $request, Merek $merek)
    {
        if ($request['gambar']) {
            Storage::delete($merek['gambar']);
            $merek->gambar = $request->file('gambar')->store('merk');
        }
//        dd($request);
        $merek->name = $request->name;
        $merek->update();
//        $merek->update([
//            'name' => request('name'),
//            'gambar' => request('gambar')
//        ]);

        return redirect()->route('admin.merek')->withInfo('Merek berhasil dirubah');
    }

    public function destroy(Merek $merek)
    {
        $merek->delete();
        return redirect()->route('admin.merek')->withDanger('Merek berhasil dihapus');
    }

    public function jenis()
    {
        $jenis = Jenis::all();
        return view('superAdmin.jenisMotor', compact('jenis'));
    }
    public function store5(Request $request)
    {
        $jenis = new Jenis();
        $jenis->name = $request->name;
        $jenis->save();

        return redirect()->route('admin.jenis')->withInfo('Merek Ditambahkan');
    }
    public function editJenis(Jenis $jenis)
    {
        return view('superAdmin.editJenisMotor', compact('jenis'));
    }
    public function updateJenis(Request $request, Jenis $jenis)
    {
        $jenis->name = $request->name;
        $jenis->update();

        return redirect()->route('admin.jenis')->withInfo('Merek berhasil dirubah');
    }
    public function destroy5(Jenis $jenis)
    {
        $jenis->delete();
        return redirect()->route('admin.jenis')->withDanger('Merek berhasil dihapus');
    }
}

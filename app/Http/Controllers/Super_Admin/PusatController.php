<?php

namespace App\Http\Controllers\Super_Admin;

use App\Merek;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class PusatController extends Controller
{
    public function userAdminPusat()
    {
        $mereks = Merek::all();
        $users = User::all();

        return view('superAdmin.userAdminPusat', compact(['mereks', 'users']));
    }

    public function store(Request $request)
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

    public function destroy(User $user)
    {
//        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->route('admin.pusat')->withDanger('Merek berhasil dihapus');
    }
}

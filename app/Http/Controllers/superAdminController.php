<?php

namespace App\Http\Controllers;

use App\Merek;
use Illuminate\Http\Request;

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
        return view('superAdmin.userAdminPusat');
    }
    public function editUserAdminPusat()
    {
        return view('superAdmin.editUserAdminPusat');
    }
    public function merek()
    {
        $mereks = Merek::all();
        return view('superAdmin.merek', compact('mereks'));
    }

    public function store(Request $request)
    {
        $this->validate($request(),[
            'name' => 'required',
            'gambar' => 'required'
        ]);
        merek::create([
            'name' => $request('name'),
            'gamabar' => $request('gambar')
        ]);
        return redirect()->route('admin.dashboard')->withInfo('Merek Ditambahkan');
    }
    public function editMerek()
    {
        return view('superAdmin.editMerek');
    }
}

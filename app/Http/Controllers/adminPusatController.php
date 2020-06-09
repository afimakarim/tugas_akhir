<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminPusatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function index()
    {
        return view('adminPusat.homeAdminPusat');
    }


    public function homeAdminPusat()
    {
        return view('adminPusat.homeAdminPusat');
    }
    public function userAdminDealer()
    {
        return view('adminPusat.userAdminDealer');
    }
    public function editUserAdminPusat()
    {
        return view('adminPusat.editUserAdminDealer');
    }
    public function dataMotor()
    {
        return view('adminPusat.dataMotor');
    }
    public function editDataMotor()
    {
        return view('adminPusat.editDataMotor');
    }
}

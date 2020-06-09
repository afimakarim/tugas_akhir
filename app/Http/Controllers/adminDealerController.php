<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminDealerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:dealer');
    }
    public function index()
    {
        return view('adminDealer.homeAdminDealer');
    }


    public function homeAdminDealer()
    {
        return view('adminDealer.homeAdminDealer');
    }
    public function profileDealer()
    {
        return view('adminDealer.profileDealer');
    }
    public function editProfileDealer()
    {
        return view('adminDealer.editProfileDealer');
    }
    public function promo()
    {
        return view('adminDealer.promo');
    }
    public function editPromo()
    {
        return view('adminDealer.editPromo');
    }
}

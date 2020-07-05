<?php

namespace App\Http\Controllers\Super_Admin;

use App\Merek;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MerekController extends Controller
{
    public function merek()
    {
        $mereks = Merek::all();
        return view('superAdmin.merek', compact('mereks'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function cariMotor()
    {
        return view('User.cariMotor');
    }
    public function detailMotor()
    {
        return view('User.detailMotor');
    }
    public function anggaranMotor()
    {
        return view('User.anggaranMotor');
    }




    public function dealerMotor()
    {
        return view('User.dealerMotor');
    }
    public function detailDealer()
    {
        return view('User.detailDealer');
    }

    public function detailPromo()
    {
        return view('User.detailPromo');
    }




    public function infoSPK()
    {
        return view('User.infoSPK');
    }
    public function spk()
    {
        return view('User.spk');
    }
    public function spk2()
    {
        return view('User.spk2');
    }
    public function spk3()
    {
        return view('User.spk3');
    }
    public function hasilSPK()
    {
        return view('User.hasilSPK');
    }
}

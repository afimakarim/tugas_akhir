<?php

namespace App\Http\Controllers;

use App\Imports\Alternatif2Import;
use Illuminate\Http\Request;
use Excel;
use Illuminate\Support\Facades\Storage;

class TestLaravelExcelController extends Controller
{
    public function import()
    {
        Excel::import(new Alternatif2Import(),'Dataset_SPK_MOTOR_NORMALISASI.xlsx');
    }
}

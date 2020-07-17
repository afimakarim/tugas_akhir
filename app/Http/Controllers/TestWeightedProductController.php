<?php

namespace App\Http\Controllers;

use App\Alternatif2;
use Illuminate\Http\Request;
use function foo\func;

class TestWeightedProductController extends Controller
{
    public function index()
    {
        return view('test-spk');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        $digit_decimal = 18;

        if ($request->jenis == 4) {
            $datasets = Alternatif2::all();
        } else {
            $datasets = Alternatif2::where('jenis_motor', $request->jenis)->get();
        }

        $data = [];
        foreach ($request->all() as $key => $item) {
            if ($key != '_token' && $key != 'jenis') {
                $data[] = (int)$item;
            }
        }

//        dd($data);

        $weight = [];

        foreach ($data as $key => $item) {
            if ($key == 0) {
                $weight[] = (float)-number_format($item / (array_sum($data)), $digit_decimal);
            } else {
                $weight[] = (float)number_format($item / (array_sum($data)), $digit_decimal);
            }
        }

//        dd($weight);

        $alternatives = (array)[];
        foreach ($datasets as $key => $item) {
            $alternatives[$item['alternatif']] = [$item['harga'], $item['kapasitas_mesin'], $item['berat'], $item['kapasitas_tengki'], $item['kapasitas_tengki']];
        }

//        dd($alternatives);

        $func = function ($a, $w) {
            return pow($a, $w);
        };

        $vector_s = (array)[];
        foreach ($alternatives as $key => $item) {
            $vector_s[$key] = (float)number_format(array_product(array_map($func, $item, $weight)), $digit_decimal);
        }

//        dd($vector_s);

        $vector_v = (array)[];
        foreach ($vector_s as $key => $item) {
            $vector_v[$key] = (float)number_format($item / (array_sum($vector_s)), $digit_decimal);
        }
        arsort($vector_v);
        $recomended = array_slice($vector_v, 0, 10);
//        dd($recomended);
//        dd(sort($vector_v));

        dd("Weight", $weight, "TOP 10 Recommended", $recomended, "Jumlah Vector V", array_sum($vector_v), "Vector S", $vector_s, "Vector V", $vector_v, "Alternatif dari DB", $alternatives);
    }
}

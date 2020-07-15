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
        $digit_decimal = 18;

        $datasets = Alternatif2::all();

        $data = [];
        foreach ($request->all() as $key => $item) {
            if ($key != '_token') {
                $data[] = (int)$item;
            }
        }

        $weight = [];

        foreach ($data as $key => $item) {
            if ($key == 0) {
                $weight[] = (float)-number_format($item / (array_sum($data)), $digit_decimal);
            } else {
                $weight[] = (float)number_format($item / (array_sum($data)), $digit_decimal);
            }
        }

        $alternatives = (array)[];
        foreach ($datasets as $key => $item) {
            $alternatives[$item['alternatif']] = [$item['harga'], $item['kapasitas_mesin'], $item['berat'], $item['kapasitas_tengki'], $item['kapasitas_tengki']];
        }

        $func = function ($a, $w) {
            return pow($a, $w);
        };

        $vector_s = (array)[];
        foreach ($alternatives as $key => $item) {
            $vector_s[$key] = (float)number_format(array_product(array_map($func, $item, $weight)), $digit_decimal);
        }

        $vector_v = (array)[];
        foreach ($vector_s as $key => $item) {
            $vector_v[$key] = (float)number_format($item / (array_sum($vector_s)), $digit_decimal);
        }
        arsort($vector_v);
//        $recomended = array_splice($vector_v, 0, 10);
//        dd($recomended);
//        dd(sort($vector_v));

        dd($weight, array_sum($vector_v), $vector_s, $vector_v, $alternatives);
    }
}

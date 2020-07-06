<?php

namespace App\Http\Controllers\Admin_Dealer;

use App\Motor;
use App\Promo;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromoController extends Controller
{
    public function promo()
    {
        $motors = Motor::all();
        $promos = Promo::where('dealer_id', auth()->user()->id)->get();
        return view('adminDealer.promo', compact(['motors', 'promos']));
    }
    public function store(Request $request)
    {
        foreach ($request->tipe_motor as $tipe) {
            $promo = new Promo();
            $promo->gambar = $request->file('gambar')->store('promo');
            $promo->judul = $request->judul;
            $promo->ket_promo = $request->ket_promo;
            $promo->motor_id = $tipe;
            $promo->dealer_id = auth()->user()->id;
            $promo->save();
        }
        return redirect()->route('dealer.promo')->withInfo('Merek Ditambahkan');
    }
    public function editPromo(Promo $promo)
    {
        $motors = Motor::all();
        return view('adminDealer.editPromo', compact('motors', 'promo'));
    }
    public function updatePromo(Request $request, Promo $promo)
    {
        if ($request['gambar']) {
            Storage::delete($promo['gambar']);
            $promo->gambar = $request->file('gambar')->store('promo');
        }
        $promo->judul = $request->judul;
        $promo->ket_promo = $request->ket_promo;
        $promo->motor_id = $request->tipe_motor;
        $promo->update();
        return redirect()->route('dealer.promo')->withInfo('Merek berhasil dirubah');
    }
    public function destroy(Promo $promo)
    {
        $promo->delete();
        return redirect()->route('dealer.promo')->withDanger('Merek berhasil dihapus');
    }

}

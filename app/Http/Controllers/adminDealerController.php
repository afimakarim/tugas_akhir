<?php

namespace App\Http\Controllers;
use App\Alternatif;
use App\Dealer;
use App\Kriteria;
use App\Promo;
use App\Motor;
use Storage;
use Illuminate\Http\Request;

class adminDealerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:dealer');
    }
    public function index()
    {
        return view('adminDealer.profileDealer');
    }


    //profile dealer
    public function profileDealer()
    {
        $dealer = Dealer::where('user_id', auth()->user()->id)->first();
        return view('adminDealer.profileDealer', compact( 'dealer'));
    }
    public function editProfileDealer(Dealer $dealer)
    {
        return view('adminDealer.editProfileDealer', compact('dealer'));
    }
    public function updateProfileDealer(Request $request)
    {
        $dealer = Dealer::where('id', auth()->user()->id)->first();
        if ($request->gambar) {
            Storage::delete($dealer->gambar);
            $dealer->gambar = $request->file('gambar')->store('dealer');
        }
        $dealer->name = $request->name;
        $dealer->email = $request->email;
        if (!empty($request['password'])) {
            $dealer->password = bcrypt($request->password);
        }
        $dealer->telephone = $request->telephone;
        $dealer->alamat = $request->alamat;
        $dealer->ket_dealer = $request->ket_dealer;
//        dd($dealer);
        $dealer->update();

        return redirect()->route('dealer.profile')->withInfo('Merek berhasil dirubah');
    }

    //promo dealer
    public function promo()
    {
        $motors = Motor::all();
        $promos = Promo::where('dealer_id', auth()->user()->id)->get();
        return view('adminDealer.promo', compact(['motors', 'promos']));
    }
    public function store7(Request $request)
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
    public function destroy7(Promo $promo)
    {
        $promo->delete();
        return redirect()->route('dealer.promo')->withDanger('Merek berhasil dihapus');
    }

    //rangking alternatif
    public function rangking()
    {
        $kriterias = Kriteria::all();
        $alternatifs = Alternatif::where('dealer_id', auth()->user()->id)->get();
        $motors = Motor::all();
        return view('adminDealer.rangking', compact(['motors', 'kriterias', 'alternatifs']));
    }
    public  function store14(Request $request)
    {
        foreach ($request->tipe_motor as $tipe) {
        $alternatif = new Alternatif();
        $alternatif->motor_id = $tipe;
        $alternatif->nilai = $request->nilai;
        $alternatif->kriteria_id = $request->kriteria_id;
        $alternatif->dealer_id = auth()->user()->id;
        $alternatif->save();
        }
        return redirect()->route('dealer.rangking')->withInfo('Merek Ditambahkan');
    }
    public  function editRangking(Alternatif $alternatif)
    {
        $motors = Motor::all();
        $kriterias = Kriteria::all();
        return view('adminDealer.editRangking', compact('motors', 'kriterias', 'alternatif'));
    }
    public function updateRangking(Request $request, Alternatif $alternatif)
    {
        $alternatif->motor_id = $request->tipe_motor;
        $alternatif->nilai = $request->nilai;
        $alternatif->kriteria_id = $request->kriteria;
        $alternatif->save();
    }
    public function destroy14(Alternatif $alternatif)
    {
        $alternatif->delete();
        return redirect()->route('dealer.rangking')->withDanger('Merek berhasil dihapus');
    }
}

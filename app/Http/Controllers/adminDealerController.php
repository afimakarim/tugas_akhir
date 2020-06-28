<?php

namespace App\Http\Controllers;
use App\Dealer;
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


    public function homeAdminDealer()
    {
        return view('adminDealer.homeAdminDealer');
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
        $promo = new Promo();
        $promo->gambar = $request->file('gambar')->store('promo');
        $promo->judul = $request->judul;
        $promo->ket_promo = $request->ket_promo;
        $promo->motor_id = $request->tipe_motor;
        $promo->dealer_id = auth()->user()->id;
        $promo->save();

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
        $promo->dealer_id = auth()->user()->id;
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
        return view('adminDealer.rangking');
    }
    public  function store14()
    {

    }
    public  function editRangking()
    {
        return view('adminDealer.editRangking');
    }
    public function updateRangking()
    {

    }
    public function destroy14()
    {

    }
}

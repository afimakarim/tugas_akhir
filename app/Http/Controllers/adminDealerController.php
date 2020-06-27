<?php

namespace App\Http\Controllers;
use App\Dealer;
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
        $dealer->user_id = auth()->user()->id;
//        dd($dealer);
        $dealer->update();

        return redirect()->route('dealer.profile')->withInfo('Merek berhasil dirubah');
    }


    public function promo()
    {
        return view('adminDealer.promo');
    }
    public function store7()
    {

    }
    public function editPromo()
    {
        return view('adminDealer.editPromo');
    }
    public function updatePromo()
    {

    }
    public function destroy7()
    {

    }
}

<?php

namespace App\Http\Controllers;
use App\Jenis;
use App\User;
use App\Motor;
use App\Dealer;
use Illuminate\Http\Request;
use Storage;
class adminPusatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function index()
    {
        return view('adminPusat.homeAdminPusat');
    }


    public function homeAdminPusat()
    {
        return view('adminPusat.homeAdminPusat');
    }

    public function userAdminDealer()
    {
        $dealers = Dealer::where('user_id', auth()->user()->id)->get();
        return view('adminPusat.userAdminDealer', compact('dealers'));
    }

    public function store3(Request $request)
    {
        $dealer = new Dealer();
        $dealer->gambar = $request->file('gambar')->store('dealer');
        $dealer->email = $request->email;
        $dealer->password = bcrypt($request->password);
        $dealer->name = $request->name;
        $dealer->user_id = auth()->user()->id;
        $dealer->save();

        return redirect()->route('pusat.dealer')->withInfo('Merek Ditambahkan');
    }

    public function editUserAdminDealer(Dealer $dealer)
    {
        return view('adminPusat.editUserAdminDealer', compact('dealer'));
    }

    public function updateUserAdminDealer(Request $request, Dealer $dealer)
    {
        if ($request['gambar']) {
            Storage::delete($dealer['gambar']);
            $dealer->gambar = $request->file('gambar')->store('dealer');
        }
        $dealer->email = $request->email;
        $dealer->name = $request->name;
        if (!empty($request['password'])) {
            $dealer->password = bcrypt($request->password);
        }
        $dealer->update();

        return redirect()->route('pusat.dealer')->withInfo('Merek berhasil dirubah');
    }

    public function destroy3(Dealer $dealer)
    {
        $dealer->delete();
        return redirect()->route('pusat.dealer')->withDanger('Merek berhasil dihapus');
    }



    public function dataMotor()
    {
        $motors = Motor::where('merek_id', auth()->user()->merek_id)->get();
        $jenis = Jenis::all();
        return view('adminPusat.dataMotor', compact(['motors', 'jenis']));
    }

    public function store4(Request $request)
    {
        $motor = new Motor();
        $motor->gambar = $request->file('gambar')->store('motor');
        $motor->jenis_id = $request->jenis_motor;
        $motor->tipe_motor = $request->tipe_motor;
        $motor->harga_motor = $request->harga_motor;
        $motor->bahan_bakar = $request->bahan_bakar;
        $motor->ban_depan = $request->ban_depan;
        $motor->ban_belakang = $request->ban_belakang;
        $motor->jenis_ban = $request->jenis_ban;
        $motor->kapasitas_mesin = $request->kapasitas_mesin;
        $motor->tenaga_maksimal = $request->tenaga_maksimal;
        $motor->jenis_transmisi = $request->jenis_transmisi;
        $motor->merek_id = auth()->user()->merek_id;
        $motor->save();

        return redirect()->route('pusat.motor')->withInfo('Merek Ditambahkan');
    }

    public function editDataMotor(Motor $motor)
    {
        $jenis = Jenis::all();
        return view('adminPusat.editDataMotor', compact('motor', 'jenis'));
    }
    public function updateDataMotor(Request $request, Motor $motor)
    {
        if ($request['gambar']) {
            Storage::delete($motor['gambar']);
            $motor->gambar = $request->file('gambar')->store('motor');
        }
        $motor->jenis_id = $request->jenis_motor;
        $motor->tipe_motor = $request->tipe_motor;
        $motor->harga_motor = $request->harga_motor;
        $motor->bahan_bakar = $request->bahan_bakar;
        $motor->ban_depan = $request->ban_depan;
        $motor->ban_belakang = $request->ban_belakang;
        $motor->jenis_ban = $request->jenis_ban;
        $motor->kapasitas_mesin = $request->kapasitas_mesin;
        $motor->tenaga_maksimal = $request->tenaga_maksimal;
        $motor->jenis_transmisi = $request->jenis_transmisi;
        $motor->merek_id = auth()->user()->merek_id;
        $motor->update();
        return redirect()->route('pusat.motor')->withInfo('Merek berhasil dirubah');
    }
    public function destroy4(Motor $motor)
    {
        $motor->delete();
        return redirect()->route('pusat.motor')->withDanger('Merek berhasil dihapus');
    }
}

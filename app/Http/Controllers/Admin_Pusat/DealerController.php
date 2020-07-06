<?php

namespace App\Http\Controllers\Admin_Pusat;

use App\Dealer;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DealerController extends Controller
{
    public function userAdminDealer()
    {
        $dealers = Dealer::where('user_id', auth()->user()->id)->get();
        return view('adminPusat.userAdminDealer', compact('dealers'));
    }

    public function store(Request $request)
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

    public function destroy(Dealer $dealer)
    {
        $dealer->delete();
        return redirect()->route('pusat.dealer')->withDanger('Merek berhasil dihapus');
    }

}

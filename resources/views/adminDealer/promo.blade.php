@extends('templateAdminDealer')
@section('main')

<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
        <h3>Daftar Promo Motor   </h3>
        </div>
      
        <div class="title_right">
        <br>
        <br>
        <!-- <div class="col-md-5 col-sm-5  form-group pull-right top_search">
            <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
                <button class="btn btn-default" href="#">Go!</button>
            </span>
            </div>
        </div> -->
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" title="Tambah" style="float : right"><span class="fa fa-plus"></span> Tambah Data
        </button>
        <!-- End Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Promo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="gambar_promo">Gambar Promo </label>
                        <input type="file" class="form-control-file" id="gambar_promo" name="gambar_promo" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label  for="tipe_motor">Tipe Motor</label>
                        <input type="text" class="form-control"  id="tipe_motor" name="tipe_motor" placeholder="Tipe Motor" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="judul_promo">Judul Promo</label>
                        <textarea class="form-control"  id="judul_promo" name="judul_promo" placeholder="Judul Promo"  rows="2"></textarea required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="ket_promo">Keterangan Promo</label>
                        <textarea class="form-control" id="ket_promo" name="ket_promo"  placeholder="Keterangan Promo" rows="4"></textarea required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" href="#">Tambah</button>
            </div>
            </div>
        </div>
        </div>
        <!--End Modal -->

        
        <!--Tabel -->
        <table id="myTable" class="table table-bordered text-center" >
            <thead>
                <tr style="background-color: Gainsboro;">
                <th scope="col" >Gambar Promo</th>
                <th scope="col" >Tipe Motor</th>
                <th scope="col" >Judul Promo</th>
                <th scope="col" >Keterangan Promo</th>
                <th scope="col" ></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><img src="{{asset('img/Promo.jpg')}}"style="width:80px;height:60px;"></td>
                <td style="text-align:left;">Beat Street</td>
                <td style="text-align:left;">Hujan Promo Awal Tahun 2020 Naga Mas Tegal</td>
                <td style="text-align:left;">
                Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah 
                dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang muka yang sangat ringan.
                Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan harga terbaru silakan hubungi kami di nomor berikut 
                Anisa 085615236772
                Dealer Naga Mas Motor Tegal
                jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal</td>
                <td> <a href="{{ route('dealer.promo.edit') }}"><i class='fa fa-edit' style='font-size:25px;color:blue' alt="logo" title="Edit" onclick="return confirm('Yakin Anda ingin mengedit Data ini ?')"></i> </a> <a href=""><i class='fa fa-trash' style='font-size:25px;color:red' title="Hapus" onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')"></a></i> </td>
                </tr>
                </tbody>
        </table>
        <!--End Tabel-->

    </div>
</div>
       

            

@stop
@section('footer')
@stop
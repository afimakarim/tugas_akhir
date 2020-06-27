@extends('templateAdminDealer')
@section('main')

    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                <h3>Daftar Promo Motor </h3>
            </div>

            <br>
            <br>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop"
                    title="Tambah" style="float : right"><span class="fa fa-plus"></span> Tambah Data
            </button>
            <!-- End Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                 role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Promo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post"
                                  enctype="multipart/form-data">
                                <div class="form-group has-feedback{{ $errors->has('gambar') ? ' has-error' : '' }}">
                                    <label for="gambar_promo">Gambar Promo </label>
                                    <input type="file" class="form-control-file" id="gambar_promo" name="gambar"
                                           required>
                                    @if ($errors->has('gambar'))
                                        <span class="help-block">
                                        <p> {{ $errors->first('gambar') }} </p>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback{{ $errors->has('tipe_motor') ? ' has-error' : '' }}">
                                    <label for="tipe_motor">Tipe Motor</label>
                                    <select class="form-control" id="" name="tipe_id">
                                        <option value="" selected>-- Pilih Tipe Motor --</option>
{{--                                        @foreach($motors as $motor)--}}
{{--                                            <option value="{{ $motor->id }}">{{ $motor->tipe_motor }}</option>--}}
{{--                                        @endforeach--}}
                                    </select>
                                </div>
                                <div class="form-group has-feedback{{ $errors->has('judul') ? ' has-error' : '' }}">
                                    <label for="judul_promo">Judul Promo</label>
                                    <textarea id="" cols="30" rows="5" class="form-control" name="judul" placeholder="Judul Promo" required></textarea>
                                    @if ($errors->has('judul'))
                                        <span class="help-block">
                                            <p> {{ $errors->first('judul') }} </p>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback{{ $errors->has('ket_promo') ? ' has-error' : '' }}">
                                    <label for="keterangan_promo">Keterangan Promo</label>
                                    <textarea id="" cols="30" rows="5" class="form-control" name="ket_promo" placeholder="Keterangan Promo" required></textarea>
                                    @if ($errors->has('ket_promo'))
                                        <span class="help-block">
                                            <p> {{ $errors->first('ket_promo') }} </p>
                                        </span>
                                    @endif
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary" value="save">Tambah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Modal -->


            <!--Tabel -->
            <table id="myTable" class="table table-bordered text-center">
                <thead>
                <tr style="background-color: Gainsboro;">
                    <th scope="col">Gambar Promo</th>
                    <th scope="col">Tipe Motor</th>
                    <th scope="col">Judul Promo</th>
                    <th scope="col">Keterangan Promo</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img src="{{asset('img/Promo.jpg')}}" style="width:80px;height:60px;"></td>
                    <td style="text-align:left;">Beat Street</td>
                    <td style="text-align:left;">Hujan Promo Awal Tahun 2020 Naga Mas Tegal</td>
                    <td style="text-align:left;">
                        Dapatkan All New Honda Beat mu Sekarang juga, cukup dengan uang muka 600rb Rupiah
                        dengan angsuran 667rb setiap bulannya ! Kapan lagi nih bisa bawa pulang motor baru dengan uang
                        muka yang sangat ringan.
                        Untuk harga pada brosur, masih bisa di nego/mendapat potongan harga. Untuk mendapat potongan
                        harga terbaru silakan hubungi kami di nomor berikut
                        Anisa 085615236772
                        Dealer Naga Mas Motor Tegal
                        jl. AR. Hakim no.24, Randugunting, Tegal Barat, Kota Tegal
                    </td>
                    <td><a href=""><i class='fa fa-edit'
                                                                      style='font-size:25px;color:blue' alt="logo"
                                                                      title="Edit"
                                                                      onclick="return confirm('Yakin Anda ingin mengedit Data ini ?')"></i>
                        </a> <a href=""><i class='fa fa-trash' style='font-size:25px;color:red' title="Hapus"
                                           onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')"></a></i>
                    </td>
                </tr>
                </tbody>
            </table>
            <!--End Tabel-->

        </div>
    </div>




@stop
@section('footer')
@stop
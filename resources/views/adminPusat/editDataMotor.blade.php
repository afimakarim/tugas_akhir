@extends('templateAdminPusat')
@section('main')
<div class="right_col" role="main">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Form Edit Dealer</h2>
                        <div class="clearfix"></div>
                    </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar_motor" >Gambar Motor</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" class="form-control-file" id="gambar_dealer" name="gambar_dealer" required oninvalid="this.setCustomValidity('Gambar Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="jenis_motor">Jenis Motor</label>
                                <div class="col-md-6 col-sm-6 ">
                                <select class="form-control"  id="jenis_motor" name="jenis_motor" >
                                    <option>Skuter Matik</option>
                                    <option>Bebek</option>
                                    <option>Sport</option>
                                </select>
                                </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipe_motor">Tipe Motor</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="tipe_motor" name="tipe_motor" placeholder="Tipe Motor" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="harga_motor">Harga Motor</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="harga_motor" name="harga_motor" placeholder="Harga Motor" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="bahan_bakar">Bahan Bakar</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar" placeholder="Bahan Bakar" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ban_depan">Ban Depan</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="ban_depan" name="ban_depan" placeholder="Ban Depan" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="ban_belakang">Ban Belakang</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="ban_belakang" name="ban_belakang" placeholder="Ban Depan" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="jenis_ban">Jenis Ban</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="jenis_ban" name="jenis_ban" placeholder="Jenis Ban" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="kapasitas_mesin">Kapasitas Mesin</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="kapasitas_mesin" name="kapasitas_mesin" placeholder="Kapasitas Mesin" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="tenaga_maksimal">Tenaga Maksimal</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="tenaga_maksimal" name="tenaga_maksimal" placeholder="Tenaga Maksimal" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="jenis_transmisi">Jenis Transmisi</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" name="jenis_transmisi" placeholder="Jenis Transmisi" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="#"><button class="btn btn-primary" type="button">Simpan</button></a>
                                    <a href="{{route('pusat.motor')}}"><button class="btn btn-danger" type="button">Kembali</button></a>
                                </div>
                            </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('footer')
@stop
@extends('templateAdminDealer')
@section('main')
<div class="right_col" role="main">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Form Edit Promo Motor</h2>
                        <div class="clearfix"></div>
                    </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar_promo">Gambar Promo</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" class="form-control-file" id="gambar_promo" name="gambar_promo" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipe_motor" >Tipe Motor</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="tipe_motor" name="tipe_motor" placeholder="Tipe Motor" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"for="judul_promo">Judul Promo</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea class="form-control"   id="judul_promo" name="judul_promo" placeholder="Judul Promo" rows="2" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"for="ket_promo">Keterangan Promo</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea class="form-control"  id="ket_promo" name="ket_promo"  placeholder="Keterangan Promo" rows="4" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="#"><button class="btn btn-primary" type="button">Simpan</button></a>
                                    <a href="{{ route('dealer.promo') }}"><button class="btn btn-danger" type="button">Kembali</button></a>
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
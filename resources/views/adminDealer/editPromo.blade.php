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
                    <form action="" enctype="multipart/form-data" method="post"id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar_motor" >Gambar Motor</label>
                            <div class="col-md-6 col-sm-6 ">
                                <img src="{{ asset("storage/$promo->gambar") }}" alt="" class="" height="128">
                                <input type="file" class="form-control" id="gambar_dealer" name="gambar" placeholder="Gambar Admin Dealer" value="">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="tipe_motor">Tipe Motor</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="tipe_motor" name="tipe_motor" placeholder="Tipe Motor" value="">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"for="">Judul Promo</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea id="" cols="30" rows="5" class="form-control" name="judul" placeholder="Judul Promo" ></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align"for="">Keterangan Promo</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea id="" cols="30" rows="5" class="form-control" name="ket_promo" placeholder="Keterangan Promo" ></textarea>
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
@extends('templateAdminDealer')
@section('main')
<div class="right_col" role="main">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Form Edit Profile Dealer</h2>
                        <div class="clearfix"></div>
                    </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar_profil">Gambar Dealer</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" class="form-control-file" id="gambar_profil" name="gambar_profil" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <!-- <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="username_dealer">Username</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="username_dealer" name="username_dealer" placeholder="Username Dealer" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div> -->
                        <!-- <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="dealer" >Dealer</label>
                                <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control"  id="dealer" name="dealer">
                                            <option>Honda</option>
                                            <option>Yamaha</option>
                                            <option>Suzuki</option>
                                            <option>Kawasaki</option>
                                        </select>
                                </div>
                        </div> -->
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="nama_dealer">Nama Dealer</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="nama_dealer" name="nama_dealer" placeholder="Nama Dealer" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"for="alamat_dealer">Alamat Dealer</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea class="form-control"  id="alamat_dealer" name="alamat_dealer" placeholder="Alamat Dealer" rows="3" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="no_telepone">No Telepone</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control" id="no_telepone" name="no_telepone" placeholder="No Telepone"required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"for="ket_Dealer">Keterangan Dealer</label>
                            <div class="col-md-6 col-sm-6 ">
                                <textarea class="form-control"  id="ket_dealer" name="ket_dealer"  placeholder="Keterangan Dealer" rows="3" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="#"><button class="btn btn-primary" type="button">Simpan</button></a>
                                    <a href="{{ route('dealer.profile') }}"><button class="btn btn-danger" type="button">Kembali</button></a>
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
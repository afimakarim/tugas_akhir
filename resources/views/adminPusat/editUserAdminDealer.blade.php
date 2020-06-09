@extends('templateAdminPusat')
@section('main')
<div class="right_col" role="main">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Form Edit User Dealer</h2>
                        <div class="clearfix"></div>
                    </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar_dealer">Gambar</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" class="form-control-file" id="gambar_dealer" name="gambar_dealer" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"for="email_dealer">Email</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control"  id="email_dealer" name="email_dealer" placeholder="Email"  required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"for="username_dealer">Username</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control"  id="username_dealer" name="username_dealer" placeholder="Username"  required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"for="password_dealer">Password Dealer</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control"  id="password_dealer" name="password_dealer" placeholder="Password"  required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="#"><button class="btn btn-primary" type="button">Simpan</button></a>
                                    <a href="{{route('pusat.dealer')}}"><button class="btn btn-danger" type="button">Kembali</button></a>
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
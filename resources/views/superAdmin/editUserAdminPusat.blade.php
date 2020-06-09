@extends('templateSuperAdmin')
@section('main')
<div class="right_col" role="main">
    <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                    <h2>Form Edit User</h2>
                        <div class="clearfix"></div>
                    </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar_pusat">Gambar</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="file" class="form-control-file" id="gambar_pusat" name="gambar_pusat" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="merek">Merek Motor</label>
                                <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control"  id="merek" name="merek">
                                            <option value="">--Pilih Merek Motor--</option>
                                            <option>Honda</option>
                                            <option>Yamaha</option>
                                            <option>Suzuki</option>
                                            <option>Kawasaki</option>
                                        </select>
                                </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email_pusat">Email</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="email" class="form-control" id="email_pusat" name="email_pusat" placeholder="Email" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"for="username_pusat">Username</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input  class="form-control"  id="username_pusat" name="username_pusat" placeholder="Username"  required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align"for="password_pusat">Password</label>
                            <div class="col-md-6 col-sm-6 ">
                                <input type="text" class="form-control"  id="password_pusat" name="password_pusat" placeholder="Password"  required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        
                        <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <a href="#"><button class="btn btn-primary" type="button">Simpan</button></a>
                                    <a href="{{ route('admin.pusat') }}"><button class="btn btn-danger" type="button">Kembali</button></a>
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
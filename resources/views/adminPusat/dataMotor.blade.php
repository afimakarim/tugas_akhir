@extends('templateAdminPusat')
@section('main')

<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
        <h3>Daftar Motor   </h3>
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
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Motor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="gambar_motor">Gambar Motor </label>
                        <input type="file" class="form-control-file" id="gambar_motor" name="gambar_motor" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="jenis_motor">Jenis Motor</label>
                        <select class="form-control"  id="jenis_motor" name="jenis_motor">
                        <option>Skuter Matik</option>
                        <option>Bebek</option>
                        <option>Sport</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tipe_motor">Tipe Motor</label>
                        <input type="text" class="form-control" id="tipe_motor" name="tipe_motor" placeholder="Tipe Motor" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="harga_motor">Harga Motor</label>
                        <input type="text" class="form-control" id="harga_motor" name="harga_motor" placeholder="Harga Motor" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="bahan_bakar">Jenis Bahan Bakar</label>
                        <input type="text" class="form-control" id="bahan_bakar" name="bahan_bakar" placeholder="Bahan Bakar" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="ban_depan">Ban Depan</label>
                        <input type="text" class="form-control" id="ban_depan" name="ban_depan" placeholder="Ban Depan" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="ban_belakang">Ban Belakang</label>
                        <input type="text" class="form-control" id="ban_belakang" name="ban_belakang" placeholder="Ban Belakang" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="jenis_ban">Jenis Ban</label>
                        <input type="text" class="form-control" id="jenis_ban" name="jenis_ban" placeholder="Jenis Ban" required oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="kapasitas_mesin">Kapasitas Mesin</label>
                        <input type="text" class="form-control" id="kapasitas_mesin" name="kapasitas_mesin" placeholder="Kapasitas Mesin" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="tenaga_maksimal">Tenaga Maksimal</label>
                        <input type="text" class="form-control" id="tenaga_maksimal" name="tenaga_maksimal" placeholder="Tenaga Maksimal" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="jenis_transmisi">Jenis Trasnmisi</label>
                        <input type="text" class="form-control" id="jenis_transmisi" name="jenis_transmisi" placeholder="Jenis Transmisi" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
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
                <th scope="col" >Gambar Motor</th>
                <th scope="col" >Jenis Motor</th>
                <th scope="col" >Tipe Motor</th>
                <th scope="col" >Harga Motor</th>
                <th scope="col" >Jenis Bahan Bakar</th>
                <th scope="col" >Ban Depan</th>
                <th scope="col" >Ban Belakang</th>
                <th scope="col" >Jenis Ban</th>
                <th scope="col" >Kapasitas Mesin</th>
                <th scope="col" >Tenaga Maksimal</th>
                <th scope="col" >Jenis Transmisi</th>

                <th scope="col" ></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><img src="{{asset('img/beat.jpg')}}"style="width:80px;height:60px;"></td>
                <td>Skuter Matik</td>
                <td>Beat Street</td>
                <td>17.670.000</td>
                <td>Bensin</td>
                <td>80/90 R14</td>
                <td>80/90 R14</td>
                <td>Radial, Tubless</td>
                <td>110 CC</td>
                <td>8,89</td>
                <td>Naga Mas</td>
                <td> <a href="{{route('pusat.motor.edit')}}"><i class='fa fa-edit' style='font-size:25px;color:blue' alt="logo" title="Edit" onclick="return confirm('Yakin Anda ingin mengedit Data ini ?')"></i> </a> <a href=""><i class='fa fa-trash' style='font-size:25px;color:red' title="Hapus" onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')"></a></i> </td>
                </tr>
                </tbody>
        </table>
        <!--End Tabel-->

    </div>
</div>
       

            

@stop
@section('footer')
@stop
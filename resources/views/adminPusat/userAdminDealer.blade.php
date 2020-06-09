@extends('templateAdminPusat')
@section('main')

<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
        <h3>User Admin Dealer   </h3>
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
                <h5 class="modal-title" id="staticBackdropLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="gambar_dealer">Gambar</label>
                        <input type="file" class="form-control-file" id="gambar_dealer" name="gambar_dealer" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="email_dealer">Email </label>
                        <input type="email" class="form-control"  id="email_dealer" name="email_dealer" placeholder="Email" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="username_dealer">Username</label>
                        <input type="text" class="form-control"  id="username_dealer" name="username_dealer" placeholder="Username" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="password_dealer">Password Dealer</label>
                        <input type="text" class="form-control" id="password_dealer" name="password_dealer" placeholder="Password" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')">
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
                <th scope="col" >Gambar Dealer</th>
                <th scope="col" >Email</th>
                <th scope="col" >Username</th>
                <th scope="col" ></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><img src="{{asset('img/dealerHonda2.jpg')}}"style="width:80px;height:60px;"></td>
                <td>nagamas1@gmail.com</td>
                <td>naga mas 1</td>
                <td> <a href="{{ url('editUserAdminPusat') }}"><i class='fa fa-edit' style='font-size:25px;color:blue' alt="logo" title="Edit" onclick="return confirm('Yakin Anda ingin mengedit Data ini ?')"></i> </a> <a href=""><i class='fa fa-trash' style='font-size:25px;color:red' title="Hapus" onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')"></a></i> </td>
                </tr>
                <tr>
                <td><img src="{{asset('img/dealerHonda.jpg')}}"style="width:80px;height:60px;"></td>
                <td>nagamas2@gmail.com</td>
                <td>naga mas 2</td>
                <td> <a href= "{{route('pusat.dealer.edit')}}"><i class='fa fa-edit' style='font-size:25px;color:blue' alt="logo" title="Edit" onclick="return confirm('Yakin Anda ingin mengedit Data ini ?')"></i> </a> <a href=""><i class='fa fa-trash' style='font-size:25px;color:red' title="Hapus" onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')"></a></i> </td>
                </tr>
            </tbody>
        </table>
        <!--End Tabel-->

    </div>
</div>
       

            

@stop
@section('footer')
@stop
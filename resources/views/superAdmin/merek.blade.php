@extends('templateSuperAdmin')
@section('main')

    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                @include('layouts.partials._alerts')
                <h3>Merek Sepeda Motor </h3>
            </div>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Merek</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.merek.store') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="">Gambar Merek</label>
                                    <input type="file" class="form-control" id="gambar_merek" name="gambar"
                                           placeholder="gambar" required>
                                </div>

                                <div class="form-group ">
                                    <label for="name">Nama Merek</label>
                                    <input type="text" class="form-control" id="" name="name"
                                           placeholder="Nama Merek" required>
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
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Merek</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($mereks as $merek)
                    <tr>
{{--                        <td>{{ $merek->gambar }}</td>--}}
                        <td><img src="{{ asset("storage/$merek->gambar") }}" style="height: 100px; width: auto" alt=""></td>
                        <td>{{ $merek->name }}</td>
                        <td><a href="{{ route('admin.merek.edit', $merek) }}"onclick="return confirm('Yakin Anda ingin menngedit Data ini ?')"><i class='fa fa-edit'
                                                                                 style='font-size:25px;color:blue'
                                                                                 alt="logo" title="Edit"></i> </a>
                            <a href="{{ route('admin.merek.delete', $merek) }}"onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')"><i class='fa fa-trash'
                                                                                                                                                    style='font-size:25px;color:red'
                                                                                                                                                    title="Hapus"> </i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <!--End Tabel-->

        </div>
    </div>




@stop
@section('footer')
@stop
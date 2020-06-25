@extends('templateSuperAdmin')
@section('main')

    <div class="right_col" role="main">
        <div class="page-title">
            <div class="title_left">
                @include('layouts.partials._alerts')
                <h3>User Admin Pusat </h3>
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
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah User</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.pusat.store2') }}" method="post"
                                  enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group has-feedback{{ $errors->has('gambar') ? ' has-error' : '' }}">
                                    <label for="">Gambar</label>
                                    {{--                                    <input type="file" class="form-control-file" id="gambar_merek" name="gambar_merek">--}}
                                    <input type="file" class="form-control" id="gambar_merek" name="gambar"
                                           placeholder="gambar" required>
                                    @if ($errors->has('gambar'))
                                        <span class="help-block">
                                            <p> {{ $errors->first('gambar') }} </p>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="merek">Merek Motor</label>
                                    <select class="form-control" id="merek" name="merek_id">
                                        <option value="">--Pilih Merek Motor--</option>
                                        @foreach($mereks as $merek)
                                            <option value="{{ $merek->id }}">{{ $merek->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name">Username</label>
                                    <input type="text" class="form-control" id="" name="name"
                                           placeholder="Nama Admin Pusat" required>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <p> {{ $errors->first('name') }} </p>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" id="" name="email"
                                           placeholder="Email" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <p> {{ $errors->first('email') }} </p>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" id="" name="password"
                                           data-toggle="password"
                                           placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <p> {{ $errors->first('password') }} </p>
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
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Admin Pusat</th>
                    <th scope="col">Merek Motor</th>
                    <th scope="col">Email</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><img src="{{ asset("storage/$user->gambar") }}" style="height: 100px; width: auto" alt="">
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->merek->name}}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ route('admin.pusat.edit', $user) }}"
                               onclick="return confirm('Yakin Anda ingin mengedit Data ini ?')"><i class='fa fa-edit'
                                                                                                   style='font-size:25px;color:blue'
                                                                                                   alt="logo"
                                                                                                   title="Edit"></i></a>
                            <a href="{{ route('admin.pusat.delete', $user) }}"
                               onclick="return confirm('Yakin Anda ingin menghapus Data ini ?')"><i class='fa fa-trash'
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
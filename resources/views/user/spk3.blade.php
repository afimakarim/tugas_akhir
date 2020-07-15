@extends('templateUsers')
@section('main')
    <!-- blog part start-->
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-xl-9">
                    <div class="cta_text text-center">
                        <h5>Welcome</h5>
                        <h5>Sistem Pendukung Keputusan</h5>
                        <h2>Konsultasikan Motor Impian Anda</h2>
                        <p>Silahkan Pilih Tingkat Kepentingan Kriteria - kriteria
                            Sepeda Motor dibawah ini sesuai Kebutuhan Anda</p>
                        <form>
                            <div class="input-group">
                                <select class="form-control custom_select3">
                                    <option value=""  disabled selected > -- Harga Motor -- </option>
                                    <option value="1">Sangat Penting</option>
                                    <option value="2">Penting</option>
                                    <option value="3">Cukup Penting</option>
                                    <option value="4">Tidak Penting</option>
                                    <option value="4">Sangat Tidak Penting</option>
                                </select>
                            </div><br>
                            <div class="input-group">
                                <select class="form-control custom_select3">
                                    <option value=""  disabled selected > -- Kapasitas Tengki -- </option>
                                    <option value="1">Sangat Penting</option>
                                    <option value="2">Penting</option>
                                    <option value="3">Cukup Penting</option>
                                    <option value="4">Tidak Penting</option>
                                    <option value="4">Sangat Tidak Penting</option>
                                </select>
                            </div><br>
                            <div class="input-group">
                                <select class="form-control custom_select3">
                                    <option value=""  disabled selected > -- Model/Desain Motor -- </option>
                                    <option value="1">Sangat Penting</option>
                                    <option value="2">Penting</option>
                                    <option value="3">Cukup Penting</option>
                                    <option value="4">Tidak Penting</option>
                                    <option value="4">Sangat Tidak Penting</option>
                                </select>
                            </div><br>
                            <div class="input-group">
                                <select class="form-control custom_select3">
                                    <option value=""  disabled selected > -- Kapasitas Mesin -- </option>
                                    <option value="1">Sangat Penting</option>
                                    <option value="2">Penting</option>
                                    <option value="3">Cukup Penting</option>
                                    <option value="4">Tidak Penting</option>
                                    <option value="4">Sangat Tidak Penting</option>
                                </select>
                            </div><br>
                            <a href="{{ route('user.spk.hasil') }}" class="genric-btn primary circle">Pilih</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
@section('footerUser')
@stop


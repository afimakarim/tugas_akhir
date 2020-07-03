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
                        <p>Pilih Merek dan Jenis Motor</p>
                        <form>
                            <div class="input-group">
                                <select class="form-control custom_select3">
                                    <option value=""  disabled selected > -- Merek Motor -- </option>
                                    <option value="1">Honda</option>
                                    <option value="2">Yamaha</option>
                                    <option value="3">Suzuki</option>
                                    <option value="4">Kawasaki</option>
                                </select>
                            </div><br>
                            <div class="input-group">
                                <select class="form-control custom_select3">
                                    <option value=""  disabled selected > -- Jenis Motor -- </option>
                                    <option value="1">Matic</option>
                                    <option value="2">Bebek</option>
                                    <option value="3">Sport</option>
                                </select>
                            </div><br>
                            <a href="{{ route('user.spk3') }}" class="genric-btn primary circle">Pilih</a>
                        </form>
                            </div>
                            </div>
                    </div>
                </div>
    </section>

@stop
@section('footerUser')
@stop


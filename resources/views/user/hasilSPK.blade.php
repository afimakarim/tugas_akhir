@extends('templateUsers')
@section('main')
    <!-- blog part start-->
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8 col-xl-9">
                    <div class="cta_text text-center">

                        <h5>Kalkulasi Perhitungan Selesai</h5>
                        <h2>Daftar Sepeda Motor Yang Disarankan</h2>
                        <h3 class="text-left">Dari semua Alternatif Sepeda Motor yang disarankan. Yang mempunyai nilai Tertinggi sebagai alternatif paling
                            direkomendasikan adalah <a href="" style="color: yellow"> Beat Street </a></h3>

                    </div>
                    <table id="myTable" class="table table-bordered text-center" >
                        <thead>
                        <tr style="background-color: Gainsboro;">
                            <th>No</th>
                            <th>Gambar Motor</th>
                            <th>Merek Motor</th>
                            <th>Tipe Motor</th>
                            <th>Nilai Akhir Bobot</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>
                                <img src="img/beat.jpg" style="height: 100px; width: auto" alt="">
                            </td>
                            <td>
                                Honda
                            </td>
                            <td>
                                Beat Street
                            </td>
                            <td>
                                0,125
                            </td>
                            <td>
                                <a href="{{ route('user.detailMotor') }}" class="genric-btn primary-border circle arrow">Lihat Rincian<span
                                            class="lnr lnr-arrow-right"></span></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <img src="img/beat.jpg" style="height: 100px; width: auto" alt="">
                            </td>
                            <td>
                                Honda
                            </td>
                            <td>
                                Beat Street
                            </td>
                            <td>
                                0,125
                            </td>
                            <td>
                                <a href="#" class="genric-btn primary-border circle arrow">Lihat Rincian<span
                                            class="lnr lnr-arrow-right"></span></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </section>

@stop
@section('footerUser')
@stop


@extends('templateUsers')
@section('main')

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Konsultasikan Motor    Impianmu</h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- use sasu part end-->
    <section class="popular_place padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="section_tittle text-center">
                        <img src="template/img/motorr.png" style="width: 100px; height: auto" alt="logo">
                        <h2>Selamat Datang </h2>
                        <p>"Website ini bertujuan untuk membantu calon pembeli sepeda motor roda dua dalam menentukan pilihan
                            sesuai dengan kemampuan dan keinginannya, serta merekomendasikan sepeda motor roda yang cocok
                            dengan cara mengisi pertanyaan berdasarkan kriteria yang terdapat pada menu <a href="" style="color: #0b97c4">SPK Pembelian Sepeda Motor</a>
                            dan kemudian sistem akan memberikan alternatif terbaik yang sesuai dengan apa yang di inputkan oleh konsumen"</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="card-deck">
                    <div class="card">
                        <img src="{{asset('img/honda.png')}}" class="card-img-top"
                             style="height: 200px; width: auto" alt="...">
                        <div class="card-footer">
                            <a href="www.google.com"><h5 class="text-center">HONDA</h5></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset('img/yamaha.png')}}" class="card-img-top"
                             style="height: 200px; width: auto" alt="...">
                        <div class="card-footer">
                            <a href="www.google.com"><h5 class="text-center">YAMAHA</h5></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset('img/suzuki.png')}}" class="card-img-top"
                             style="height: 200px; width: auto" alt="...">
                        <div class="card-footer">
                            <a href="www.google.com"><h5 class="text-center">SUZUKI</h5></a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="{{asset('img/kawasaki.png')}}" class="card-img-top"
                             style="height: 200px; width: auto" alt="...">
                        <div class="card-footer">
                            <a href="www.google.com"><h5 class="text-center">KAWASAKI</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
@section('footerUser')
@stop


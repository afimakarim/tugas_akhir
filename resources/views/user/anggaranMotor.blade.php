@extends('templateUsers')
@section('main')



    <!-- blog part start-->
    <section class="blog_part padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section_tittle">
                        <h2>Daftar Sepeda Kurang Dari 20 Juta</h2>
                        <br>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img href="" src="img/beat.jpg" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>Honda Beat</h2>
                            <p>Rp. 17.670.000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img href="" src="img/asd.jfif" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>Supra X 125</h2>
                            <p>Rp. 20.670.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <!-- blog part end-->
    <section>
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
    </section>

@stop
@section('footerUser')
@stop


@extends('templateUsers')
@section('main')



    <!-- blog part start-->
    <section class="blog_part padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section_tittle">
                        <h2>Daftar Dealer Sepeda Motor Di Kota Tegal</h2>
                        <br>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="template/img/dealerHonda.jpg" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>Naga Mas Motor</h2>
                            <p>Jalan AR.Hakim No.18 Kel Randugunting
                                Kecamatan Tegal Selatan...<a href="{{ route('user.detailDealer') }}" style="color: #0b97c4">Detail</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="template/img/dealerYamaha.jpg" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>Yamaha Agung</h2>
                            <p>Jalan AR.Hakim No.18 Kel Randugunting
                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="template/img/dealerKawasaki.jpg" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>Kawasaki Tegal</h2>
                            <p>Jalan AR.Hakim No.18 Kel Randugunting
                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="template/img/dealerHonda2.jpg" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>Langgan Motor</h2>
                            <p>Jalan AR.Hakim No.18 Kel Randugunting
                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="template/img/dealerYamaha.jpg" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>Bahana Tegal</h2>
                            <p>Jalan AR.Hakim No.18 Kel Randugunting
                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="template/img/dealerSuzuki.jpg" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>Indo Sarana Tegal</h2>
                            <p>Jalan AR.Hakim No.18 Kel Randugunting
                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="template/img/dealerYamaha.jpg" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>Orion Jaya Motor</h2>
                            <p>Jalan AR.Hakim No.18 Kel Randugunting
                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="template/img/dealerKawasaki.jpg" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>Kawasaki Tegal</h2>
                            <p>Jalan AR.Hakim No.18 Kel Randugunting
                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_blog_part">
                        <img src="template/img/dealerHonda2.jpg" style="height: 200px; height: 200px" alt="">
                        <div class="blog_text">
                            <h2>Astra Motor</h2>
                            <p>Jalan AR.Hakim No.18 Kel Randugunting
                                Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>

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


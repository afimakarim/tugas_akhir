@extends('templateUsers')
@section('main')

    <!-- banner part start-->
    <section class="breadcrumb_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="" >
                            <h1 style="color: #ffffff">Temukan Motor Impian Anda</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- banner part start-->
    <section class="search_your_country">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="search_form">
                        <form action="#">
                            <div class="form-row">
                                <div class="col-lg-9">
                                    <div class="search_form_iner">
                                        <select class="custom_select" id="inlineFormCustomSelect">
                                            <option value=""  disabled selected>-- Merek Motor--</option>
                                            <option value="1">Honda</option>
                                            <option value="2">Yamaha</option>
                                            <option value="3">Suzuki</option>
                                            <option value="3">Kawasaki</option>
                                        </select>
                                        <select class="custom_select" id="inlineFormCustomSelect1">
                                            <option value=""  disabled selected>-- Tipe Motor --</option>
                                            <option value="1">Beat</option>
                                            <option value="2">Scoopy</option>
                                            <option value="3">Supra</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <a  href="{{ route('user.detailMotor') }}" class="search_btn">search</a>
                                </div>
                            </div>
                        </form>
                        <br>
                        <form action="#">
                            <div class="form-row">
                                <div class="col-lg-9">
                                    <div class="search_form_iner">
                                        <select class="custom_select" id="inlineFormCustomSelect">
                                            <option value=""  disabled selected > -- Pilih Anggaran -- </option>
                                            <option value="1">< Kurang Dari 20 Juta</option>
                                            <option value="2">< Kurang Dari 25 Juta</option>
                                            <option value="3">< Kurang Dari 30 Juta</option>
                                            <option value="4">> Lebih Dari 30 Juta</option>
                                        </select>
                                        <div style="padding-left: 15px">
                                            <a href="{{ route('user.anggaranMotor') }}" class="search_btn">search</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- use sasu part end-->
            <!-- blog part start-->
            <section class="blog_part padding_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="section_tittle">
                                <h2>Dealer Sepeda Motor Di Kota Tegal</h2>
                                <br>
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
                                        Kecamatan Tegal Selatan...<a href="" style="color: #0b97c4">Detail</a></p>
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
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="genric-btn success large">Lihat Selengkapnya</a>
                </div>
            </section>
        <br>
        <br>
        <br>
        <br>
            <!-- blog part end-->


@stop
@section('footerUser')
@stop


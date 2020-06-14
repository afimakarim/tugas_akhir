@extends('templateUser')
@section('main')

<div id="home">
    <div id="wrapper">
        <div class="row justify-content-md-center">
            <div class="col col-sm-12 color-primary kotak" >
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 img-carousel" src="{{asset   ('img/halo.png')}}" style="height:700px; width:auto;"alt="First slide">
                        </div>
                        <!-- <div class="carousel-item">
                            <img class="d-block w-100 img-carousel" src="{{asset   ('public/img/futsal2.jpg')}}" style="height:500px; width:auto;"alt="First slide"alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-carousel" src="{{asset   ('public/img/futsal3.jpg')}}" style="height:500px; width:auto;"alt="First slide"alt="Third slide">
                        </div> -->
                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> -->
                </div>
                    <h1 class="text-center">Selamat Datang</h2>
                    <br >
                    <br >
                    <h3 class="text-center">
                    "Website ini bertujuan untuk membantu calon pembeli sepeda motor roda dua dalam menentukan pilihan 
                    sesuai dengan kemampuan dan keinginannya, serta merekomendasikan sepeda motor roda yang cocok
                    dengan cara mengisi pertanyaan berdasarkan kriteria yang terdapat pada menu SPK Pembelian Sepeda Motor
                    dan kemudian sistem akan memberikan alternatif terbaik yang sesuai dengan apa yang di inputkan oleh konsumen"<br>
                    </h3>
            </div>
        </div>
    </div>
</div>
@stop 


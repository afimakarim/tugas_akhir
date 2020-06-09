@extends('templateAdminDealer')
@section('main')

<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
        <h3>Profile Dealer   </h3>
        </div>
        
        <!--Tabel -->
        <table class="table table-bordered text-center" >
            <thead>
                <tr style="background-color: Gainsboro;">
                <th scope="col" >Gambar Dealer</th>
                <th scope="col" >Email</th>
                <th scope="col" >Nama Dealer</th>
                <th scope="col" >Alamat Dealer</th>
                <th scope="col" >No Telepone</th>
                <th scope="col" >Keterangan Dealer</th>
                <th scope="col" ></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><img src="{{asset('img/dealerHonda2.jpg')}}"style="width:80px;height:60px;"></td>
                <td> nagamas1@gmail.com</td>
                <td> Naga Mas 1 Ar Hakim</td>
                <td style="text-align:left;">Jalan AR.Hakim No.18 Kel Randugunting Kecamatan Tegal Selatan</td>
                <td >085714256337</td>
                <td style="text-align:left;">Honda Naga Mas Motor adalah salah satu dealer Honda populer di Tegal. 
                    Dealer ini terletak di Jl. A. Yani No. 19, Tegal dan Anda bisa mengunjunginya untuk 
                    test drive, mendapatkan penawaran terbaik.</td>
                <td> <a href="{{ route('dealer.profile.edit') }}"><i class='fa fa-edit' style='font-size:25px;color:blue' alt="logo" title="Edit" onclick="return confirm('Yakin Anda ingin mengedit Data ini ?')"></i> </a> 
                </tr>
                </tbody>
        </table>
        <!--End Tabel-->

    </div>
</div>
       

            

@stop
@section('footer')
@stop
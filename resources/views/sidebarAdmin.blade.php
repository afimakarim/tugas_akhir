<div class="main_container">
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><h6 style="margin-left: 8px;margin-top : 13px">SPK Motor Roda Dua</h6></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
            <img src="{{asset('img/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
            <span>Welcome,</span>
            <h2>Admin</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
            <ul class="nav side-menu">
                <li><a href="{{ url('admin') }}"><i class="fa fa-home"></i> Home </a></li>
                <li><a><i class="fa fa-motorcycle"></i> Data Motor <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="{{ url('daftarDealerAdmin') }}">Input Dealer</a></li>
                    <li><a href="{{ url('daftarMotorAdmin') }}">Input Motor</a></li>
                    <li><a href="{{ url('daftarPromoAdmin') }}">Input Promo</a></li>
                </ul>
                </li>
                <li><a><i class="fa fa-calculator"></i> SPK Weighted Product<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a>Input Data<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{ url('nilaiAdmin') }}">Nilai</a>
                        </li>
                        <li><a href="{{ url('kriteriaAdmin') }}">Kriteria</a>
                        </li>
                        <li><a href="{{ url('alternatifAdmin') }}">Alternatif</a>
                        </li>
                        </ul>
                    </li>
                    <li><a>Analisa Data<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                        <li><a href="{{ url('bobotAdmin') }}">Bobot</a>
                        </li>
                        <li><a href="{{ url('perangkinganAdmin') }}">Perangkingan</a>
                        </li>
                        </ul>
                    </li>
                </ul>
                </li>  
                <li><a href="{{ url('pengunjungAdmin') }}"><i class="fa fa-list-alt"></i> Pengunjung SPK </a></li>
                <li><a href="{{ url('userAdmin') }}"><i class="fa fa-users"></i> Users </span></a>
            </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        
        </div>
    </div>

    <!-- top navigation -->
    <div class="top_nav">
        <div class="nav_menu">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <nav class="nav navbar-nav">
            <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('img/img.jpg')}}" alt="">Admin
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
                </li>
            </ul>
            </nav>
        </div>
    </div>
    
    <!-- /top navigation -->
   
        <!-- footer content -->
        <!-- <footer>
          <div class="pull-right">
            <p>&copy; 2020 | Sistem Pendukung Keputusan | Afi Makarim Mudhofar </p> <a href="#"></a>
          </div>
          <div class="clearfix"></div>
        </footer> -->
        <!-- /footer content -->
      
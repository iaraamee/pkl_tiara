<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Administrator</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="/pluto/images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="/pluto/css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="/pluto/style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="/pluto/css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="/pluto/css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="/pluto/css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="/pluto/css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="/pluto/css/custom.css" />
      @stack('css')
      <!-- IziToast -->
      <link rel="stylesheet" href="/notif/dist/css/iziToast.min.css">
      <script src="/notif/dist/js/iziToast.min.js" type="text/javascript"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="/img/logo.png" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="/img/logo.png" alt="#" /></div>
                        <div class="user_info">
                           <h6>{{Auth::user()->name}}</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>Administrator</h4>
                  <ul class="list-unstyled components">
                     <li><a href="/admin"><i class="fa fa-dashboard white_color"></i> <span>Beranda</span></a></li>
                     <li><a href="/admin/data/user"><i class="fa fa-users white_color"></i> <span>Data User</span></a></li>
                     <li><a href="/admin/data/suratmasuk"><i class="fa fa-users white_color"></i> <span>Surat Masuk</span></a></li>
                     <li><a href="/admin/data/suratkeluar"><i class="fa fa-users white_color"></i> <span>Surat Keluar</span></a></li>
                     <li><a href="/admin/data/surattugas"><i class="fa fa-users white_color"></i> <span>Surat Tugas</span></a></li>
                     <li><a href="/admin/data/suratpinjam"><i class="fa fa-users white_color"></i> <span>Surat Pinjam</span></a></li>
                     <li><a href="/admin/data/beritaacara"><i class="fa fa-users white_color"></i> <span>Berita Acara</span></a></li>
                     <li><a href="/logout"><i class="fa fa-sign-out white_color"></i> <span>Logout</span></a></li>
                     
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                       
                        
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">

                      @yield('content')
                     
                  </div>
                  
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="/pluto/js/jquery.min.js"></script>
      <script src="/pluto/js/popper.min.js"></script>
      <script src="/pluto/js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="/pluto/js/animate.js"></script>
      <!-- select country -->
      <script src="/pluto/js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="/pluto/js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="/pluto/js/Chart.min.js"></script>
      <script src="/pluto/js/Chart.bundle.min.js"></script>
      <script src="/pluto/js/utils.js"></script>
      <script src="/pluto/js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="/pluto/js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="/pluto/js/custom.js"></script>
      <script src="/pluto/js/chart_custom_style1.js"></script>
      <script>
      @include('layouts.notif')
      </script>
      @stack('js')
   </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CarWash | UPV</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="admin/assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="admin/assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="admin/assets/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="admin/assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="admin/assets/css/bootstrap-select/bootstrap-select.min.css">
        <link rel="stylesheet" href="admin/assets/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="admin/assets/css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="admin/assets/css/owl-carousel/owl.theme.min.css">
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="admin/assets/img/logo-2.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->

        <div class="page">
            <!-- Begin Header -->
            <header class="header">
                <nav class="navbar fixed-top"> 
                          
                    <!-- Begin Topbar -->
                    <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
                        <!-- Begin Logo -->
                        <div class="navbar-header">
                            <a href="index" class="navbar-brand">
                                <div class="brand-image brand-big">
                                    <img src="admin/assets/img/logo-big-2.png" alt="logo" class="logo-big">
                                </div>
                                <div class="brand-image brand-small">
                                    <img src="admin/assets/img/logo-2.png" alt="logo" class="logo-small">
                                </div>
                            </a>
                            <!-- Toggle Button -->
                            <a id="toggle-btn" href="#" class="menu-btn active">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                            <!-- End Toggle -->
                        </div>
                    </div>
                    <!-- End Topbar -->
                </nav>
            </header>
            <!-- End Header -->

            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <div class="default-sidebar">
                    <!-- Begin Side Navbar -->
                    <nav class="side-navbar box-scroll sidebar-scroll">
                        <!-- Begin Main Navigation -->
                        <ul class="list-unstyled">
                            <span class="heading">Navegación</span>
                            <li>
                                <a href="formulario"><i class="la la-space-shuttle"></i>
                                    <span>Formulario 1</span>
                                </a>
                            </li>

                            <li>
                                <a href="formulario2"><i class="la la-space-shuttle"></i>
                                    <span>Formulario 2</span>
                                </a>
                            </li>

                            <li>
                                <a href="tabla"><i class="la la-space-shuttle"></i>
                                    <span>Tabla 1</span>
                                </a>
                            </li>

                            <li>
                                <a href="tabla2"><i class="la la-space-shuttle"></i>
                                    <span>Tabla 2</span>
                                </a>
                            </li>

                            <li>
                                <a href="grafica"><i class="la la-space-shuttle"></i>
                                    <span>Grafica 1</span>
                                </a>
                            </li>

                            <li>
                                <a href="grafica2"><i class="la la-space-shuttle"></i>
                                    <span>Grafica 2</span>
                                </a>
                            </li>

                        </ul>
                        <!-- End Main Navigation -->
                    </nav>
                    <!-- End Side Navbar -->
                </div>
                <!-- End Left Sidebar -->
                
                <!-- Start Content -->
                <div class="content-inner">
                    @yield('content-inner')
                </div>
                <!-- End Content -->
            </div>


            <footer class="main-footer">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-start justify-content-lg-start justify-content-md-start justify-content-center">
                            <p class="text-gradient-02"></p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 d-flex align-items-center justify-content-xl-end justify-content-lg-end justify-content-md-end justify-content-center">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">UPV</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">TAW</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </footer>

        </div>

       
        
        <script src="admin/assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="admin/assets/vendors/js/base/jquery.min.js"></script>
        <script src="admin/assets/vendors/js/base/core.min.js"></script>
        <script src="admin/assets/vendors/js/bootstrap-select/bootstrap-select.min.js"></script>
        <script src="admin/assets/vendors/js/chart/chart.min.js"></script>
        <script src="admin/assets/vendors/js/progress/circle-progress.min.js"></script>
        <script src="admin/assets/vendors/js/calendar/moment.min.js"></script>
        <script src="admin/assets/vendors/js/calendar/fullcalendar.min.js"></script>
        <script src="admin/assets/vendors/js/owl-carousel/owl.carousel.min.js"></script>
        <script src="admin/assets/vendors/js/app/app.min.js"></script>
        <script src="admin/assets/js/components/chartjs/chartjs.min.js"></script>
        <script src="admin/assets/js/dashboard/db-default-dark.js"></script>
    </body>
</html>
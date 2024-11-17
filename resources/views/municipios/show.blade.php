<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $nombre }} - ChocoTravel</title>
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    

    <link rel="shortcut icon" type="image/icon" href={{url('assets/images/logo/logo.png')}} />
    <!-- font-awesome.min.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />

    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" />

    <!-- hover.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/hover-min.css') }}" />

    <!-- datepicker.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/datepicker.css') }}" />

    <!-- owl.carousel.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" />

    <!-- owl.theme.default.min.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" />

    <!-- range css -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}" />

    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootsnav.css') }}" />

    <!-- style.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- responsive.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- main-menu Start -->
    <header class="top-area">
        <div class="header-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{url('assets/images/logo/CHOCO_TRAVEL-removebg-preview.png')}}" alt="">
                            </a>
                        </div><!-- /.logo-->
                    </div><!-- /.col-->
                    <div class="col-sm-10">
                        <div class="main-menu">

                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <i class="fa fa-bars"></i>
                                </button><!-- / button-->
                            </div><!-- /.navbar-header-->
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">

                                    @if (Auth::check())
                                        <li class="smooth-menu"><a href="Lo">{{ Auth::user()->name }}</a></li>
                                        <li class="smooth-menu">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>

                                            <a href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                LOGOUT
                                            </a>
                                        </li>

                                    @else

                                        <li class="smooth">
                                            <a href="{{ route(name: 'login') }}">LOGIN</a>
                                        </li>
                                    @endif

                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.main-menu-->
                    </div><!-- /.col-->
                </div><!-- /.row -->
                <div class="home-border"></div><!-- /.home-border-->
            </div><!-- /.container-->
        </div><!-- /.header-area -->

    </header><!-- /.top-area-->
    <!-- main-menu End -->


    <!--about-us start -->
    <section style="background-image: url('{{ asset($imagen2) }}');" id="home" class="about-us">
        <div class="container">
            <div class="about-us-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single-about-us">
                            <div class="about-us-txt">
                                <h2>
                                    Bienvenidos a {{ $nombre }}
                                </h2>
                                <div class="about-btn">

                                </div><!--/.about-btn-->
                            </div><!--/.about-us-txt-->
                        </div><!--/.single-about-us-->
                    </div><!--/.col-->
                    <div class="col-sm-0">
                        <div class="single-about-us">

                        </div><!--/.single-about-us-->
                    </div><!--/.col-->
                </div><!--/.row-->
            </div><!--/.about-us-content-->
        </div><!--/.container-->

    </section><!--/.about-us-->
    <!--about-us end -->

    <div class="municipio-container" style="display: flex; justify-content: space-between; padding: 4rem;">
    <!-- Columna izquierda con imagen -->
    <div style="flex: 1; padding-right: 20px;">
        <img src="{{ $imagen }}" alt="{{ $nombre }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
    </div>

    <!-- Columna derecha con texto centrado -->
    <div style="flex: 1; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center; ">
        <h1>{{ $nombre }}</h1>
        <p class="p">{{ $descripcion }}</pcla>
        <p><strong>Precio:</strong> {{ $precio }} USD</p>
        <a href="/" class="back-link" style="display: inline-block; margin-top: 10px;">Volver a la lista de municipios</a>
    </div>
</div>

</div>

 <!-- footer-copyright start -->
 <footer class="footer-copyright">
        <div class="container">
            <div class="footer-content">
                <div class="row">

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <div class="footer-logo">
                            <img src="{{url('assets/images/logo/CHOCO_TRAVEL-removebg-preview.png')}}" alt="">
                            </div>
                        </div><!--/.single-footer-item-->
                    </div><!--/.col-->

                    

                    </div><!--/.col-->  q

                </div><!--/.row-->

            </div><!--/.footer-content-->
            

    </footer><!-- /.footer-copyright-->
    <!-- footer-copyright end -->


    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!-- modernizr.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    <!-- bootstrap.min.js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- bootsnav js -->
    <script src="{{ asset('assets/js/bootsnav.js') }}"></script>

    <!-- jquery.filterizr.min.js -->
    <script src="{{ asset('assets/js/jquery.filterizr.min.js') }}"></script>

    <!-- jquery-easing.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- jquery-ui.min.js -->
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>

    <!-- counter js -->
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>

    <!-- owl.carousel.js -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- jquery.sticky.js -->
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>

    <!-- datepicker.js -->
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
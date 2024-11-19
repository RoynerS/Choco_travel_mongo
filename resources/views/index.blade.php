<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- META DATA -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!--font-family-->
    <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

    <!-- TITLE OF SITE -->
    <title>Choco Travel</title>

    <!-- favicon img -->
    <link rel="shortcut icon" type="image/icon" href={{url('assets/images/logo/logo.png')}} />

    <!--font-awesome.min.css-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--animate.css-->
    <link rel="stylesheet" href="assets/css/animate.css" />

    <!--hover.css-->
    <link rel="stylesheet" href="assets/css/hover-min.css">

    <!--datepicker.css-->
    <link rel="stylesheet" href="assets/css/datepicker.css">

    <!--owl.carousel.css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />

    <!-- range css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

    <!--bootstrap.min.css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

    <!-- bootsnav -->
    <link rel="stylesheet" href="assets/css/bootsnav.css" />

    <!--style.css-->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!--responsive.css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

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
                                    <li class="smooth-menu"><a href="#home">Inicio</a></li>
                                    <li class="smooth-menu"><a href="#gallery">Destinos</a></li>
                                    <li class="smooth-menu"><a href="#blog">Noticias</a></li>
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
    <section id="home" class="about-us">
        <div class="container">
            <div class="about-us-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="single-about-us">
                            <div class="about-us-txt">
                                <h2>
                                    Bienvenidos al mejor vividero del mundo
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



    <!--service start-->
    <section id="service" class="service">
        <div class="tour-section">
            <div class="container">
                <div class="card-grid">
                    <!-- Tarjeta 1 -->
                    <div class="card">
                        <h3>Explore la Selva Tropical</h3>
                        <p>Descubre la biodiversidad única del Chocó con recorridos guiados por expertos.</p>
                    </div>
                    <!-- Tarjeta 2 -->
                    <div class="card">
                        <h3>Alojamientos Ecológicos</h3>
                        <p>Hospédate en cabañas sostenibles rodeadas de naturaleza virgen.</p>
                    </div>
                    <!-- Tarjeta 3 -->
                    <div class="card">
                        <h3>Aventuras en el Océano</h3>
                        <p>Experimenta el avistamiento de ballenas, buceo y deportes acuáticos.</p>
                    </div>
                </div>
            </div>
        </div>


    </section><!--/.service-->
    <!--service end-->

    <!--galley start-->
    <section id="gallery" class="gallery">
        <div class="tour-section">
            <div class="container">
                <h2 class="section-title">Explora los Municipios del Chocó</h2>
                <div class="card-grid">
                    @php
                        $municipios = [
                            "Acandí",
                            "Alto Baudó",
                            "Bagadó",
                            "Bahía Solano",
                            "Bajo Baudó",
                            "Bojayá",
                            "Cértegui",
                            "Condoto",
                            "El Cantón de San Pablo",
                            "El Carmen de Atrato",
                            "Istmina",
                            "Juradó",
                            "Lloró",
                            "Medio Atrato",
                            "Medio Baudó",
                            "Medio San Juan",
                            "Nóvita",
                            "Nuquí",
                            "Quibdó",
                            "Río Iró",
                            "Río Quito",
                            "Riosucio",
                            "San José del Palmar",
                            "Sipí",
                            "Tadó",
                            "Unguía",
                            "Unión Panamericana",
                            "Carmen del Darién",
                            "Bahía Málaga",
                            "Puerto Meluk",
                            "Andagoya"
                        ];

                    @endphp

                    @foreach ($municipios as $municipio)
                        <div class="card">
                            @if(Auth::check())
                                <a href="{{ route('municipios.show', ['nombre' => $municipio]) }}" class="card-link">
                                    <h3>{{ $municipio }}</h3>
                                    <p>Descubre la belleza y cultura de {{ $municipio }}. ¡Una experiencia única en el Chocó!
                                    </p>
                                </a>
                            @else
                                <p><a href="{{ route('login') }}">{{ $municipio }}<br> Inicia sesión para ver más detalles</a>
                                </p>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section><!--/.gallery-->
    <!--gallery end-->




    <!--blog start-->
    <section id="blog" class="blog">
        <div class="container">
            <div class="blog-details">
                <!-- Encabezado de la galería -->
                <div class="gallary-header text-center">
                    <h2>Últimas Noticias</h2>
                    <p>Nuevas noticias del Chocó!</p>
                </div>

                <!-- Contenido del blog -->
                <div class="blog-content">
                    <div class="row">
                        @foreach ($articles as $article)
                            <div class="col-sm-4 col-md-4">
                                <div class="thumbnail">
                                    <!-- Encabezado del artículo -->
                                    <h2>
                                        Noticias principales <span>{{ $article['date'] }}</span>
                                    </h2>

                                    <!-- Imagen del artículo -->
                                    <div class="thumbnail-img">
                                        <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}"
                                            class="img-responsive">
                                        <div class="thumbnail-img-overlay"></div>
                                    </div>

                                    <!-- Detalles del artículo -->
                                    <div class="caption">
                                        <div class="blog-txt">
                                            <h3>
                                                <a href="{{ $article['url'] }}">
                                                    {{ $article['title'] }}
                                                </a>
                                            </h3>
                                            <p>
                                                {{ $article['description'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>




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

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <h2>link</h2>
                            <div class="single-footer-txt">
                                <p><a href="#">home</a></p>
                                <p><a href="#">destination</a></p>
                                <p><a href="#">spacial packages</a></p>
                                <p><a href="#">special offers</a></p>
                                <p><a href="#">blog</a></p>
                                <p><a href="#">contacts</a></p>
                            </div><!--/.single-footer-txt-->
                        </div><!--/.single-footer-item-->

                    </div><!--/.col-->

                    <div class="col-sm-3">
                        <div class="single-footer-item">
                            <h2>popular destination</h2>
                            <div class="single-footer-txt">
                                <p><a href="#">china</a></p>
                                <p><a href="#">venezuela</a></p>
                                <p><a href="#">brazil</a></p>
                                <p><a href="#">australia</a></p>
                                <p><a href="#">london</a></p>
                            </div><!--/.single-footer-txt-->
                        </div><!--/.single-footer-item-->
                    </div><!--/.col-->

                    <div class="col-sm-3">
                        <div class="single-footer-item text-center">
                            <h2 class="text-left">contacts</h2>
                            <div class="single-footer-txt text-left">
                                <p>+1 (300) 1234 6543</p>
                                <p class="foot-email"><a href="#">info@tnest.com</a></p>
                                <p>North Warnner Park 336/A</p>
                                <p>Newyork, USA</p>
                            </div><!--/.single-footer-txt-->
                        </div><!--/.single-footer-item-->
                    </div><!--/.col-->

                </div><!--/.row-->

            </div><!--/.footer-content-->


    </footer><!-- /.footer-copyright-->
    <!-- footer-copyright end -->




    <script src="assets/js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    <!--modernizr.min.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


    <!--bootstrap.min.js-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- bootsnav js -->
    <script src="assets/js/bootsnav.js"></script>

    <!-- jquery.filterizr.min.js -->
    <script src="assets/js/jquery.filterizr.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!--jquery-ui.min.js-->
    <script src="assets/js/jquery-ui.min.js"></script>

    <!-- counter js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>

    <!--owl.carousel.js-->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- jquery.sticky.js -->
    <script src="assets/js/jquery.sticky.js"></script>

    <!--datepicker.js-->
    <script src="assets/js/datepicker.js"></script>

    <!--Custom JS-->
    <script src="assets/js/custom.js"></script>


</body>

</html>
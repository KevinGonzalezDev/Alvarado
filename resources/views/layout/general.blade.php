<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARLOS ALVARADO</title>
    <link rel="stylesheet" href="estilos/main.css">
    <link rel="stylesheet" href="estilos/responsive.css">
</head>
<body>

    <div class="header">
        <div class="language-container">
            <div class="button-container">
                <ul class="navbar-nav ml-auto">
                  @php $locale = session()->get('locale'); @endphp
                <li class="nav-item dropdown">
                  <a href="#">
                     @switch($locale)
                         @case('en')
                         Inglés
                         @break
                         @case('es')
                         Español
                         @break
                         @default
                         Español
                     @endswitch
                     <span class="caret"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="locale/en"> Inglés</a>
                      <a class="dropdown-item" href="locale/es"> Español</a>
                  </div>
                </li>
                </ul>


            </div>

        </div>


        <div class="menu-container">

        <img src="img/icons/alvarado-logo.png" alt="Logotipo" id="logotipo">

        <!-- PARTE IMPORTANTE DEL MENU -->

        <div class="links-section">
            <ul class="menu-links">
                <!-- LOS IF EN ESTA PARTE ES PARA COLOREAR POR MEDIO DE UNA CLASE CUANDO UNA DE LAS OPCIONES ESTÉ SELECCIONADA -->
            <li><a href="{{route('welcome')}}" @if (Request::url() == route('raiz') || Request::url() == route('welcome')) class = "selected" @endif>{{ __('Home')}}</a></li>

            <li class="link-with-arrow">

                <div class="arrow-link">
                    <a href="{{route('services')}}" @if(Request::url() == route('services')) class="selected" @endif>{{ __('Servicios')}}</a><!--<span class="subMenuOpen" data-numero="1">⯆</span>-->
                </div>
<!--
                <div class="sub-menu-container">
                    <ul id="sub-menu1" class="sub-menus">
                    <li><a href="{{route('services')}}">{{__('Quienes Somos')}}</a></li>
                    <li><a href="{{route('our')}}">{{__('Nuestro equipo')}}</a></li>
                        <li><a href="#">{{__('Conoce nuestra casa matriz')}} </a></li>
                    </ul>
                </div>
-->

            </li>

        <li><a href="{{route('our')}}" @if(Request::url() == route('our')) class="selected" @endif>{{ __('Nosotros')}}</a></li>

                <li class="link-with-arrow">

                <div class="arrow-link">
                    <a href="{{route('ourClients')}}" @if(Request::url() == route('ourClients')) class="selected" @endif>{{ __('Nuestros Clientes')}}</a>
                </div>
<!--
                <div class="sub-menu-container">
                    <ul id="sub-menu2" class="sub-menus">
                        <li><a href="#"> Donde compramos su café </a></li>
                        <li><a href="#"> Comercinates </a></li>
                        <li><a href="#"> Caficultores </a></li>
                    </ul>
                </div>
-->
                </li>

            <li><a href="{{route('blog')}}" @if(Request::url() == route('blog')) class="selected" @endif>Blog</a></li>
            </ul>

            <span id="menu-separator"></span>

            <ul class="social-links-container">
                <li><a href="#"><img src="img/icons/fb.png" alt="facebook logo"></a></li>
                <li><a href="#"><img src="img/icons/ig.png" alt="instagram logo"></a></li>
                <li><a href="#"><img src="img/icons/twitter.png" alt="twitter logo"></a></li>
            </ul>
        </div>


        </div>

    </div>


    @if(Request::url() == route('welcome') || Request::url() == route('raiz'))
    <div class="hero-container">
        <div class="img-hero-mask">

        <img alt="Hero image" id="img1">
        <img alt="Hero image" id="img2">

            <!-- ESTE SPAN ES EL FILTRO PARA QUE LAS IMÁGENES SE VEAN OSCURAS -->

            <span></span>

        </div>


        <div class="main-info-container">
            <div id="indicators-container"></div>
        </div>
    </div>

    @else

    <div class="normal-main-header-container">

        <div class="img-hero-mask">
            @if(Request::url() == route('services'))
            <img src="img/templates/banners/services.jpg" alt="about banner">
            @elseif(Request::url() == route('our'))
            <img src="img/templates/banners/our.jpg" alt="about banner">
            @elseif(Request::url() == route('ourClients'))
            <img src="img/templates/banners/ourClients.jpg" alt="about banner">
            @elseif(Request::url() == route('blog'))
            <img src="img/templates/banners/blog.jpg" alt="about banner">
            @endif
            
            @if(Request::url() == route('welcome') || Request::url() == route('raiz'))
            <span></span>
            @else
            <span class="dark-filter"></span>
            @endif
        </div>

        <div class="main-info-normal-container">

            <div class="info-normal-container">
                @if(Request::url() == route('services'))

                <div class="title-main-container">
                    <h2>{{ __('Servicios')}}</h2>
                </div>
                @elseif(Request::url() == route('our'))

                <div class="title-main-container">
                    <h2>{{ __('Consultores Auditores')}}</h2>
                </div>
                @elseif(Request::url() == route('ourClients'))

                <div class="title-main-container">
                    <h2>{{ __('Nuestros Clientes')}}</h2>
                </div>
                @elseif(Request::url() == route('blog'))

                <div class="title-main-container">
                    <h2>{{__('Nuestro Blog')}}</h2>
                </div>



                @endif
            </div>

        </div>


    </div>

    @endif

    @yield('content')


    <div class="footer-container">

        <div class="logo-footer-container">
            <img src="img/icons/logo.png" alt="Logotipo">
        </div>

<!--
        <div class="middle-wrap-footer-container">
            <article><h2>Hacemos parte de&nbsp</h2><img src="img/icons/volcafe-logo.png" alt="Volcafe logotype"></article>
            <p>El mejor aliado de café a nivel global.</p>
        </div>
-->
        <div class="social-container">
            <a href="#"> <img src="img/icons/fb.png" alt="facebook image"> </a>
            <a href="#"> <img src="img/icons/ig.png" alt="instagram image"> </a>
            <a href="#"> <img src="img/icons/twitter.png" alt="twitter image"> </a>
        </div>
    </div>

    <script src="js/menu.js"></script>
    <script src="js/slideshow.js"></script>
    <script src="js/slider-home.js"></script>
    <script src="js/slider-ourteam.js"></script>
    <script src="js/slider-destacado.js"></script>
</body>
</html>

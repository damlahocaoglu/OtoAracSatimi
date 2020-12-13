 <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            "Loading..."
        </div>
    </div>

    <main class="main-wrapper">

        <!-- Navigation -->
        <header class="nav">
            <div class="nav__holder nav--sticky">
                <div class="container-fluid container-semi-fluid nav__container">
                    <div class="flex-parent">

                        <div class="nav__header">
                            <!-- Logo -->
                            <a href="{{ URL::to('/base') }}" class="logo-container flex-child">
                                <img class="logo" src="/tema/img/logo.png" srcset="/tema/img/logo.png 1x, img/logo@2x.png 2x" alt="logo">
                            </a>

                            <!-- Mobile toggle -->
                            <button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="nav__icon-toggle-bar"></span>
                                <span class="nav__icon-toggle-bar"></span>
                                <span class="nav__icon-toggle-bar"></span>
                            </button>
                        </div>

                        <!-- Navbar -->
                        <nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse">
                            <ul class="nav__menu">
                                <li class="active">
                                    <a href="{{ URL::to('base') }}">Anasayfa</a>
                                </li>
                                <ul class="nav__dropdown-menu">
                                    <li><a href="{{ URL::to('hakkimizda') }}">Hakkımızda</a></li>
                                    <li><a href="{{ URL::to('urunler') }}">Ürünler</a></li>
                                    <li><a href="pricing.html">Kampanyalar</a></li>
                                    <li><a href="{{URL::to('iletisim')}}">İletişim</a></li>
                                </ul>
                                </li>
                                <li class="nav__dropdown">
                                    <a href="{{ URL::to('hakkimizda') }}">Hakkımızda</a>
                                </li>
                                <li class="nav__dropdown">
                                    <a href="{{ URL::to('urunler') }}">Ürünler</a>
                                </li>
                                <li>
                                    <a href="#">Kampanyalar</a>
                                </li>
                                <li class="nav__dropdown">
                                    <a href="{{URL::to('iletisim')}}">İletişim</a>
                                </li>
                            </ul> <!-- end menu -->
                        </nav> <!-- end nav-wrap -->

                        <div class="nav__btn-holder nav--align-right">
                            <a  class="btn nav__btn">
                            @php    $mytime = Carbon\Carbon::now();
                                echo $mytime->toDateTimeString();
                            @endphp
                            </a>
                        </div>

                    </div> <!-- end flex-parent -->
                </div> <!-- end container -->

            </div>
        </header> <!-- end navigation -->


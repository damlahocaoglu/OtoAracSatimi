<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arabalar</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400i,500,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="/tema/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/tema/css/font-icons.css" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
    <link rel="stylesheet" href="/tema/css/style.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="/tema/img/favicon.ico">
    <link rel="apple-touch-icon" href="/tema/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/tema/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/tema/img/apple-touch-icon-114x114.png">

</head>

<body>
@include('header')

    <!-- Triangle Image -->
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 600 480" style="enable-background:new 0 0 600 480;" xml:space="preserve" class="triangle-img triangle-img--align-right">
      <g>
          <path class="st0" d="M232.16,108.54,76.5,357.6C43.2,410.88,81.5,480,144.34,480H455.66c62.83,0,101.14-69.12,67.84-122.4L367.84,108.54C336.51,58.41,263.49,58.41,232.16,108.54Z" fill="url(#img1)" />
          <path class="st0" d="M232.16,108.54,76.5,357.6C43.2,410.88,81.5,480,144.34,480H455.66c62.83,0,101.14-69.12,67.84-122.4L367.84,108.54C336.51,58.41,263.49,58.41,232.16,108.54Z" fill="url(#triangle-gradient)" fill-opacity="0.7" />
      </g>
        <defs>
            <pattern id="img1" patternUnits="userSpaceOnUse" width="500" height="500">
                <image xlink:href="img/hero/hero.jpg" x="50" y="70" width="500" height="500"></image>
            </pattern>

            <linearGradient id="triangle-gradient" y2="100%" x2="0" y1="50%" gradientUnits="userSpaceOnUse" >
                <stop offset="0" stop-color="#4C86E7"/>
                <stop offset="1" stop-color="#B939E5"/>
            </linearGradient>
        </defs>
    </svg>


    <div class="content-wrapper oh">

        <!-- Hero -->
        <section class="hero">

            <div class="row">
                    <div class="col-md-6"  style="margin-left: 50px;">
                        <div class="hero__text-holder">
                            @yield('form')
                        </div>
                     </div>
            </div>
        </section> <!-- end hero -->

        <!-- Service Boxes -->
        <section class="section-wrap pb-72 pb-lg-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                    </div>
                    <div class="row">
                    <div class="col-lg-4">
                   </div>
                </div>
            </div>
        </section> <!-- end service boxes -->

        <!-- Promo Section -->
        <section class="section-wrap promo-section promo-section--pb-large pt-lg-40">


            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-6">
                       </div>
                </div>
            </div>
        </section> <!-- end promo section -->



        <!-- CTA -->
        <div class="container offset-top-152 pt-sm-48">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                </div>
            </div>
        </div> <!-- end cta -->

            </div> <!-- end container -->
    @include('footer')

<!-- jQuery Scripts -->
<script src="/tema/js/jquery.min.js"></script>
<script src="/tema/js/bootstrap.min.js"></script>
<script src="/tema/js/plugins.js"></script>
<script src="/tema/js/scripts.js"></script>

<!-- Cookies -->
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script src="/tasarim/js/cookies.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- css & icons-->
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- librarys -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- title -->
    <title>{{config('APP_NAME','Wave - Music')}}</title>

</head>
<body>
    <!-- header -->
    <header class="container__header">
        <div class="wrapper-section">
            <div class="header">
                <section class="header__logo">
                    <img src="{{asset('images/logo/logo.png')}}" alt="wave-music-logo">
                    <h1 class="d-none d-sm-block h4 my-0 mx-2 fw-bold">Wave</h1>
                </section>
                <nav class="header__navigation">
                    
                    <ul class="m-0 p-0">
                        <li><a class="active" href="{{url('/')}}">Inicio</a></li>
                        <li><a class="" href="{{url('/nosotros')}}">Nosotros</a></li>
                        <li><a class="" href="{{url('/productos')}}">Productos</a></li>
                        <li><a class="" href="{{url('/contacto')}}">Contacto</a></li>
                    </ul>

                    <i class="close bi bi-x-circle position-absolute" style="top: 20px; right: 20px; font-size: 1.3em;" ></i>
                </nav>
                <section class="icons_header d-flex align-items-center gap-4">
                    <i class="bi bi-search"></i>
                    <i class="bi bi-heart"></i>
                    <i class="bi bi-person-circle"></i>
                    <i class="bi bi-bag"></i>
                </section>

                <div class="hamburger fs-4" id="hamburger-nav" >
                    <i class=" bi bi-list fw-bold fs-1"></i>
                </div>
            </div>
        </div>
    </header>
   
    @yield('main-content')

   <!-- fotter -->
   <footer class="bg-dark p-4 text-light">
        <div class="d-flex  flex-column flex-sm-row  flex-wrap py-3 justify-content-between align-items-center container my-2" >
            <h1 class=>WAVE</h1>
            <ul class="d-flex flex-column flex-sm-row gap-5" >
                <li>Inicio</li>
                <li>Nosotros</li>
                <li>Productos</li>
                <li>Contacto</li>
            </ul>
        </div>
        <ul class="d-flex gap-5 justify-content-center">
            <li><i class="bi bi-facebook"></i></li>
            <li><i class="bi bi-instagram"></i></li>
            <li><i class="bi bi-twitter"></i></li>
            <li><i class="bi bi-youtube"></i></li>
        </ul>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{asset('js/navbar.js')}}"></script>
    <script src="{{asset('js/index.js')}}"></script>
</body>
</html>
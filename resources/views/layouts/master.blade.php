<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Freelancer - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css' )}}" rel="stylesheet" />
</head>
<body id="page-top">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand" href="#page-top">EZCampus</a>
                    <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
{{--                        <ul class="navbar-nav ms-auto">--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                                    @auth--}}
{{--                                        <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('logout') }}"--}}
{{--                                           onclick="event.preventDefault();--}}
{{--                                           document.getElementById('logout-form').submit();">--}}
{{--                                              {{ __('Logout') }}</a>--}}

{{--                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                            @csrf--}}
{{--                                        </form>--}}

{{--                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>--}}



{{--                                    @else--}}
{{--                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>--}}

{{--                                        @if (Route::has('register'))--}}
{{--                                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                                        @endif--}}
{{--                                    @endauth--}}
{{--                                </div>--}}
{{--                            @endif--}}


{{--                            @if (Route::has('login'))--}}
{{--                                <a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}

{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            @else--}}
{{--                                <li><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('login') }}">Login</a></li>--}}
{{--                                <li><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('join') }}">Join</a></li>--}}
{{--                            @endif--}}
{{--                                <li><a class="nav-link py-3 px-0 px-lg-3 rounded" href="">Contact</a></li>--}}

{{--                        </ul>--}}
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Masthead-->
            <header class="masthead bg-primary text-white text-center">
                <div class="container d-flex align-items-center flex-column">
                    <!-- Masthead Avatar Image-->
                    <img class="masthead-avatar mb-5" src="{{ asset('assets/img/avataaars.svg')}}" alt="..." />
                    <!-- Masthead Heading-->
                    <h1 class="masthead-heading text-uppercase mb-0">EZCampus Bulletin</h1>
                    <!-- Icon Divider-->
                    <div class="divider-custom divider-light">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <!-- Masthead Subheading-->
                    <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>
                </div>
            </header>

            @yield('content')

            <!-- Footer-->
            <footer class="footer text-center">
                <div class="container">
                    <div class="row">
                        <!-- Footer Location-->
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Location</h4>
                            <p class="lead mb-0">
                                2215 John Daniel Drive
                                <br />
                                Clark, MO 65243
                            </p>
                        </div>
                        <!-- Footer Social Icons-->
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <h4 class="text-uppercase mb-4">Around the Web</h4>
                            <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                        </div>
                        <!-- Footer About Text-->
                        <div class="col-lg-4">
                            <h4 class="text-uppercase mb-4">About Freelancer</h4>
                            <p class="lead mb-0">
                                Freelance is a free to use, MIT licensed Bootstrap theme created by
                                <a href="http://startbootstrap.com">Start Bootstrap</a>
                                .
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
                <!-- Copyright Section-->
                <div class="copyright py-4 text-center text-white">
                    <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
                </div>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="{{ asset('js/scripts.js')}}"></script>
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <!-- * *                               SB Forms JS                               * *-->
            <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
            <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
            <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

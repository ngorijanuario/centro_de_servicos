<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('dist/main.css') }}">
</head>

<body>
{{--  --}}
<header class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-top-wrapper">
                            <div class="header-top-info">
                                <div class="email">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.95" height="13.4"
                                            viewBox="0 0 16.95 13.4">
                                            <g id="Mail" transform="translate(0.975 0.7)">
                                                <path id="Path_1" data-name="Path 1"
                                                    d="M3.5,4h12A1.5,1.5,0,0,1,17,5.5v9A1.5,1.5,0,0,1,15.5,16H3.5A1.5,1.5,0,0,1,2,14.5v-9A1.5,1.5,0,0,1,3.5,4Z"
                                                    transform="translate(-2 -4)" fill="none" stroke="#1a2224"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                                <path id="Path_2" data-name="Path 2" d="M17,6,9.5,11.25,2,6"
                                                    transform="translate(-2 -4.5)" fill="none" stroke="#1a2224"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="text">
                                        <span>geral@cs.ao</span>
                                    </div>
                                </div>
                                <div class="cta">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="13.401" height="13.401"
                                            viewBox="0 0 13.401 13.401">
                                            <g id="Phone_Icon" data-name="Phone Icon" transform="translate(0.7 0.7)">
                                                <path id="Phone_Icon-2" data-name="Phone Icon"
                                                    d="M14.111,10.984v1.806A1.206,1.206,0,0,1,12.8,14a11.956,11.956,0,0,1-5.207-1.849,11.754,11.754,0,0,1-3.62-3.613A11.9,11.9,0,0,1,2.117,3.313,1.205,1.205,0,0,1,3.317,2h1.81A1.206,1.206,0,0,1,6.334,3.036a7.719,7.719,0,0,0,.422,1.692A1.2,1.2,0,0,1,6.485,6l-.766.765a9.644,9.644,0,0,0,3.62,3.613l.766-.765a1.208,1.208,0,0,1,1.273-.271,7.76,7.76,0,0,0,1.7.422,1.205,1.205,0,0,1,1.038,1.222Z"
                                                    transform="translate(-2.112 -2)" fill="none" stroke="#1a2224"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="text">
                                        <span>+244 932 123 321</span>
                                    </div>
                                </div>
                            </div>
                            <div class="header-top-switcher">
                                <div class="currency">
                                    <select>
                                        <option data-display="AOA">AOA</option>
                                        <option value="1">USD</option>
                                        <option value="2">EUR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="d-none d-lg-block">
                    <nav class="menu-area d-flex align-items-center">
                        <div class="logo">
                            <a href="/"><img style="width: 100px;" src="/dist/images/logo.png" alt="logo" /></a>
                        </div>
                        <ul class="main-menu d-flex align-items-center">
                            <li><a href="/">Inicio</a></li>
                            <li><a href="/sobre">Sobre</a></li>
                            <li>
                                <a href="javascript:void(0)">Ajuda
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9.98" height="5.69"
                                        viewBox="0 0 9.98 5.69">
                                        <g id="Arrow" transform="translate(0.99 0.99)">
                                            <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l4,4,4-4"
                                                transform="translate(-1474.286 -26.4)" fill="none" stroke="#1a2224"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                        </g>
                                    </svg>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:void(0)">Como usar</a></li>
                                    <li><a href="javascript:void(0)">Pagamentos</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="search-bar">
                            <form action="/" method="get">
                                <input type="text" id="search" name="search" placeholder="Cabelereira, Advogado, taxista...">
                            </form>
                        </div>
                        <div class="menu-icon ml-auto">
                            <ul class="main-menu">
                                @auth
                                <li>
                                    <a href="/carrinho"><svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 22 22">
                                            <g id="Icon" transform="translate(-1524 -89)">
                                                <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.909" cy="0.952"
                                                    rx="0.909" ry="0.952" transform="translate(1531.364 108.095)"
                                                    fill="none" stroke="#1a2224" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" />
                                                <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.909" cy="0.952"
                                                    rx="0.909" ry="0.952" transform="translate(1541.364 108.095)"
                                                    fill="none" stroke="#1a2224" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" />
                                                <path id="Path_3" data-name="Path 3"
                                                    d="M1,1H4.636L7.073,13.752a1.84,1.84,0,0,0,1.818,1.533h8.836a1.84,1.84,0,0,0,1.818-1.533L21,5.762H5.545"
                                                    transform="translate(1524 89)" fill="none" stroke="#1a2224"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            </g>
                                        </svg>
                                        <span class="cart">3</span>
                                    </a>
                                </li>
                                <li><a href="/voucher">Voucher</a>
                                </li>
                                <li>
                                    <a href="/login"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                            height="20" viewBox="0 0 18 20">
                                            <g id="Account" transform="translate(1 1)">
                                                <path id="Path_86" data-name="Path 86"
                                                    d="M20,21V19a4,4,0,0,0-4-4H8a4,4,0,0,0-4,4v2"
                                                    transform="translate(-4 -3)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                <circle id="Ellipse_9" data-name="Ellipse 9" cx="4" cy="4" r="4"
                                                    transform="translate(4)" fill="#fff" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            </g>
                                        </svg></a>
                                </li>

                                <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                                </form>
                                </li>

                                @endauth

                                @guest
                                <li>
                                    <a href="/login">Login</a>
                                </li>

                                <li>
                                    <a href="/register">Criar conta</a>
                                </li>

                                @endguest
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- Mobile Menu -->
                <aside class="d-lg-none">
                    <div id="mySidenav" class="sidenav">
                        <div class="close-mobile-menu">
                            <a href="javascript:void(0)" id="menu-close" class="closebtn"
                                onclick="closeNav()">&times;</a>
                        </div>
                        <div class="search-bar">
                            <input type="text" placeholder="Cabelereira, Advogado, taxista...">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.414" height="20.414"
                                    viewBox="0 0 20.414 20.414">
                                    <g id="Search_Icon" data-name="Search Icon" transform="translate(1 1)">
                                        <ellipse id="Ellipse_1" data-name="Ellipse 1" cx="8.158" cy="8" rx="8.158"
                                            ry="8" fill="none" stroke="#1a2224" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" />
                                        <line id="Line_4" data-name="Line 4" x1="3.569" y1="3.5"
                                            transform="translate(14.431 14.5)" fill="none" stroke="#1a2224"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                        <li>
                            <a href="javascript:void(0)">Ajuda
                                <svg xmlns="http://www.w3.org/2000/svg" width="9.98" height="5.69"
                                    viewBox="0 0 9.98 5.69">
                                    <g id="Arrow" transform="translate(0.99 0.99)">
                                        <path id="Arrow-2" data-name="Arrow" d="M1474.286,26.4l4,4,4-4"
                                            transform="translate(-1474.286 -26.4)" fill="none" stroke="#1a2224"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="1.4" />
                                    </g>
                                </svg>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Como usar</a></li>
                                <li><a href="javascript:void(0)">Pagamentos</a></li>
                            </ul>
                        </li>
                    </div>
                    <div class="mobile-nav d-flex align-items-center justify-content-between">
                        <div class="logo">
                            <a href="/"><img style="width: 100px;" src="dist/images/logo.png" alt="logo" /></a>
                        </div>
                        <div class="search-bar">
                            <input type="text" placeholder="Cabelereira, Advogado, taxista...">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20.414" height="20.414"
                                    viewBox="0 0 20.414 20.414">
                                    <g id="Search_Icon" data-name="Search Icon" transform="translate(1 1)">
                                        <ellipse id="Ellipse_1" data-name="Ellipse 1" cx="8.158" cy="8" rx="8.158"
                                            ry="8" fill="none" stroke="#1a2224" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" />
                                        <line id="Line_4" data-name="Line 4" x1="3.569" y1="3.5"
                                            transform="translate(14.431 14.5)" fill="none" stroke="#1a2224"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </g>
                                </svg>
                            </div>
                        </div>
                        
                        <div class="menu-icon">
                            <ul>
                                <li>
                                    <a href="/carrinho">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 22 22">
                                            <g id="Icon" transform="translate(-1524 -89)">
                                                <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="0.909" cy="0.952"
                                                    rx="0.909" ry="0.952" transform="translate(1531.364 108.095)"
                                                    fill="none" stroke="#1a2224" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" />
                                                <ellipse id="Ellipse_3" data-name="Ellipse 3" cx="0.909" cy="0.952"
                                                    rx="0.909" ry="0.952" transform="translate(1541.364 108.095)"
                                                    fill="none" stroke="#1a2224" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" />
                                                <path id="Path_3" data-name="Path 3"
                                                    d="M1,1H4.636L7.073,13.752a1.84,1.84,0,0,0,1.818,1.533h8.836a1.84,1.84,0,0,0,1.818-1.533L21,5.762H5.545"
                                                    transform="translate(1524 89)" fill="none" stroke="#1a2224"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            </g>
                                        </svg>
                                        <span class="cart">3</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/voucher">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="20"
                                            viewBox="0 0 18 20">
                                            <g id="Account" transform="translate(1 1)">
                                                <path id="Path_86" data-name="Path 86"
                                                    d="M20,21V19a4,4,0,0,0-4-4H8a4,4,0,0,0-4,4v2"
                                                    transform="translate(-4 -3)" fill="none" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                <circle id="Ellipse_9" data-name="Ellipse 9" cx="4" cy="4" r="4"
                                                    transform="translate(4)" fill="#fff" stroke="#000"
                                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="hamburger-menu">
                            <a style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</a>
                        </div>
                    </div>
                </aside>
                <!-- Body overlay -->
                <div class="overlay" id="overlayy"></div>
            </div>
        </div>
    </header>
    <!-- fim do menu -->
    @yield('content')


  <!-- Footer -->
  <footer>
        <div class="container">
            <p>&copy; 2024. Centro de Cerviços</p>
        </div>
    </footer>
    <!-- Footer -->

    <script src="{{ asset('src/js/jquery.min.js') }}"></script>
    <script src="{{ asset('src/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('src/scss/vendors/plugin/js/slick.min.js') }}"></script>
    <script src="{{ asset('src/scss/vendors/plugin/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('dist/main.js') }}"></script>
    <script>
        function openNav() {

            document.getElementById("mySidenav").style.width = "350px";
            $('#overlayy').addClass("active");
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            $('#overlayy').removeClass("active");
        }
    </script>
</body>

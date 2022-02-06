<!DOCTYPE html>
<html lang="bg-BG">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="„Аxis“ представлява решение за 3D-принтер. Той e " open sourced". В сайта може да
        бъде намерена информация за това как се използва принтера, както и обща информация за 3D принтирането.">
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%22256%22 height=%22256%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%234470e4%22></rect><path d=%22M30.00 64.67L27.75 58.02L14.35 58.02Q14.00 59.02 13.60 60.20Q13.20 61.38 12.83 62.50Q12.45 63.63 12.10 64.60Q11.75 65.58 11.55 66.22L11.55 66.22Q10.85 66.53 9.90 66.53L9.90 66.53Q9.10 66.53 8.48 66.10Q7.85 65.67 7.85 64.72L7.85 64.72Q7.85 64.28 8.00 63.80Q8.15 63.33 8.35 62.77L8.35 62.77Q9.10 60.67 10.28 57.38Q11.45 54.08 12.83 50.35Q14.20 46.63 15.63 42.85Q17.05 39.08 18.25 36.08L18.25 36.08Q18.65 35.88 19.45 35.67Q20.25 35.47 21.10 35.47L21.10 35.47Q22.10 35.47 23.03 35.77Q23.95 36.08 24.20 36.77L24.20 36.77Q25.40 39.67 26.78 43.40Q28.15 47.13 29.55 51.02Q30.95 54.92 32.23 58.70Q33.50 62.48 34.50 65.53L34.50 65.53Q34.10 65.97 33.55 66.25Q33 66.53 32.30 66.53L32.30 66.53Q31.35 66.53 30.85 66.10Q30.35 65.67 30.00 64.67L30.00 64.67ZM21.25 38.88L21.05 38.88Q20.50 40.38 19.80 42.30Q19.10 44.22 18.35 46.33Q17.60 48.42 16.85 50.58Q16.10 52.73 15.45 54.67L15.45 54.67L26.70 54.67Q25.95 52.42 25.15 50.15Q24.35 47.88 23.63 45.77Q22.90 43.67 22.28 41.90Q21.65 40.13 21.25 38.88L21.25 38.88ZM39 62.52L39 62.52Q40.55 60.42 42.25 58.42Q43.95 56.42 45.65 54.33L45.65 54.33Q43.55 51.77 41.75 49.50Q39.95 47.22 38.05 44.77L38.05 44.77Q38.25 43.77 38.78 43.22Q39.30 42.67 40.15 42.67L40.15 42.67Q41 42.67 41.48 43.10Q41.95 43.52 42.50 44.22L42.50 44.22Q43.80 45.97 45.18 47.95Q46.55 49.92 48.05 51.88L48.05 51.88Q49.90 49.52 51.55 47.40Q53.20 45.27 54.95 42.72L54.95 42.72Q55.20 42.67 55.50 42.67L55.50 42.67Q56.55 42.67 57.15 43.15Q57.75 43.63 57.75 44.42L57.75 44.42Q57.75 44.97 57.53 45.47Q57.30 45.97 56.80 46.63L56.80 46.63Q55.25 48.52 53.63 50.50Q52 52.48 50.40 54.38L50.40 54.38Q52.35 56.92 54.33 59.40Q56.30 61.88 58.25 64.38L58.25 64.38Q58.15 65.33 57.60 65.88Q57.05 66.42 56.15 66.42L56.15 66.42Q55.30 66.42 54.78 66Q54.25 65.58 53.55 64.67L53.55 64.67Q52.20 62.88 50.78 60.85Q49.35 58.83 47.95 56.92L47.95 56.92Q46.20 59.23 44.43 61.63Q42.65 64.03 41 66.38L41 66.38L40.30 66.38Q39.15 66.38 38.58 65.88Q38 65.38 38 64.63L38 64.63Q38 64.22 38.18 63.80Q38.35 63.38 39 62.52ZM68.05 44.63L68.05 66.03Q67.80 66.13 67.30 66.25Q66.80 66.38 66.20 66.38L66.20 66.38Q64.05 66.38 64.05 64.58L64.05 64.58L64.05 43.13Q64.30 43.02 64.83 42.90Q65.35 42.77 65.95 42.77L65.95 42.77Q68.05 42.77 68.05 44.63L68.05 44.63ZM63.45 35.72L63.45 35.72Q63.45 34.67 64.18 33.95Q64.90 33.23 66.05 33.23L66.05 33.23Q67.20 33.23 67.90 33.95Q68.60 34.67 68.60 35.72L68.60 35.72Q68.60 36.77 67.90 37.50Q67.20 38.22 66.05 38.22L66.05 38.22Q64.90 38.22 64.18 37.50Q63.45 36.77 63.45 35.72ZM92.15 59.98L92.15 59.98Q92.15 63.17 89.80 64.97Q87.45 66.78 83.00 66.78L83.00 66.78Q81.10 66.78 79.50 66.45Q77.90 66.13 76.78 65.60Q75.65 65.08 75.03 64.40Q74.40 63.73 74.40 63.02L74.40 63.02Q74.40 62.42 74.73 61.88Q75.05 61.33 75.70 60.92L75.70 60.92Q77.05 61.92 78.85 62.70Q80.65 63.48 82.95 63.48L82.95 63.48Q88.15 63.48 88.15 59.98L88.15 59.98Q88.15 57.13 84.70 56.27L84.70 56.27L80.55 55.17Q77.50 54.38 76.10 52.85Q74.70 51.33 74.70 48.92L74.70 48.92Q74.70 47.63 75.23 46.42Q75.75 45.22 76.85 44.33Q77.95 43.42 79.58 42.90Q81.20 42.38 83.40 42.38L83.40 42.38Q86.90 42.38 89.05 43.40Q91.20 44.42 91.20 45.77L91.20 45.77Q91.20 46.42 90.88 46.92Q90.55 47.42 90.00 47.67L90.00 47.67Q89.10 47.08 87.45 46.38Q85.80 45.67 83.55 45.67L83.55 45.67Q81.30 45.67 79.98 46.52Q78.65 47.38 78.65 48.92L78.65 48.92Q78.65 50.08 79.40 50.88Q80.15 51.67 81.90 52.08L81.90 52.08L85.35 52.92Q88.75 53.77 90.45 55.45Q92.15 57.13 92.15 59.98Z%22 fill=%22%23fff%22></path></svg>" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600&display=swap" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Toast JS --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <!-- Load plotly.js into the DOM -->
    <script src='https://cdn.plot.ly/plotly-2.8.3.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js'></script>
    <!-- My Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
    <title>Axis</title>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="row">
            {{-- {{ asset('images/myimage.png') }} --}}
            {{-- <img src="{{ asset('./images/logo.png') }}" alt=""> --}}
            <a href="{{ route('home') }}">
                <img class="title logo" src="{{ asset('./images/logo.png') }}" alt="logo">
            </a>
            <div class="social-media">
                <i class="fab fa-instagram" style="cursor: pointer;"></i>
                <i class="fab fa-twitter" style="cursor: pointer;"></i>
                <i class="fab fa-facebook-f" style="cursor: pointer;"></i>
            </div>
            <div class="navigation">
                {{-- <img src="{{ asset('./images/search_icn_black.png') }}" alt="search"> --}}
                {{-- <img src="{{ asset('./images/cart_icn.png') }}" alt="cart"> --}}
                {{-- <i class="fas fa-search" ></i> --}}
                <i class="fas fa-shopping-cart" style="cursor: pointer;"></i>

                @guest
                    {{-- <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i></a> --}}
                    <a href="#" class="login-popup-btn"><i class="fas fa-sign-in-alt"></i></a>
                @endguest
                @auth
                    <div class="relative inline-block text-left">
                        <div>
                            <button type="button"
                                class="flex items-center justify-center w-full rounded-md  px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
                                id="profile-menu">
                                <i class="fas fa-user user-icon"></i>
                            </button>
                        </div>
                        <div
                            class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 profile-menu">
                            <div class="py-1 ">
                                {{-- <a href="#"
                                    class="block block px-4 py-2 text-md text-gray-700 hover:bg-gray-100 hover:text-gray-900"
                                    role="menuitem">
                                    <span class="flex flex-col">
                                        Log out
                                        
                                    </span>
                                    
                                </a> --}}
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                @endauth
            </div>
        </div>
        <div class="row">
            <a href="{{ route('home') }}" class="section home">Начало</a>
            <a href="{{ route('shop') }}" class="section shop">Магазин</a>
            <a href="{{ route('blog') }}" class="section blog">Блог</a>
            <a href="{{ route('contact') }}" class="section contact">Контакти</a>
        </div>
    </header>

    <!-- Mobile menue -->
    <div class="mobile-header" style="display: none">
        <div class="row">
            <a class="header-popup-btn" href="">
                <i class="fas fa-grip-lines"></i>
            </a>
            <a href="{{ route('home') }}">
                <img class="title w-28" src="{{ asset('./images/logo.png') }}" alt="logo">
            </a>
            <div class="group">
                <a href=""><i class="fas fa-shopping-cart"></i></a>
                @guest
                    {{-- <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i></a> --}}
                    <a href="#" class="login-popup-btn"><i class="fas fa-sign-in-alt"></i></a>
                @endguest
                @auth
                    <a href=""><i class="fas fa-user"></i></a>
                @endauth
            </div>
        </div>

        <div class="relative bg-white menu-content">
            <div class="flex flex-col sm:flex-row sm:justify-around">
                <div class="w-72 h-screen">
                    <nav class="mt-10 px-6 ">
                        <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors duration-200  text-gray-600 rounded-lg"
                            href="{{ route('home') }}">
                            <span class="mx-4 text-lg font-normal">
                                Начало
                            </span>
                            <span class="flex-grow text-right">
                            </span>
                        </a>
                        <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors duration-200  text-gray-800 rounded-lg "
                            href="{{ route('shop') }}">

                            <span class="mx-4 text-lg font-normal">
                                Магазин
                            </span>
                            <span class="flex-grow text-right">
                            </span>
                        </a>
                        <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors duration-200  text-gray-600 rounded-lg "
                            href="{{ route('blog') }}">

                            <span class="mx-4 text-lg font-normal">
                                Блог
                            </span>
                        </a>
                        <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors duration-200  text-gray-600 rounded-lg "
                            href="{{ route('contact') }}">
                            <span class="mx-4 text-lg font-normal">
                                Контакти
                            </span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>


    </div>

    {{-- Login Popup --}}
    @guest
        @include('popup.login_register')
    @endguest

    {{-- Cart Popup --}}
    @if (isset($product))
        @include('popup.cart')
    @endif

    @push('page-scripts')
        <script>
            function responsiveHeaderPopup() {
                $(".mobile-header .header-popup-btn").click(function(e) {
                    e.preventDefault();

                    // $('.mobile-header .row').toggleClass('active');
                    $('.mobile-header .navigation').toggleClass('active');
                });
            }
            $(document).ready(function() {
                responsiveHeaderPopup();
            });
        </script>
    @endpush

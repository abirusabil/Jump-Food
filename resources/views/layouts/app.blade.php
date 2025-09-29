<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jump-Food</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white py-3 nav-underline fixed-top">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <img src="{{ asset('storage/img/asset/logo-2.png') }}" class="img-fluid" width="120"  alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto ">
                        <!-- Authentication Links -->
                        <li class="nav-item px-lg-5 py-1 d-flex align-items-center">
                            <a class="nav-link py-0 px-0 {{ Request::is('Home','/') ? 'active' : '' }}" href="/Home">Home</a>
                        </li>
                        <li class="nav-item px-lg-5 py-1 d-flex align-items-center">
                            <a class="nav-link py-0 px-0 {{ Request::is('Product') ? 'active' : '' }}" href="/Product">Product</a>
                        </li>
                        <li class="nav-item px-lg-5 py-1 me-lg-5 d-flex align-items-center">
                            <a class="nav-link py-0 px-0 {{ Request::is('Contact') ? 'active' : '' }} " href="/Contact">Contact Us</a>
                        </li>
                        @auth
                            @php
                            $Profile = \App\Models\Profile::where('UserId', Auth::user()->id)->first();
                            @endphp
                            @if (Auth::user()->akses == 1)
                                <li class="nav-item py-1  pe-2 d-flex align-items-center">

                                    <a id="navbarDropdown" class="nav-link py-0 px-0 {{ Request::is('MyProfile','MyProfile/*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item"href="/Admin">Admin Page</a>
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
                            @else
                            <div class="d-flex px-2">
                                <li class="nav-item py-1  pe-2 d-flex align-items-center">

                                    <a id="navbarDropdown" class="nav-link py-0 px-0 {{ Request::is('MyProfile','MyProfile/*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/MyProfile">
                                            My Profile
                                        </a>
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
                                <img src="{{ asset('storage/img/asset/' . ($Profile->Picture ?? 'default.jpg')) }}" class=" img-thumbnail img-icon rounded-circle p-0" width="150" alt="...">
                                    </div>
                            @endif
                        @else
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="btn bg-body-secondary rounded-pill px-4" href="{{ route('login') }}">{{ __('Sign In') }}</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="fixed-bottom ">
            &copy Jump-Food
        </footer>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#multiple-items').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true
                    }
                },

                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
            });
        });



    </script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const labels = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Heart Rate (/Min)',
                data: Array.from({ length: 7 }, () => Math.floor(Math.random() * (100 - 70 )) + 70),
                fill: false,
                borderColor: '#FFC312',
                tension: 0.1
            },
            {
                label: 'Oxygen Saturation (%)',
                data: Array.from({ length: 7 }, () => Math.floor(Math.random() * (100 - 95 )) + 95),
                fill: false,
                borderColor: '#0D63F3',
                tension: 0.1
            },
            {
                label: 'Blood Pressure (mmHg)',
                data: Array.from({ length: 7 }, () => Math.floor(Math.random() * (120 - 80 )) + 80),
                fill: false,
                borderColor: '#FB1818',
                tension: 0.1
            },
            {
                label: 'Burned Calories(/10/kal)',
                data: Array.from({ length: 7 }, () => Math.floor(Math.random() * (300 - 200 )) + 200),
                fill: false,
                borderColor: '#009432',
                tension: 0.1
            }
        ]
        };
        const config = {
            type: 'line',
            data: data,
            options: {
                plugins: {
                    legend: {
                        position: 'bottom',

                    }
                }
            }
        };

        new Chart(ctx, config);
    </script>


</body>

</html>

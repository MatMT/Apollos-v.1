<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    @vite('resources/css/app.css')
    @vite('resources/css/session.css')
    <title>@yield('title') | Apollo's</title>
    <script>
        function uncheckRadio(rbutton) {
            rbutton.checked = (rbutton.checked) ? false : true;
        }
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="text-base text-white">



    <div class="body h-full w-full min-h-screen">



        <div class="content min-h-screen max-w-screen">

            <div class="min-h-screen w-full signup-container">
                <header>
                    <a class="logo-text" href="{{ url('/') }}">Apollo's</a>

                    <nav>
                        <ul>
                            @auth
                                <li><a href="{{ url('/home') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">{{ __('Home ') }}</a>
                                </li>
                            @else
                                <li><a href="{{ route('login') }}">{{ __('Log in') }}</a></li>
                                <li><a href="{{ route('signup') }}">{{ __('Sign up') }}</a></li>
                                @endif
                            </ul>

                        </nav>
                    </header>
                    <div class="center-form flex items-center justify-center min-h-screen">

                        <div class="form-work my-40 p-6 rounded-md">
                            <div class="logo flex justify-center items-center">
                                <img src="{{ asset('assets/apolloLogoCompleteWht.svg') }}" class=" block text-center">
                            </div> {{-- logo --}}
                            <h1 class="mt-4 font-titulo text-lg font-semibold text-center">@yield('message')
                            </h1>
                            <div class="session-form-container flex justify-center">
                                @yield('body')
                            </div> {{-- session-form-container --}}
                        </div> {{-- form-work --}}
                    </div> {{-- center-form --}}
                </div> {{-- signup-container --}}
            </div> {{-- content --}}
        </div> {{-- body --}}
    </body>

    <script>
        window.addEventListener("scroll", function() {
            var header = document.querySelector("header");
            var logo = document.querySelector(".logo-text");
            var logo_zona = document.querySelector(".logo_zona");
            var img_logo = document.querySelector(".img_logo");
            header.classList.toggle("abajo", window.scrollY > 20);
            logo.classList.toggle("abajo", window.scrollY > 0);
            logo_zona.classList.toggle("abajo", window.scrollY > 0);
            img_logo.classList.toggle("abajo", window.scrollY > 20);
        });
    </script>

    </html>

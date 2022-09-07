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
</head>

<body class="text-base text-white">
        

    <div class="body h-full w-full min-h-screen">

        <div class="content min-h-screen max-w-screen">
            <div class="min-h-screen w-full signup-container">

                <div class="center-form flex items-center justify-center min-h-screen">

                    <div class="form-work my-10 p-6 rounded-md">
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

</html>

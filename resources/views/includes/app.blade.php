<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>@yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        * {
            font-family: Montserrat;
        }

        .blurred-background {
            backdrop-filter: blur(8px);
        }
    </style>
</head>

<body class="bg-white">
    <div class="min-h-screen flex flex-col">
        @include('includes.navbar')
        <div class="flex">
            <div class="md:ml-0 flex-1">
                <main class="h-full bg-white">
                    @yield('content')
                </main>
            </div>
        </div>
        @include('includes.footer')
    </div>
    <script>
        const sideNav = document.getElementById('sideNav');
        const navBar = document.getElementById('navBar');
        const menuBtn = document.getElementById('menuBtn');
        if (sideNav) {
            menuBtn.addEventListener('click', () => {
                sideNav.classList.toggle('hidden');
                navBar.classList.toggle('hidden');
            });
        } else {
            menuBtn.addEventListener('click', () => {
                navBar.classList.toggle('hidden');
            });
        }
    </script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('js')
</body>

</html>

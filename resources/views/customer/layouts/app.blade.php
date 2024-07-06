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

</head>

<body class="bg-white">
    <div class="min-h-screen flex flex-col z-0">
        @include('customer.layouts.navbar')
        <div class="relative">
            @include('customer.layouts.sidebar')
            <div class="static z-10">
                <div class="md:ml-56 flex-1 p-4 ">
                    <main class="h-full">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
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
</body>

</html>

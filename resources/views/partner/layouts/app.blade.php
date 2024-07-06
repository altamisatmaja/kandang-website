<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>@yield('title')</title>
</head>

<body class="relative antialiased bg-white">
    <div class="min-h-screen bg-gray-50/50">
        @include('partner.layouts.sidebar')
        <div class="xl:ml-72">
            @include('partner.layouts.navbar')
            <div class="px-5">
                @yield('content')
            </div>
        </div>
    </div>
    @stack('js')
</body>

</html>

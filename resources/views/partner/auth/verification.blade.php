<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <title>Partner | Verifikasi</title>
</head>

{{-- terserah --}}

<body>
    <div>
        @include('includes.navbar')
        <div class="relative flex min-h-screen flex-col items-center justify-center overflow-hidden py-6 sm:py-12 bg-white">
            <div class="max-w-xl px-5 text-center">
              <h2 class="mb-2 text-[42px] font-bold text-zinc-800">Check your inbox</h2>
              <p class="mb-2 text-lg text-zinc-500">We are glad, that you're with us ? We've sent you a verification link to the email address <span class="font-medium text-indigo-500">mail@yourdomain.com</span>.</p>
              <a href="/login" class="mt-3 inline-block w-96 rounded bg-primarybase px-5 py-3 font-medium text-white shadow-md shadow-indigo-500/20 hover:bg-indigo-700">Open the App →</a>
            </div>
          </div>
    </div>
    <script>
        $(function(){
            
        });
    </script>
</body>
</html>

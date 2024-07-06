@extends('includes.app')

@section('title', 'eFarm | Login')

@section('content')
    <style>
        * {
            font-family: Montserrat;
        }
    </style>
    <div>

        <section class="bg-gray-50">
            <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-textbase">
                    <img class="w-56 mr-2" src="{{ asset('logo.svg') }}" alt="logo">
                </a>
                @if (session('status'))
                    <div
                        class='flex items-center text-white w-full sm:max-w-md bg-red-400 shadow-md rounded-lg mx-auto mb-7'>
                        <div class='w-10 border-r px-2'>
                            <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                                <path clip-rule="evenodd" fill-rule="white" fill="white"
                                    d="M109-120q-11 0-20-5.5T75-140q-5-9-5.5-19.5T75-180l370-640q6-10 15.5-15t19.5-5q10 0 19.5 5t15.5 15l370 640q6 10 5.5 20.5T885-140q-5 9-14 14.5t-20 5.5H109Zm69-80h604L480-720 178-200Zm302-40q17 0 28.5-11.5T520-280q0-17-11.5-28.5T480-320q-17 0-28.5 11.5T440-280q0 17 11.5 28.5T480-240Zm0-120q17 0 28.5-11.5T520-400v-120q0-17-11.5-28.5T480-560q-17 0-28.5 11.5T440-520v120q0 17 11.5 28.5T480-360Zm0-100Z" />
                            </svg>

                        </div>

                        <div class='flex items-center px-2 py-3'>
                            <div class='mx-3'>
                                <p>{{ session('status') }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <div class="justify-center align-middle items-center flex">
                            <h1 class="text-2xl font-bold leading-tight tracking-tight text-textbase md:text-2xl">
                                Selamat datang pengguna 👋
                            </h1>
                        </div>
                        <form class="space-y-4 md:space-y-6" action="{{ route('customer.login.store') }}" method="POST">
                            @csrf
                            <div>
                                <label for="email" class="block mb-2 text-md font-medium text-textbase">Email
                                    anda</label>
                                <input type="email" name="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-textbase sm:text-sm rounded-lg focus:ring-primarybase focus:border-primarybase block w-full p-2.5"
                                    placeholder="Masukkan email anda" required>
                                @error('email')
                                    <span class="text-red-500 mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="password" class="block mb-2 text-md font-medium text-textbase">Password
                                    anda</label>
                                <input type="password" name="password" id="password" placeholder="••••••••"
                                    class="bg-gray-50 border border-gray-300 text-textbase sm:text-sm rounded-lg focus:ring-primarybase focus:border-primarybase block w-full p-2.5"
                                    required>
                                @error('password')
                                    <span class="text-red-500 mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <a href="{{ route('password.request') }}"
                                    class="text-sm font-semibold text-primarybase hover:underline">Lupa
                                    password?</a>
                            </div>
                            <button type="submit"
                                class="w-full text-white bg-primarybase hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-md px-5 py-2.5 text-center">Masuk</button>
                            <p class="text-sm font-light text-gray-500 ">
                                Belum punya akun? <a href="{{ route('register') }}"
                                    class="font-semibold text-primarybase hover:underline">Daftar</a>
                            </p>
                        </form>
                        <a href="{{ route('customer.google') }}"
                            class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
                            <div class="px-4 py-3">
                                <svg class="h-6 w-6" viewBox="0 0 40 40">
                                    <path
                                        d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                        fill="#FFC107" />
                                    <path
                                        d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                                        fill="#FF3D00" />
                                    <path
                                        d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                                        fill="#4CAF50" />
                                    <path
                                        d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                        fill="#1976D2" />
                                </svg>
                            </div>
                            <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">Login melalui Google</h1>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {
            function setCookie(name, value, days) {
                var expires = '';
                if (days) {
                    var date = new Date();
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                    expires = "; expires=" + date.toUTCString();
                }
                document.cookie = name + "=" + (value || "") + expires + "; path=/";
            }

            $('.form-customer-login').submit(function(e) {
                e.preventDefault();
                const email = $('#email').val();
                const password = $('#password').val();
                const csrf_token = $('meta[name="csrf-token"]').attr('content')

                console.log(csrf_token);

                $.ajax({
                    url: '/customer/login',
                    type: 'POST',
                    data: {
                        email: email,
                        password: password,
                        _token: csrf_token,
                    },
                    success: function(data) {
                        if (!data.success) {
                            alert(data.message);
                        } else if (data.token) {
                            localStorage.setItem('token-efarm', data.token);
                            window.location.href = "/personal/account";
                        } else {
                            alert("Token tidak ditemukan dalam respon dari server.");
                        }
                    }
                })
            })
        });
    </script>
    @push('js')
        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    var scrollPosition = $(window).scrollTop();
                    var blurTriggerPosition = 200;

                    if (scrollPosition > blurTriggerPosition) {
                        $('.sticky').addClass('blurred-background');
                    } else {
                        $('.sticky').removeClass('blurred-background');
                    }
                });
            });
        </script>
    @endpush
@endsection

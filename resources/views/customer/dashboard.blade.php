@extends('customer.layouts.app')

@section('title', 'Customer | Account')

@section('content')
    @if (session('success'))
        <div id="successMessage"
            class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
            <div class="relative w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
                data-dismissible="alert">
                <div class="absolute top-4 left-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="mt-px h-6 w-6">
                        <path fill-rule="evenodd"
                            d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-8 mr-12">
                    <h5 class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                        Berhasil
                    </h5>
                    <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                        {{ session('success') }}
                    </p>
                </div>
                <div data-dismissible-target="alert" data-ripple-dark="true"
                    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                    <div role="button" class="w-max rounded-lg p-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="px-2">
        <div class="pb-3">
            <ol class="flex items-center gap-4">
                <li class="cursor-pointer">
                    <div
                        class="flex items-center text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                        <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <a href="{{ route('admin.dashboard') }}">Beranda </a>
                    </div>
                </li>
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ route('admin.category.list') }}"> Dashboard </a>
                    </div>
                </li>
                {{-- <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ route('admin.category.add') }}"> Tambah kategori hewan </a>
                    </div>
                </li> --}}
            </ol>
        </div>

        <div class="flex flex-col text-textbase w-full">
            <div
                class="relative flex flex-col items-center rounded-[20px] w-full mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500">
                <div class="mt-2 mb-8 w-full">
                    <h4 class=" text-2xl font-bold text-textbase">
                        Semua informasi Anda 🤩
                    </h4>
                </div>
                <div class="grid grid-cols-2 gap-4 w-full">
                    <div class="flex flex-col justify-center  py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Nama</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->nama }}
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-start justify-center  bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Nomor telepon</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->no_telp != null ? $user->no_telp : 'Belum diisi' }}
                        </p>
                    </div>
                </div>

                <div class="mt-4 mb-8 w-full">
                    <h4 class=" text-2xl font-bold text-textbase">
                        Informasi akun Anda 😁
                    </h4>
                </div>
                <div class="grid grid-cols-2 gap-4 w-full">
                    <div
                        class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Username</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->username }}
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Email</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->email }}
                        </p>
                    </div>
                </div>

                <div class="mt-4 mb-8 w-full">
                    <h4 class=" text-2xl font-bold text-textbase">
                        Informasi alamat Anda 🤗
                    </h4>
                </div>
                <div class="grid grid-cols-2 gap-4 w-full">
                    <div
                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Provinsi</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->provinsi_user != null ? $user->provinsi_user : 'Belum diisi' }}
                        </p>
                    </div>

                    <div
                        class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Kabupaten</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->kabupaten_user != null ? $user->provinsi_user : 'Belum diisi' }}
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Kelurahan</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->kecamatan_user != null ? $user->provinsi_user : 'Belum diisi' }}
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Kelurahan</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->kelurahan_user != null ? $user->provinsi_user : 'Belum diisi' }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
        </d>
        @push('js')
            <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        @endpush
    @endsection

@extends('partner.layouts.app')

@section('title', 'Dashboard | Account')

@section('content')
    <div class="">
        <div class="pb-5">
            <ol class="flex items-start gap-4">
                <li>
                    <div class="flex items-center text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <a href="{{ route('partner.dashboard') }}">Beranda </a>
                    </div>
                </li>
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ route('partner.account') }}"> Informasi akun </a>
                    </div>
                </li>
            </ol>
        </div>
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
                        <h5
                            class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
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

        @if (session('error'))
            <div id="successMessage"
                class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                <div class="relative w-full max-w-screen-md rounded-lg bg-red-500 px-4 py-4 text-base text-white"
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
                        <h5
                            class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                            Gagal
                        </h5>
                        <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                            {{ session('error') }}
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
        <div class="w-full">
            <div class="mb-5">
                <h3 class="font-semibold text-2xl text-textbase">Semua informasi anda 👋</h3>
            </div>
            <div class="container mx-auto">
                <div class="md:flex no-wrap">
                    <div class="w-full">
                        <div class="mt-4">
                            <div class="flex  space-x-2 font-semibold text-textbase leading-8">
                                <span clas="text-green-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                        width="24px" fill="#44444">
                                        <path
                                            d="M246.15-251.54h227.7v-11.85q0-15.3-8.49-28.35-8.48-13.06-23.67-20.26-19.62-8.62-39.73-12.92-20.11-4.31-41.96-4.31t-41.96 4.31q-20.11 4.3-39.73 12.92-15.19 7.2-23.67 20.26-8.49 13.05-8.49 28.35v11.85Zm337.7-60.77h112.3q10.34 0 17.09-6.75 6.76-6.75 6.76-17.08 0-10.32-6.76-17.09-6.75-6.77-17.09-6.77h-112.3q-10.34 0-17.09 6.75-6.76 6.75-6.76 17.08 0 10.32 6.76 17.09 6.75 6.77 17.09 6.77ZM359.91-360q22.4 0 38.17-15.68 15.77-15.68 15.77-38.08 0-22.39-15.68-38.16-15.68-15.77-38.08-15.77t-38.17 15.68q-15.77 15.68-15.77 38.07 0 22.4 15.68 38.17Q337.51-360 359.91-360Zm223.94-60h112.3q10.34 0 17.09-6.75 6.76-6.75 6.76-17.08 0-10.32-6.76-17.09-6.75-6.77-17.09-6.77h-112.3q-10.34 0-17.09 6.75-6.76 6.75-6.76 17.08 0 10.32 6.76 17.09 6.75 6.77 17.09 6.77ZM172.31-100Q142-100 121-121q-21-21-21-51.31v-415.38Q100-618 121-639q21-21 51.31-21H380v-140q0-24.75 17.63-42.37Q415.25-860 440-860h80q24.75 0 42.37 17.63Q580-824.75 580-800v140h207.69Q818-660 839-639q21 21 21 51.31v415.38Q860-142 839-121q-21 21-51.31 21H172.31Zm0-60h615.38q5.39 0 8.85-3.46t3.46-8.85v-415.38q0-5.39-3.46-8.85t-8.85-3.46H580v15.39q0 24.53-17.73 42.26-17.73 17.73-42.27 17.73h-80q-24.54 0-42.27-17.73Q380-560.08 380-584.61V-600H172.31q-5.39 0-8.85 3.46t-3.46 8.85v415.38q0 5.39 3.46 8.85t8.85 3.46ZM440-584.61h80V-800h-80v215.39ZM480-380Z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide text-xl">Informasi pribadi anda</span>
                            </div>
                            <div class="text-textbase mb-10">
                                <div class="grid md:grid-cols-2 text-md">
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Nama</div>
                                        <div class="py-2">{{ $partner->nama_partner }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Nama peternakan</div>
                                        <div class="py-2">{{ $partner->nama_perusahaan_partner }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Jenis kelamin</div>
                                        <div class="py-2">{{ $partner->jenis_kelamin }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Nomor Handphone</div>
                                        <div class="py-2">
                                            {{ $partner->no_hp != null ? $partner->no_hp : 'Harap mengisi nomor hp' }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Provinsi</div>
                                        <div class="py-2">{{ $partner->provinsi_partner }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Kabupaten</div>
                                        <div class="py-2">{{ $partner->kabupaten_partner }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Kecamatan</div>
                                        <div class="py-2">
                                            {{ $partner->kecamatan_partner }}
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Kelurahan</div>
                                        <div class="py-2">{{ $partner->kelurahan_partner }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Alamat</div>
                                        <div class="py-2">{{ $partner->alamat_partner }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Tanggal lahir</div>
                                        <div class="py-2">{{ \Carbon\Carbon::parse($partner->tanggal_lahir)->format('d M Y') }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Latitude</div>
                                        <div class="py-2">{{ $partner->latitude }}</div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div class="py-2 font-semibold">Longitude</div>
                                        <div class="py-2">{{ $partner->longitude }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-4"></div>
                        <div class="py-3 shadow-sm rounded-sm">
                            <div class="grid grid-cols-2 gap-x-5">
                                <div class="bg-white">
                                    <div class="flex  space-x-2 font-semibold text-textbase leading-8">
                                        <span clas="text-green-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#44444">
                                                <path
                                                    d="M200-72.31q-12.77 0-21.38-8.62-8.62-8.61-8.62-21.38t8.62-21.38q8.61-8.62 21.38-8.62h560q12.77 0 21.38 8.62 8.62 8.61 8.62 21.38t-8.62 21.38q-8.61 8.62-21.38 8.62H200Zm0-755.38q-12.77 0-21.38-8.62-8.62-8.61-8.62-21.38t8.62-21.38q8.61-8.62 21.38-8.62h560q12.77 0 21.38 8.62 8.62 8.61 8.62 21.38t-8.62 21.38q-8.61 8.62-21.38 8.62H200ZM480-420q45.77 0 77.88-32.11Q590-484.23 590-530t-32.12-77.88Q525.77-640 480-640q-45.77 0-77.88 32.12Q370-575.77 370-530q0 45.77 32.12 77.89Q434.23-420 480-420ZM172.31-180Q142-180 121-201q-21-21-21-51.31v-455.38Q100-738 121-759q21-21 51.31-21h615.38Q818-780 839-759q21 21 21 51.31v455.38Q860-222 839-201q-21 21-51.31 21H172.31Zm83.85-60q45-48.31 101.69-74.15Q414.54-340 480-340q65.46 0 122.15 25.85 56.69 25.84 101.69 74.15h83.85q4.62 0 8.46-3.85 3.85-3.84 3.85-8.46v-455.38q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H172.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46v455.38q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85h83.85Zm91.84 0h264q-29-20-62.5-30T480-280q-36 0-69.5 10T348-240Zm132-240q-20.85 0-35.42-14.57Q430-509.15 430-530q0-20.84 14.58-35.42Q459.15-580 480-580t35.42 14.58Q530-550.84 530-530q0 20.85-14.58 35.43Q500.85-480 480-480Zm0 0Z" />
                                            </svg>
                                        </span>
                                        <span class="tracking-wide text-xl mb-5">Informasi akun anda</span>
                                    </div>
                                    <div class="grid md:grid-cols-1 text-md">
                                        <div class="grid grid-cols-2">
                                            <div class="py-2 font-semibold">Nama akun</div>
                                            <div class="py-2">{{ $user->nama }}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="py-2 font-semibold">Username akun</div>
                                            <div class="py-2">{{ $user->username }}</div>
                                        </div>
                                        <div class="grid grid-cols-2">
                                            <div class="py-2 font-semibold">Email akun</div>
                                            <div class="py-2">{{ $user->email }}</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white">
                                    <div class="flex  space-x-2 font-semibold text-textbase leading-8">
                                        <span clas="text-green-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                viewBox="0 -960 960 960" width="24px" fill="#44444">
                                                <path
                                                    d="M860-707.69v455.38Q860-222 839-201q-21 21-51.31 21H172.31Q142-180 121-201q-21-21-21-51.31v-455.38Q100-738 121-759q21-21 51.31-21h615.38Q818-780 839-759q21 21 21 51.31Zm-700 83.85h640v-83.85q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H172.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46v83.85Zm0 127.68v243.85q0 4.62 3.85 8.46 3.84 3.85 8.46 3.85h615.38q4.62 0 8.46-3.85 3.85-3.84 3.85-8.46v-243.85H160ZM160-240v-480 480Z" />
                                            </svg>
                                        </span>
                                        <span class="tracking-wide text-xl">Informasi rekening anda</span>
                                    </div>
                                    <div class="w-72 p-3 mt-3 bg-gradient-to-r from-gray-600 to-primarybase rounded-lg">
                                        <h1 class="text-3xl font-semibold text-gray-100 pb-4">{{ $partner->nama_pemilik_rekening != NULL ? $partner->nama_pemilik_rekening : 'Harap diisi' }}</h1>
                                        <span class="text-xs  text-gray-200 shadow-2xl">{{ $partner->nama_bank != NULL ? $partner->nama_bank : 'Harap diisi' }}</span>
                                        <div class="flex justify-between items-center pt-4">
                                            <div class="flex flex-col">
                                                <span class="text-xs text-gray-300 font-bold">{{ $partner->diubah }}</span>
                                                <span class="text-xs text-gray-300 font-bold">{{ \Carbon\Carbon::parse($partner->change_at)->format('d M Y') ?: 'Harap diisi' }}</span>
                                            </div>
                                            <img src="https://img.icons8.com/offices/80/000000/sim-card-chip.png"
                                                width="48" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        @push('js')
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var successMessage = document.getElementById('successMessage');

                    // Sembunyikan pesan sukses saat diklik
                    successMessage.addEventListener('click', function() {
                        successMessage.style.display = 'none';
                    });
                });
            </script>
        @endpush
    @endsection

@extends('admin.layouts.app')

@section('title', 'Admin | Partner')

@section('content')
    <!-- component -->
    <section class="container px-4 mx-auto">
        <div class="pb-5">
            <ol class="flex items-center gap-4">
                <li>
                    <div
                        class="flex items-center text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <a  class="text-textbase" href="{{ route('admin.dashboard') }}">Beranda </a>
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
                        <a class="text-textbase"  href="{{ route('admin.partner.from.verified') }}"> Partner yang diverifikasi  </a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    @if (session('success'))
                        <div id="successMessage"
                            class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                            <div class="relative w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
                                data-dismissible="alert">
                                <div class="absolute top-4 left-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="mt-px h-6 w-6">
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
                                    <p
                                        class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                                        {{ session('success') }}
                                    </p>
                                </div>
                                <div data-dismissible-target="alert" data-ripple-dark="true"
                                    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                                    <div role="button" class="w-max rounded-lg p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" class="mt-px h-6 w-6">
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
                                    <p
                                        class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                                        {{ session('error') }}
                                    </p>
                                </div>
                                <div data-dismissible-target="alert" data-ripple-dark="true"
                                    class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                                    <div role="button" class="w-max rounded-lg p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="relative w-full mb-5 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-textbase text-xl">Daftar partner terverifikasi</h3>
                    </div>
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200 ">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        <div class="flex items-center gap-x-3">
                                            <button class="flex items-center gap-x-2">
                                                <span>No</span>
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Tanggal
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Status
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Nama Partner
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Alamat
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Aksi
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                @foreach ($partner as $partners)
                                    <tr>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700  whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <span>{{ $loop->iteration }}</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $partners->created_at->format('d M y') }}</td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            @if ($partners->status == 'Sudah diverifikasi')
                                                <div
                                                    class="inline-flex items-center px-5 py-1 text-textbase rounded-full gap-x-2 bg-yellow-100/60">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 -960 960 960" width="24px" fill="#AAC14C">
                                                        <path d="M382-240 154-468l57-57 171 171 367-367 57 57-424 424Z" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">{{ $partners->status }}</h2>
                                                </div>
                                            @else
                                                <div
                                                    class="inline-flex items-center px-5 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 -960 960 960" width="24px" fill="#EA3323">
                                                        <path
                                                            d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">{{ $partners->status }}</h2>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-8 h-8 rounded-full"
                                                    src="/uploads/{{ $partners->foto_profil }}" alt="">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800 ">
                                                        {{ $partners->nama_partner }}
                                                    </h2>
                                                    <p class="text-xs font-normal text-gray-600">
                                                        {{ $partners->users->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 text-center">
                                            {{ $partners->alamat_partner }}, {{ $partners->kelurahan_partner }},
                                            {{ $partners->kecamatan_partner }}, {{ $partners->kabupaten_partner }},
                                            {{ $partners->provinsi_partner }}
                                        </td>
                                        <td class="px-4 py-4 text-sm whitespace-nowrap">
                                            <div class="flex items-center gap-x-6">
                                                <a href="{{ route('admin.partner.show', $partners->id) }}">
                                                    <button
                                                        class="text-gray-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        Detail
                                                    </button>
                                                </a>
                                                {{-- @if ($partners->status == 'Sudah diverifikasi')
                                                <form
                                                    action="{{ route('admin.partner.from.nonactive.update', $partners->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        class="text-primarybase transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        Nonaktif
                                                    </button>
                                                </form>
                                                @else
                                                <form
                                                    action="{{ route('admin.partner.from.active.update', $partners->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <button type="submit"
                                                        class="text-primarybase transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        Aktfikan
                                                    </button>
                                                </form>
                                                @endif --}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

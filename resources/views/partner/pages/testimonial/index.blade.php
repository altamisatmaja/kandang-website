@extends('partner.layouts.app')

@section('title', 'Dashboard | Testimonial')

@section('content')
    <section class="container mx-auto mb-5">
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
                        <a href="{{ route('partner.testimonial.list') }}"> Ulasan </a>
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

        <div class="flex flex-col ">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="mb-5 w-full">
                        <div class="mb-3">
                            <h3 class="font-semibold text-2xl text-textbase">Ulasan 👋</h3>
                        </div>
                        <p class="text-lg text-textbase">
                            Lihat ulasan dari pembeli!
                        </p>
                    </div>
                    <div class="overflow-hidden border border-gray-200  md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 ">
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
                                        Judul Testimoni
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Deskripsi testimoni
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Pelanggan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Product
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                @foreach ($testimonials as $testimonial)
                                    <tr>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 ">
                                            <div class="inline-flex items-center gap-x-3">
                                                <span>{{ $loop->iteration }}</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 ">
                                            {{ $testimonial->created_at->format('d M Y') }}</td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 ">
                                            <div
                                                class="inline-flex items-center px-3 py-1 text-gray-500 rounded-full gap-x-2 bg-gray-100/60 ">
                                                <h2 class="text-sm font-normal">{{ $testimonial->nama_testimoni }}</h2>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 ">
                                            <div
                                                class="inline-flex items-center px-3 py-1 text-gray-500 rounded-full gap-x-2 bg-gray-100/60 ">
                                                <h2 class="text-sm font-normal">{{ $testimonial->deskripsi }}</h2>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 ">
                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-8 h-8 rounded-full"
                                                    src="/uploads/{{ $testimonial->user->profile_photo_path }}"
                                                    alt="">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800  ">
                                                        {{ $testimonial->user->nama }}</h2>
                                                    <p class="text-xs font-normal text-gray-600">Bergabung sejak
                                                        {{ $testimonial->user->created_at->diffForHumans() }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 ">
                                            <div class="flex flex-col justify-center">
                                                <img class="object-cover w-16 h-16 rounded-lg"
                                                    src="/uploads/{{ $testimonial->product->gambar_hewan }}"
                                                    alt="">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800  ">
                                                        {{ $testimonial->product->nama_product }}</h2>
                                                    <p class="text-xs font-normal text-gray-600">Rp
                                                        {{ number_format($testimonial->product->harga_product, 0, ',', '.') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm ">
                                            <div class="flex items-center gap-x-6">
                                                {{-- <a href="{{ route('partner.testimonial.show', $testimonial->slug_testimonial) }}">
                                                    <button
                                                        class="text-gray-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        Lihat
                                                    </button>
                                                </a> --}}
                                                <a
                                                    href="{{ route('partner.testimonial.reply', [$testimonial->product->slug_product, $testimonial->slug_testimonial]) }}">
                                                    <button
                                                        class="text-primarybase transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 -960 960 960" width="24px" fill="#44444">
                                                            <path
                                                                d="m241.54-260-80.08 80.07q-17.07 17.08-39.27 7.74Q100-181.54 100-205.85v-581.84Q100-818 121-839q21-21 51.31-21h615.38Q818-860 839-839q21 21 21 51.31v190q0 12.77-8.62 21.38-8.61 8.62-21.38 8.62t-21.38-8.62q-8.62-8.61-8.62-21.38v-190q0-4.62-3.85-8.46-3.84-3.85-8.46-3.85H172.31q-4.62 0-8.46 3.85-3.85 3.84-3.85 8.46v523.08L216-320h352.46q12.77 0 21.39 8.62 8.61 8.61 8.61 21.38t-8.61 21.38q-8.62 8.62-21.39 8.62H241.54Zm516.92 0H730q-15.46 0-25.81-10.35-10.34-10.34-10.34-25.81v-139.99q0-15.46 10.34-25.81 10.35-10.35 25.81-10.35h80q14.07 0 22.19 11.77 8.12 11.77 2.88 25.23l-41.92 107.62h36.31q15.08 0 23.31 12.46 8.23 12.46 1.38 25.92l-78.61 167.08q-3.23 6.61-10.16 5.11-6.92-1.5-6.92-8.73V-260ZM160-320v27.69V-800v480Z" />
                                                        </svg>
                                                    </button>
                                                </a>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
            successMessage.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        });
    </script>
@endsection

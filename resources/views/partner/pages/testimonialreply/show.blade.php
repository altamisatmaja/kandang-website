@extends('partner.layouts.app')

@section('title', 'Dashboard | Testimonial')

@section('content')
    <div class="container mx-auto mb-5">
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

        <div class="pb-5">
            <ol class="flex items-start gap-4">
                <li>
                    <div class="flex items-center text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
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
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a
                            href="{{ route('partner.testimonial.reply', [$testimonials->product->slug_product, $testimonials->slug_testimonial]) }}">
                            Balas ulasan produk {{ $testimonials->product->nama_product }} </a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="flex flex-col justify-start items-start w-full">
            <div class="mb-7 w-full">
                <div class="mb-3">
                    <h3 class="font-semibold text-2xl text-textbase">Balas ulasan dari pembeli 👋</h3>
                </div>
                <p class="text-lg text-textbase">
                    Yuk, biar makin aktif dan banyak pembeli
                </p>
            </div>
            <div class="flex text-xl font-semibold text-textbase">
                <h1>Testimoni dari pembeli {{ $testimonials->user->nama }}</h1>
            </div>
            <div class="mt-5 bg-white w-full rounded-lg mb-10">
                <div class="grid grid-cols-2 w-full">
                    <div class="md:flex flex-row justify-start items-start">
                        <div class="">
                            @if ($testimonials->gambar)
                                <img src="/uploads/{{ $testimonials->gambar }}" alt="foto-testimoni"
                                    class=" w-full object-cover object-center rounded" />
                            @else
                                <p>Tidak ada gambar dari pengguna</p>
                            @endif
                        </div>
                    </div>
                    <div class="ml-10 md:grid md:grid-cols-2">
                        <div class="">
                            <p class="text-textbase font-semibold text-xl">
                                Judul testimoni
                            </p>
                            <p class="text-textbase mt-5 font-medium text-xl">
                                {{ $testimonials->nama_testimoni }}
                            </p>
                        </div>
                        <div class="">
                            <p class="text-textbase font-semibold text-xl">
                                Deskripsi testimoni
                            </p>
                            <p class="text-textbase mt-5 font-medium text-xl">
                                {{ $testimonials->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="{{ route('partner.testimonial.reply.store') }}" method="POST">
            @csrf
            <input hidden name="id_testimonial" value="{{ $testimonials->id }}" type="number">
            <div class="mb-1">
                <label for="deskripsi" class="mb-3 block text-xl font-semibold text-textbase">
                    Masukkan balasan anda
                </label>
                @if ($testimonialsreply)
                    <textarea placeholder="{{ $testimonialsreply->pesan_reply }}" rows="3"
                        class="p-4 text-gray-500 rounded-lg w-full mb-3" disabled>{{ $testimonials->reply }}</textarea>
                    <p class="text-sm text-gray-500">Anda sudah membalas testimoni ini.</p>
                @else
                    <textarea placeholder="Yuk, bangun branding peternakan anda dengan membalas ulasan dari pengguna" name="pesan_reply"
                        rows="3" class="p-4 text-gray-500 rounded-lg w-full mb-3"></textarea>
                        @error('pesan_reply')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                @endif

            </div>
            <div>
                @if ($testimonialsreply)
                <button type="button"
                    class="hover:shadow-form w-full rounded-md bg-gray-300 py-3 px-8 text-center text-base font-semibold text-white outline-none"
                    disabled>Telah Dibalas</button>
            @else
                <button type="submit"
                    class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Balas
                </button>
            @endif

            </div>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
            successMessage.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        });
    </script>
@endsection

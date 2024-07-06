<!-- component -->
@extends('customer.layouts.app')

@section('title', 'Customer | Testimonial')

@section('content')
    <section class="container mx-auto px-2">
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
                        <a href="/">Beranda </a>
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
                        <a href="{{ route('customer.account') }}"> Dashboard </a>
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
                        <a href="{{ route('testimonial.show', $product->slug_product) }}"> Ulasan </a>
                    </div>
                </li>
            </ol>
        </div>
        @if ($testimonial == null)
            <h2 class="text-textbase text-2xl font-semibold mt-5">Berikan ulasan Anda untuk produk ini</h2>
        @else
            <h2 class="text-textbase text-2xl font-semibold mt-5">Ubah ulasan Anda untuk produk ini</h2>
        @endif
        <div class="flex items-center justify-center w-full">
            <div class="mx-auto w-full  bg-white">
                @if ($testimonial == null)
                    <form class="py-6" action="{{ route('testimonial.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                            <label for="nama_testimoni" class="mb-3 block text-xl font-medium text-textbase">
                                Judul testimoni
                            </label>
                            <input type="text" name="nama_testimoni" id="nama_testimoni"
                                placeholder="Masukkan nama testimoni"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="mb-5">
                            <label for="deskripsi" class="mb-3 block text-xl font-medium text-textbase">
                                Masukkan deskripsi testimoni anda
                            </label>
                            <textarea placeholder="Tulis review anda" name="deskripsi" rows="3"
                                class="p-4 text-gray-500 rounded-lg w-full "></textarea>
                        </div>
                        <input hidden name="id_products" value="{{ $product->id }}" type="text">
                        <input hidden name="id_user" value="{{ auth()->user()->id }}" type="text">
                        <div class="mb-6">
                            <label class="mb-5 block text-xl font-semibold text-textbase">
                                Upload File
                            </label>

                            <div class="mb-8">
                                <input type="file" name="gambar" id="gambar" class="sr-only" />
                                <label for="gambar"
                                    class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                    <div>
                                        <span class="mb-2 block text-xl font-semibold text-textbase">
                                            Timpa gambar disini
                                        </span>
                                        <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                            atau
                                        </span>
                                        <span
                                            class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-textbase">
                                            Cari
                                        </span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-lg font-semibold text-white outline-none">
                                Ulas
                            </button>
                        </div>
                    </form>
                @else
                    <form class="py-6" action="/personal/testimonial/update/{{ $testimonial->slug_testimonial }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-5">
                            <label for="nama_testimoni" class="mb-3 block text-xl font-medium text-textbase">
                                Judul testimoni
                            </label>
                            <input value="{{ $testimonial->nama_testimoni }}" type="text" name="nama_testimoni"
                                id="nama_testimoni" placeholder="Masukkan nama testimoni"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div class="mb-5">
                            <label for="deskripsi" class="mb-3 block text-xl font-medium text-textbase">
                                Masukkan deskripsi testimoni anda
                            </label>
                            <textarea placeholder="Tulis review anda" name="deskripsi" rows="3"
                                class="p-4 text-gray-500 rounded-lg w-full ">{{ $testimonial->deskripsi }}</textarea>
                        </div>
                        <input hidden name="id_products" value="{{ $product->id }}" type="text">
                        <input hidden name="id_user" value="{{ auth()->user()->id }}" type="text">
                        <div class="mb-6">
                            <label class="mb-5 block text-xl font-semibold text-textbase">
                                Upload File
                            </label>

                            <div class="mb-8">
                                <input type="file" name="gambar" id="gambar" class="sr-only" />
                                <label for="gambar"
                                    class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                    <div>
                                        <span class="mb-2 block text-xl font-semibold text-textbase">
                                            Timpa gambar disini
                                        </span>
                                        <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                            atau
                                        </span>
                                        <span
                                            class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-textbase">
                                            Cari
                                        </span>
                                    </div>
                                </label>
                            </div>
                            <div id="image-preview" class="mt-4"></div>
                            <span id="file-error" class="text-red-500"></span>
                        </div>

                        <div>
                            <button type="submit" onclick="return confirm('Apakah anda yakin ingin mengubah?')"
                                class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-lg font-semibold text-white outline-none">
                                Ubah Ulasan
                            </button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @if ($testimonial->gambar && !$errors->has('gambar'))
        <script>
            $(document).ready(function() {
                var fileName = "{{ $testimonial->gambar }}";
                $('#image-preview').html(`
                <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                    <div class="flex items-center justify-between">
                        <span class="truncate pr-3 text-base font-medium text-textbase">
                            ${fileName}
                        </span>
                    </div>
                </div>
            `);
            });
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $('#gambar').change(function(e) {
                var fileName = e.target.files[0].name;
                var fileExt = fileName.split('.').pop();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-textbase">
                                ${fileName}
                                </span>
                            </div>
                        </div>
                        `);
                };
                reader.readAsDataURL(this.files[0]);
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');

            successMessage.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        });
    </script>
    @push('js')
    @endpush
@endsection

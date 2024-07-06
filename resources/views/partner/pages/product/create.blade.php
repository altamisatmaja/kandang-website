@extends('partner.layouts.app')

@section('title', 'Dashboard | Product')

@section('content')
    <div class="container mx-auto">
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
                        <a href="{{ route('partner.product.list') }}"> Produk </a>
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

        <div class=" shadow rounded-lg pt-4 mb-5">
            <div class="mb-4 w-full">
                <div class="mb-4 w-full">
                    <div class="mb-3">
                        <h3 class="font-semibold text-2xl text-textbase">Tambah produk anda 👋</h3>
                    </div>
                    <p class="text-lg text-textbase">
                        Yuk, mulai jual hewan Anda!
                    </p>
                </div>
                <form class="form-tambah-product-partner" action="{{ route('partner.product.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label for="nama_product" class="text-lg font-medium text-textbase block mb-2">Nama Produk</label>
                        <input type="text" name="nama_product" id="nama_product" placeholder="Nama product"
                            class="border p-2 rounded w-full">
                            @error('nama_product')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                    </div>
                    <div class="mb-4">
                        <label for="harga_product" class="text-lg font-medium text-textbase block mb-2">Harga Produk</label>
                        <input type="number" name="harga_product" id="harga_product" placeholder="Harga product"
                            class="border p-2 rounded w-full">
                            @error('harga_product')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
                        <div class="">
                            <label for="id_kategori" class="text-lg font-medium text-textbase block mb-2">Kategori
                                Product</label>
                            <select name="id_kategori" id="id_kategori" class="border p-2 rounded w-full">
                                @foreach ($categoryproduct as $category)
                                    <option value="{{ $category->id }}">{{ $category->nama_kategori_product }}</option>
                                @endforeach
                            </select>
                            @error('id_kategori')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        </div>
                        <div>
                            <label for="id_category_livestocks" class="text-lg font-medium text-textbase block mb-2">Kategori Hewan *</label>
                            <select name="id_category_livestocks" id="id_category_livestocks"
                                class="id_category_livestocks border p-2 rounded w-full">
                                <option value="">Pilih Kategori</option>
                                @foreach ($categorylivestock as $category)
                                    <option value="{{ $category->id }}">{{ $category->nama_kategori_hewan }}</option>
                                @endforeach
                            </select>
                            @error('id_category_livestocks')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        </div>
                        <div>
                            <label for="id_typelivestocks" class="text-lg font-medium text-textbase block mb-2">Jenis Hewan *</label>
                            <select name="id_typelivestocks" id="id_typelivestocks"
                                class="id_typelivestocks border p-2 rounded w-full">
                                <option value="">Pilih Jenis Hewan</option>
                                @foreach ($typelivestocks as $type)
                                    <option value="{{ $type->id }}"
                                        data-category-id="{{ $type->id_category_livestocks }}">
                                        {{ $type->nama_jenis_hewan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('id_typelivestocks')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                        </div>

                    </div>
                    <div class="mb-4">
                        <label for="id_jenis_gender_hewan" class="text-lg font-medium text-textbase block mb-2">Gender
                            Hewan Ternak</label>
                        <select id="id_jenis_gender_hewan" name="id_jenis_gender_hewan"
                            class="border p-2 rounded w-full">
                            @foreach ($gender_livestocks as $gender)
                                <option value="{{ $gender->id }}">{{ $gender->nama_gender }}</option>
                            @endforeach
                        </select>
                        @error('id_jenis_gender_hewan')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    </div>
                    <div class="mb-4">
                        <label class="mb-5 block text-xl font-semibold text-[#07074D]">
                            Gambar hewan
                        </label>

                        <div class="mb-8">
                            <input type="file" name="gambar_hewan" id="gambar_hewan" class="sr-only" />
                            <label for="gambar_hewan"
                                class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                <div>
                                    <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                        Drop files here
                                    </span>
                                    <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                        Or
                                    </span>
                                    <span class="inline-flex rounded py-2 px-7 text-base font-medium text-[#07074D]">
                                        Browse
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="deskripsi_product" class="text-lg font-medium text-textbase block mb-2">Deskripsi
                            Product</label>
                        <textarea id="deskripsi_product" name="deskripsi_product" rows="6" placeholder="Masukkan deskripsi product"
                            class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500"></textarea>
                            @error('deskripsi_product')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4 hidden">
                        <label for="terjual" class="text-lg font-medium text-textbase block mb-2">Terjual</label>
                        <input type="number" value="0" name="terjual" id="terjual" placeholder="0" readonly
                            class="border p-2 rounded w-full">
                            @error('terjual')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <div hidden>
                            <label hidden for="diskon" class="text-lg font-medium text-textbase block mb-2">Diskon</label>
                            <input type="number" id="diskon" name="diskon" placeholder="Diskon" value="0"
                                class="border p-2 rounded w-full">
                        </div>
                        <div>
                            <label for="berat_hewan_ternak" class="text-lg font-medium text-textbase block mb-2">Berat
                                Hewan</label>
                            <input type="number" id="berat_hewan_ternak" name="berat_hewan_ternak"
                                placeholder="Berat dalam kg" class="border p-2 rounded w-full">
                                @error('berat_hewan_ternak')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="stok_hewan_ternak" class="text-lg font-medium text-textbase block mb-2">Stok
                                hewan</label>
                            <input type="number" id="stok_hewan_ternak" name="stok_hewan_ternak"
                                placeholder="Stok hewan" class="border p-2 rounded w-full">
                                @error('stok_hewan_ternak')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="lahir_hewan" class="text-lg font-medium text-textbase block mb-2">Lahir
                                hewan</label>
                            <input type="number" id="lahir_hewan" name="lahir_hewan"
                                placeholder="Lahir hewan dalam bulan" class="border p-2 rounded w-full">
                                @error('lahir_hewan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div>
                            <label for="lahir_hewan" class="text-lg font-medium text-textbase block mb-2">Lahir
                                hewan</label>
                            <input type="number" id="lahir_hewan" name="lahir_hewan"
                                placeholder="Lahir hewan dalam bulan" class="border p-2 rounded w-full">
                        </div>
                    </div> --}}
                    <div class="mb-4 hidden">
                        <label for="id_partner" class="text-lg font-medium text-textbase block mb-2">Id Partner
                            readonly</label>
                        <input type="number" value="{{ $partner->id }}" name="id_partner" id="id_partner"
                            placeholder="{{ $partner->id }}" class="border p-2 rounded w-full">
                        <input type="number" value="0" name="diskon" id="diskon" placeholder="0"
                            class="border p-2 rounded w-full">
                    </div>
                    <button type="submit" id="theme-toggle"
                        class="px-4 w-full py-2 rounded bg-primarybase text-white hover:bg-yellow-600 focus:outline-none transition-colors">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script>
            $(document).ready(function() {
                $('#id_category_livestocks').change(function() {
                    var selectedCategoryId = $(this).val();
                    $('#id_typelivestocks option').each(function() {
                        var typeCategoryId = $(this).data('category-id');
                        if (selectedCategoryId == "" || typeCategoryId == selectedCategoryId) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                    $('#id_typelivestocks').val('');
                });

                $('#id_category_livestocks').trigger('change');
            });

            document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
            successMessage.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        });
        </script>
    @endpush
@endsection

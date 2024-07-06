@extends('partner.layouts.app')

@section('title', 'Dashboard | Product')

@section('content')
    <div id="" class="container mx-auto">
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
                        <a href="{{ route('partner.farm.list') }}"> Peternakan </a>
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
                        <a href="{{ route('partner.farm.update', $farm->slug_farm ) }}"> Edit hewan {{ $farm->nama_hewan }} </a>
                    </div>
                </li>
            </ol>
        </div>

        <div class=" shadow rounded-lg pt-4 mb-5">
            <div class="mb-4 w-full">
                <div class="mb-3">
                    <h3 class="font-semibold text-2xl text-textbase">Edit data hewan ternak anda 👋</h3>
                </div>
                <p class="text-lg text-textbase">
                    Ada kesalahan pengisian? yuk, edit aja pak/bu!
                </p>
            </div>
            <form class="" action="{{ route('partner.farm.edit', $farm->slug_farm) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="nama_hewan">Nama Hewan *</label>
                        <input value="{{ $farm->nama_hewan }}" name="nama_hewan" id="nama_hewan" type="text"
                            placeholder="Nama Partner" class="border p-2 rounded w-full">
                            @error('nama_hewan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                    </div>
                    <div>
                        <label for="kode_hewan">Kode hewan *</label>
                        <input value="{{ $farm->kode_hewan }}" name="kode_hewan" id="kode_hewan" type="text"
                            placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                            @error('kode_hewan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="id_kategori_hewan">Kategori Hewan *</label>
                        <select name="id_kategori_hewan" id="id_kategori_hewan"
                            class="id_kategori_hewan border p-2 rounded w-full">
                            <option value="">Pilih Kategori</option>
                            @foreach ($categorylivestock as $categorylivestocks)
                                <option value="{{ $categorylivestocks->id }}"
                                    {{ $categorylivestocks->id == $farm->id_kategori_hewan ? 'selected' : '' }}>
                                    {{ $categorylivestocks->nama_kategori_hewan }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_kategori_hewan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                    </div>
                    <div>
                        <label for="id_jenis_hewan">Jenis Hewan *</label>
                        <select name="id_jenis_hewan" id="id_jenis_hewan"
                            class="id_jenis_hewan border p-2 rounded w-full">
                            <option value="">Pilih jenis hewan</option>
                            @foreach ($typelivestocks as $typelivestock)
                                <option value="{{ $typelivestock->id }}"
                                    data-category-id="{{ $typelivestock->id_category_livestocks }}"
                                    {{ $typelivestock->id == $farm->id_jenis_hewan ? 'selected' : '' }}>
                                    {{ $typelivestock->nama_jenis_hewan }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_jenis_hewan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="id_jenis_gender_hewan">Jenis Gender Hewan *</label>
                        <select name="id_jenis_gender_hewan" id="id_jenis_gender_hewan"
                            class="kabupaten_partner border p-2 rounded w-full">
                            @foreach ($genderlivestocks as $genderlivestock)
                                <option value="{{ $genderlivestock->id }}"
                                    {{ $genderlivestock->id == $farm->id_jenis_gender_hewan ? 'selected' : '' }}>
                                    {{ $genderlivestock->nama_gender }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_jenis_gender_hewan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                    </div>
                    <div>
                        <label for="id_kondisi_hewan">Kondisi Hewan *</label>
                        <select name="id_kondisi_hewan" id="id_kondisi_hewan" class="border p-2 rounded w-full">
                            @foreach ($conditionlivestock as $conditionlivestocks)
                                <option value="{{ $conditionlivestocks->id }}"
                                    {{ $conditionlivestocks->id == $farm->id_kondisi_hewan ? 'selected' : '' }}>
                                    {{ $conditionlivestocks->nama_kondisi_hewan }}
                                </option>
                            @endforeach
                        </select>
                        @error('id_kondisi_hewan')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mb-4">
                    <div>
                        <label for="lahir_hewan">Lahir hewan *</label>
                        <input name="lahir_hewan" id="lahir_hewan"
                            value="{{ \Carbon\Carbon::parse($farm->lahir_hewan)->format('Y-m-d') }}" type="date"
                            placeholder="Nama Partner" class="border p-2 rounded w-full">
                            @error('lahir_hewan')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div hidden>
                        <label for="slug_farm">Slug *</label>
                        <input readonly value="{{ $farm->slug_farm }}" name="slug_farm" id="slug_farm" type="text"
                            placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="deskripsi_hewan">Deskripsi Hewan</label>
                    <textarea name="deskripsi_hewan" id="deskripsi_hewan" type="text" class="border p-2 rounded w-full">{{ $farm->deskripsi_hewan }}</textarea>
                    @error('deskripsi_hewan')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
                </div>


                <div>
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Perbarui
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var selectedCategoryId = $('#id_kategori_hewan').val();
            $('#id_jenis_hewan option').each(function() {
                var typeCategoryId = $(this).data('category-id');
                if (selectedCategoryId == "" || typeCategoryId == selectedCategoryId) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });

            $('#id_kategori_hewan').change(function() {
                var selectedCategoryId = $(this).val();
                $('#id_jenis_hewan option').each(function() {
                    var typeCategoryId = $(this).data('category-id');
                    if (selectedCategoryId == "" || typeCategoryId == selectedCategoryId) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
                $('#id_jenis_hewan').val('');
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
            successMessage.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        });
    </script>
@endsection

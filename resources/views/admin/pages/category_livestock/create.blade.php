@extends('admin.layouts.app')

@section('title', 'Dashboard | Category')

@section('content')
    <section class="w-full px-4 mx-auto">
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
                        <a class="text-textbase" href="{{ route('admin.dashboard') }}">Beranda </a>
                    </div>
                </li>
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a class="text-textbase" href="{{ route('admin.category.list') }}"> Kategori Produk </a>
                    </div>
                </li>
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a class="text-textbase" href="{{ route('admin.categorylivestock.add') }}"> Tambah kategori jenis hewan </a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="flex flex-col">
            <div class="w-full flex justify-center items-center">
                <div class="w-full bg-whitemx-auto rounded">
                    <div class="py-4 text-left">
                        @if (session('success'))
                            <div class="bg-green-200 px-4 py-2 rounded-md text-green-800">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="bg-green-200 px-4 py-2 rounded-md text-green-800">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="flex justify-between items-center pb-3">
                            <p class="text-2xl font-bold text-textbase">Tambah kategori jenis hewan</p>
                        </div>
                        <form class="" action="{{ route('admin.categorylivestock.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-5">
                                <label for="nama_kategori_hewan" class="mb-3 block text-base font-medium text-textbase">
                                    Masukkan nama jenis hewan
                                </label>
                                <input type="text" name="nama_kategori_hewan" id="nama_kategori_hewan"
                                    placeholder="Masukkan nama jenis hewan"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                            @error('nama_kategori_hewan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div class="mb-6 pt-4">
                                <label for="deskripsi_kategori_hewan" class="mb-3 block text-base font-medium text-textbase">
                                    Masukkan deskripsi jenis hewan
                                </label>
                                <textarea type="text" name="deskripsi_kategori_hewan" id="deskripsi_kategori_hewan"
                                    placeholder="Masukkan deskripsi jenis hewan"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                            </div>
                            @error('deskripsi_kategori_hewan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                            <div class="mb-6 pt-4">
                                <label class="mb-5 block text-xl font-semibold text-textbase">
                                    Upload gambar
                                </label>
                                <div class="mb-8">
                                    <input type="file" name="gambar_kategori_hewan" id="gambar_kategori_hewan" class="sr-only"
                                        onchange="validateImage(this)" />
                                    <label for="gambar_kategori_hewan"
                                        class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                        <div>
                                            <span class="mb-2 block text-xl font-semibold text-textbase">
                                                Tambah gambar disini
                                            </span>
                                            <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                                atau
                                            </span>
                                            <span
                                                class="inline-flex rounded py-2 px-7 text-base font-medium text-textbase">
                                                Cari
                                            </span>
                                        </div>
                                    </label>
                                </div>
                                @error('gambar_kategori_hewan')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                                <div id="image-preview" class="mt-4"></div>
                                <span id="file-error" class="text-red-500"></span>
                            </div>
                            <div class="pb-4">
                                <button type="submit"
                                    class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-base font-semibold text-white outline-none">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script>
            $(document).ready(function() {
                $('#gambar_kategori_hewan').change(function(e) {
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

            function validateImage(input) {
                var file = input.files[0];
                var fileType = file.type.split('/').shift();
                var fileName = e.target.files[0].name;

                if (fileType !== 'image') {
                    document.getElementById('file-error').innerHTML = 'Gambar kategori produk harus berupa file gambar.';
                    document.getElementById('image-preview').innerHTML = '';
                } else {
                    document.getElementById('file-error').innerHTML = '';

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
                }
            }

        </script>
    @endpush
@endsection

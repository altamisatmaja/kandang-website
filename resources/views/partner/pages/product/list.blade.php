<style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>

@extends('partner.layouts.app')

@section('title', 'Partner | Product')

@section('content')
    <!-- component -->
    <section class="container mx-auto">
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

        <div class="flex flex-col px-4">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="">
                            <h3 class="font-semibold text-2xl text-textbase">Produk 👋</h3>
                        </div>
                        <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                            <a href="{{ route('partner.product.add') }}">
                                <button
                                    class="bg-primarybase text-white active:bg-primarybase text-xs font-bold uppercase px-3 py-2 rounded outline-none focus:outline-none mb-1 ease-linear transition-all duration-150"
                                    type="button">Tambah data</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="inline-block py-2 align-middle px-4">
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        No
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Tanggal
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Nama Product
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Harga
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Gambar
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Nama Kategori
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Jenis Hewan
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Gender Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Umur
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Berat
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Stok
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Terjual
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($productdata as $product)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $loop->iteration }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $product['created_at']->format('d M Y') }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $product['nama_product'] }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $product['harga_product'] }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap align-middle">
                                            <div class="flex gap-1 flex-col items-center justify-center">
                                                <img class="object-cover w-14 h-14 rounded-lg"
                                                    src="/uploads/{{ $product['gambar_hewan'] }}" alt="">
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $product['nama_kategori_product'] }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $product['nama_jenis_hewan'] }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $product['nama_gender'] }}</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $product['lahir_hewan'] }} bulan
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $product['berat_hewan_ternak'] }} kg</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $product['stok_hewan_ternak'] }} ekor</td>
                                        <td class="px-4 py-4 text-sm text-gray-500">
                                            {{ $product['terjual'] }}</td>
                                        <td class="px-4 py-4 text-sm">
                                            <div class="flex gap-x-2">
                                                <a href="{{ route('partner.product.edit', $product['slug_product']) }}">
                                                    <button
                                                        class="text-textbase transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 -960 960 960" width="24px" fill="#44444">
                                                            <path
                                                                d="M200-200h50.46l409.46-409.46-50.46-50.46L200-250.46V-200Zm-23.84 60q-15.37 0-25.76-10.4-10.4-10.39-10.4-25.76v-69.3q0-14.63 5.62-27.89 5.61-13.26 15.46-23.11l506.54-506.31q9.07-8.24 20.03-12.73 10.97-4.5 23-4.5t23.3 4.27q11.28 4.27 19.97 13.58l48.85 49.46q9.31 8.69 13.27 20 3.96 11.31 3.96 22.62 0 12.07-4.12 23.03-4.12 10.97-13.11 20.04L296.46-161.08q-9.85 9.85-23.11 15.46-13.26 5.62-27.89 5.62h-69.3Zm584.22-570.15-50.23-50.23 50.23 50.23Zm-126.13 75.9-24.79-25.67 50.46 50.46-25.67-24.79Z" />
                                                        </svg>
                                                    </button>
                                                </a>
                                                <form onsubmit="return confirm('Apakah anda yakin ingin menghapus ?');"
                                                    action="{{ route('partner.product.destroy', $product['slug_product']) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    {{-- <input hidden type="text" name="status" id="status" value="Tidak Aktif"> --}}
                                                    <button type="submit"
                                                        class="text-textbase transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 -960 960 960" width="24px" fill="#44444">
                                                            <path
                                                                d="M292.31-140q-29.83 0-51.07-21.24Q220-182.48 220-212.31V-720h-10q-12.75 0-21.37-8.63-8.63-8.63-8.63-21.38 0-12.76 8.63-21.37Q197.25-780 210-780h150q0-14.69 10.35-25.04 10.34-10.34 25.03-10.34h169.24q14.69 0 25.03 10.34Q600-794.69 600-780h150q12.75 0 21.37 8.63 8.63 8.63 8.63 21.38 0 12.76-8.63 21.37Q762.75-720 750-720h-10v507.69q0 29.83-21.24 51.07Q697.52-140 667.69-140H292.31ZM680-720H280v507.69q0 5.39 3.46 8.85t8.85 3.46h375.38q5.39 0 8.85-3.46t3.46-8.85V-720ZM406.17-280q12.75 0 21.37-8.62 8.61-8.63 8.61-21.38v-300q0-12.75-8.63-21.38-8.62-8.62-21.38-8.62-12.75 0-21.37 8.62-8.61 8.63-8.61 21.38v300q0 12.75 8.62 21.38 8.63 8.62 21.39 8.62Zm147.69 0q12.75 0 21.37-8.62 8.61-8.63 8.61-21.38v-300q0-12.75-8.62-21.38-8.63-8.62-21.39-8.62-12.75 0-21.37 8.62-8.61 8.63-8.61 21.38v300q0 12.75 8.63 21.38 8.62 8.62 21.38 8.62ZM280-720v520-520Z" />
                                                        </svg>
                                                    </button>
                                                </form>
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
                successMessage.addEventListener('click', function() {
                    successMessage.style.display = 'none';
                });
            });
        </script>
    @endpush
@endsection

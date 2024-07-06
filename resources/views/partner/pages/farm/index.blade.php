@extends('partner.layouts.app')

@section('title', 'Dashboard | List Product')

@section('content')
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
                        <a href="{{ route('partner.farm.list') }}"> Peternakan </a>
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
                <div class="flex flex-wrap mb-3 items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-2xl text-textbase">Peternakan 👋</h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <a href="{{ route('partner.farm.create') }}">
                            <button
                                class="bg-primarybase text-white active:bg-primarybase text-md font-semibold px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">Tambah hewan</button>
                        </a>
                    </div>
                </div>
                <div class="inline-block w-full py-2 px-4 align-middle">
                    <div class="overflow-hidden border border-gray-200  md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50 ">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        No
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Tanggal
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Nama Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Kategori Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Jenis Hewan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Usia
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Kondisi

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Berat Badan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Deskripsi
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Gender
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-semibold text-left rtl:text-right text-textbase">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                @foreach ($farms as $farm)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $loop->iteration }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->created_at->format('d F Y') }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->nama_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->category_livestock->nama_kategori_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->type_livestocks->nama_jenis_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            @if ($farm->lahir_hewan->diffInMonths(now()) < 12)
                                                {{ $farm->lahir_hewan->diffInMonths(now()) }} bulan
                                            @else
                                                {{ floor($farm->lahir_hewan->diffInMonths(now()) / 12) }} tahun
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->condition_livestock->nama_kondisi_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->berat_badan_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->deskripsi_hewan }}</td>
                                        <td class="px-4 py-4 text-sm text-textbase">
                                            {{ $farm->gender_livestocks->nama_gender }}</td>
                                        <td class="px-4 py-4 text-sm">
                                            <div class="flex items-center gap-x-2">
                                                <a href="{{ route('partner.farm.update', $farm->slug_farm) }}">
                                                    <button
                                                        class="text-textbase transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            viewBox="0 -960 960 960" width="24px" fill="#44444">
                                                            <path
                                                                d="M200-200h50.46l409.46-409.46-50.46-50.46L200-250.46V-200Zm-23.84 60q-15.37 0-25.76-10.4-10.4-10.39-10.4-25.76v-69.3q0-14.63 5.62-27.89 5.61-13.26 15.46-23.11l506.54-506.31q9.07-8.24 20.03-12.73 10.97-4.5 23-4.5t23.3 4.27q11.28 4.27 19.97 13.58l48.85 49.46q9.31 8.69 13.27 20 3.96 11.31 3.96 22.62 0 12.07-4.12 23.03-4.12 10.97-13.11 20.04L296.46-161.08q-9.85 9.85-23.11 15.46-13.26 5.62-27.89 5.62h-69.3Zm584.22-570.15-50.23-50.23 50.23 50.23Zm-126.13 75.9-24.79-25.67 50.46 50.46-25.67-24.79Z" />
                                                        </svg>
                                                    </button>
                                                </a>
                                                <form onsubmit="return confirm('Apakah yakin ingin dihapus ?');"
                                                    action="{{ route('partner.farm.destroy', $farm->slug_farm) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
            successMessage.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        });
    </script>
@endsection

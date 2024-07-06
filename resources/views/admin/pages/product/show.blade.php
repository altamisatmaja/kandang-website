@extends('admin.layouts.app')

@section('title', 'Dashboard | Lihat Product')

@section('content')
    <!-- component -->
    <section class="text-textbase w-full">
        <div class="container px-2 py-2 mx-auto">
            <div class="pb-5">
                <ol class="flex items-center gap-4">
                    <li>
                        <div
                            class="flex items-center text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                            <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            <a href="{{ route('admin.dashboard') }}">Beranda </a>
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
                            <a href="{{ route('admin.typelivestock.list') }}"> Jenis hewan </a>
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
                            <a class="" href="{{ route('admin.product.show', $product->slug_product) }}"> Detail produk <span class="lowercase">{{ $product->nama_product }}</span> </a>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="flex justify-between items-center pb-3">
                <p class="text-3xl font-bold mb-5">Detail produk {{ $product->nama_product }}</p>
            </div>
            <div class="lg:w-full mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full object-cover object-center rounded-xl "
                    src="/uploads/{{ $product->gambar_hewan }}">

                <div class="md:flex-1 items-center lg:pl-10 xs:pl-0 sm:pl-0 md:pl-0">
                    @foreach ($product->categorylivestocks as $categorylivestock)
                    <h2 class="mb-2 pt-2 font-bold text-gray-800 text-4xl items-center flex">
                        {{ $product->nama_product }} ・ <span class="text-textbase font-bold text-2xl">{{ $categorylivestock->nama_kategori_hewan }}</span>
                    </h2>
                        @endforeach

                    <div class="flex justify-between items-center">
                        <div class="flex items-center">
                            <span class="flex items-center">
                                @php
                                    $rating = (int) $hasil_reviews;
                                    if ($rating) {
                                        for ($i = 1; $i <= 5; $i++) {
                                            if ($i <= $rating) {
                                                echo '<svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-yellow-500"';
                                                echo ' viewBox="0 0 24 24">';
                                                echo '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"';
                                                echo '></path>';
                                                echo '</svg>';
                                            } else {
                                                echo '<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-yellow-500"';
                                                echo ' viewBox="0 0 24 24">';
                                                echo '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"';
                                                echo '></path>';
                                                echo '</svg>';
                                            }
                                        }
                                    } else {
                                        for ($i = 1; $i <= 5; $i++) {
                                            echo '<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6 text-yellow-500"';
                                            echo ' viewBox="0 0 24 24">';
                                            echo '<path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"';
                                            echo '></path>';
                                            echo '</svg>';
                                        }
                                    }
                                @endphp
                                <p class="text-textbase font-bold text-xl ml-1">
                                    {{ $hasil_reviews }}
                                    <span class="text-textbase">({{ $banyak_reviewers }} reviews)</span>
                                </p>
                            </span>
                            <div
                                class="ml-8 bg-primarybase px-3 py-1 rounded-full text-xl font-medium text-white hidden md:block">
                                {{ $product->terjual }} Terjual
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center my-1">
                        <div>
                            <div class="rounded-lg flex py-2">
                                <span class="font-bold text-primarybase text-6xl">@currency($product->harga_product)</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5 w-full rounded-lg">
                        <div class="">
                            <h2 class="text-3xl mb-3 font-bold text-textbase">
                                Detail produk
                            </h2>
                        </div>
                        <div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-textbase font-semibold text-xl">
                                    Gender hewan
                                </p>
                                @foreach ($product->gender_livestocks as $gender)
                                    <p class="text-textbase font-medium text-xl">
                                        {{ $gender->nama_gender }}
                                    </p>
                                @endforeach
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-textbase font-semibold text-xl">
                                    Usia hewan
                                </p>
                                <p class="text-textbase font-medium text-xl">
                                    {{ $product->lahir_hewan }} Bulan
                                </p>
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-textbase font-semibold text-xl">
                                    Berat hewan
                                </p>
                                <p class="text-textbase font-medium text-xl">
                                    {{ $product->berat_hewan_ternak }} kg
                                </p>
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-textbase font-semibold text-xl">
                                    Stok
                                </p>
                                <p class="text-textbase font-medium text-xl">
                                    {{ $product->stok_hewan_ternak }} ekor
                                </p>
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-textbase font-semibold text-xl">
                                    Deskripsi
                                <p class="text-textbase font-medium text-xl">{{ $product->deskripsi_product }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full   flex flex-col py-10 ">
                @foreach ($product->partner as $partners)
                    <div class=" rounded-lg">
                        <h2 class="text-3xl mb-3 font-bold text-textbase">
                            Detail partner
                        </h2>
                        <div class="sm:flex sm:justify-between py-2">
                            <div class="flex items-center">
                                <div class="flex items-start justify-start">
                                    <img class="h-20 w-20 rounded-full"
                                        src="/uploads/{{ $partners->foto_profil }}"
                                        alt="">
                                    <div class="ml-2 flex flex-col space-y-6">
                                        <h3 class="text-textbase text-2xl font-bold">👨🏻‍🌾 {{ $partners->nama_partner }} ・ {{ $partners->nama_perusahaan_partner }}</h3>
                                        <h3 class="text-textbase text-xl font-medium">📅 Bergabung pada {{ $partners->created_at->diffForHumans() }}</h3>
                                        <span class="text-textbase text-xl font-medium">📍 Lokasi partner berada di {{ $partners->alamat_partner }},
                                            {{ $partners->kecamatan_partner }}, {{ $partners->kabupaten_partner }},
                                            {{ $partners->provinsi_partner }}</span>
                                            <p class="w-full text-textbase text-xl font-medium">🏠 Peternakan {{ $partners->lama_peternakan_berdiri }} Tahun
                                                berdiri</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex my-5 flex-col">
                            <div class="h-px bg-slate-400"></div>
                        </div>
                        <div class="">
                            <h2 class="text-3xl mb-3 font-bold text-textbase">
                                Pengiriman
                            </h2>
                        </div>
                        <div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-textbase font-semibold text-xl">
                                    Dikirim dari
                                </p>
                                <p class="text-xl mb-3 font-semibold text-textbase">
                                    {{ $partners->kabupaten_partner }}
                                </p>
                            </div>
                            <div class="md:grid md:grid-cols-2 hover:bg-gray-50 md:space-y-0 space-y-1 py-2">
                                <p class="text-textbase font-semibold text-xl">
                                    Melalui
                                </p>
                                <p class="text-xl mb-3 font-semibold text-textbase">
                                    Internal Kontaner
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="flex my-10 flex-col">
                        <div class="h-px  bg-slate-400"></div>
                    </div>
                    <form onsubmit="return confirm('Apakah anda yakin ?');" method="POST"
                        action="{{ route('admin.product.status', $product->slug_product) }}">
                        @csrf
                        @method('PUT')
                        {{-- @php
                            $statusEnum = ['Aktif', 'Tidak Aktif'];
                        @endphp --}}
                        <div class="">
                            {{-- <h2 class="text-3xl mb-5 font-bold text-textbase">
                                Ubah status produk?
                            </h2> --}}
                            {{-- <select name="status" id="status" class="status border p-2 rounded w-full">
                                @foreach ($statusEnum as $item)
                                    <option value="{{ $item }}"
                                        {{ $product->status == $item ? 'selected' : '' }}>{{ $item }}</option>
                                @endforeach
                            </select> --}}
                            <input type="text" value="Tidak Aktif" hidden name="status">
                        </div>
                        <div class="mt-5">
                            <button type="submit"
                                class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-xl text-center font-semibold text-white outline-none">
                                Hapus
                            </button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </section>
    @push('js')
    @endpush
@endsection

@extends('includes.app')

@section('title', 'eFarm | Jual beli hewan')

@section('content')
    <div>
        <div class="bg-white min-h-screen px-6">
            <main>
                <section class="relative z-10 bg-opacity-90 py-10">
                    <div class="pb-5 container mx-auto">
                        <ol class="flex items-center gap-4">
                            <li>
                                <div
                                    class="flex items-center text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                                    <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                        viewBox="0 0 20 20">
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
                                    <a href="{{ route('homepage.market') }}"> Market </a>
                                </div>
                            </li>
                        </ol>
                    </div>
                    <div class="container mx-auto flex flex-col lg:flex-row">
                        <div style="background-image: url('{{ asset('images/hero-satu.png') }}')"
                            class=" relative lg:w-2/3 rounded-xl bg-secondary-lite bg-cover p-8 md:p-16">
                            <p class="max-w-sm text-textbase text-3xl md:text-4xl font-semibold">Nikmati pembelian kambing
                                tanpa ribet, cukup scan, dapat kambing</p>
                            <p class="max-w-xs pr-10 text-textbase font-semibold mt-8">Cari kambing terdekat Anda dan lakukan
                                pembelian!</p>
                            <a href="{{ route('homepage.market.nearest') }}"
                                class="mt-20 flex bg-primarybase w-1/4 items-center justify-center text-white font-semibold py-2 rounded-md">Beli
                                sekarang</a>
                            <div class="absolute bottom-8 right-8 md:bottom-5 md:right-5 flex">

                            </div>
                        </div>
                        <!-- right -->
                        <div style="background-image: url('{{ asset('images/hero-dua.png') }}')"
                            class=" lg:mt-0 relative md:mt-2 xs:mt-2 lg:ml-6 lg:w-1/3 rounded-xl bg-primary-lite bg-cover p-8 md:p-16">
                            <div class="max-w-sm">
                                <p class="text-3xl md:text-4xl text-textbase font-bold">Hewan terdekat Anda</p>
                                <p class="mt-8 font-semibold text-textbase ">Untuk hewan qurban<br />Kambing atau sapi</p>
                                <a href="{{ route('homepage.market.nearest') }}"
                                    class="absolute bottom-8 bg-primarybase text-white font-semibold px-8 py-2 rounded">Beli
                                    sekarang</a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="my-10 container mx-auto pt-2 bg-white">
                    <div class="relative flex items-end font-bold">
                        <h2 class="text-2xl text-textbase">Lihat berdasarkan jenis hewan</h2>
                    </div>

                    <div class="grid xs:grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 w-full">
                        @foreach ($categorylivestock as $categorylivestocks)
                            <div class="relative mx-auto w-full">
                                <a href="{{ route('homepage.market.farm', $categorylivestocks->slug) }}"
                                    class="relative inline-block duration-300 ease-in-out transition-transform transform hover:-translate-y-2 w-full">
                                    <div class="shadow p-4 rounded-lg bg-white">
                                        <div class="flex justify-center relative rounded-lg overflow-hidden h-52">
                                            <div
                                                class="transition-transform duration-500 transform ease-in-out hover:scale-110 w-full h-64 relative overflow-hidden">
                                                <div class="absolute inset-0">
                                                    <img class="w-full h-full object-cover"
                                                        src="/uploads/{{ $categorylivestocks->gambar_kategori_hewan }}"
                                                        alt="" />
                                                </div>
                                            </div>

                                        </div>

                                        <div class="mt-4">
                                            <h2 class="font-semibold text-xl md:text-lg text-textbase line-clamp-1"
                                                title="New York">
                                                {{ $categorylivestocks->nama_kategori_hewan }}
                                            </h2>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <div class="relative
        flex items-end font-bold my-10">
                        <h2 class="text-2xl text-textbase">Lihat berdasarkan kategori</h2>
                    </div>

                    <div class="grid lg:grid-cols-4 md:grid-cols-4 xs:grid-cols-1 gap-6 mt-4">
                        @foreach ($categoryproduct as $categoryproducts)
                            <div class="relative mx-auto w-full">
                                <a href="{{ route('homepage.market.category', $categoryproducts->slug_kategori_product) }}"
                                    class="relative inline-block duration-300 ease-in-out transition-transform transform hover:-translate-y-2 w-full">
                                    <div class="shadow p-4 rounded-lg bg-white">
                                        <div class="flex justify-center relative rounded-lg overflow-hidden h-52">
                                            <div
                                                class="transition-transform duration-500 transform ease-in-out hover:scale-110 w-full h-64 relative overflow-hidden">
                                                <div class="absolute inset-0">
                                                    <img class="w-full h-full object-cover"
                                                        src="/uploads/{{ $categoryproducts->gambar_kategori_product }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4">
                                            <h2 class="font-semibold text-xl md:text-lg text-textbase line-clamp-1"
                                                title="New York">
                                                {{ $categoryproducts->nama_kategori_product }}
                                            </h2>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="relative
        flex items-end font-bold mt-6">
                        <h2 class="text-2xl text-textbase">Hewan terbaru</h2>
                    </div>
                    <main class="w-full my-10">
                        <div class="container">
                            <div class="grid gap-3 grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                                @foreach ($products as $product)
                                    <a
                                        href="/market/buy/{{ $product->slug_category_product }}/{{ $product->slug_category_livestock }}/{{ $product->slug_product }}">
                                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                            <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                                                style="background-image: url('/uploads/{{ $product->gambar_hewan }}')">
                                            </div>

                                            <div class="px-5 py-3">
                                                <h3 class="text-gray-700 text-lg font-semibold">
                                                    {{ $product->nama_product }}</h3>
                                                <div>
                                                    <h2 class="text-primarybase text-lg font-semibold">Rp
                                                        {{ number_format($product->harga_product) }}</h2>
                                                    <div class="flex gap-2">
                                                        <div class="px-2 py-1 rounded-md bg-primarybase">
                                                            <p class="text-white text-sm">
                                                                {{ $product->gender }}
                                                            </p>
                                                        </div>
                                                        <div class="px-2 py-1 rounded-md bg-primarybase">
                                                            <p class="text-white text-sm">{{ $product->nama_jenis_hewan }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="text-gray-700 text-md font-medium mt-4">
                                                        {{ $product->lokasi }}</p>
                                                    <div class="flex items-center">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $product->average_rating)
                                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor"
                                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                    </path>
                                                                </svg>
                                                            @else
                                                                <svg class="w-5 h-5 text-gray-400" fill="currentColor"
                                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                                    </path>
                                                                </svg>
                                                            @endif
                                                        @endfor
                                                        <p class="text-gray-700 text-sm font-medium">
                                                            ({{ $product->total_reviews ?? 0 }})</p>
                                                    </div>
                                                    <p class="text-gray-700 text-sm font-medium mb-4">
                                                        {{ $product->terjual }} Terjual</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </main>
                </section>
        </div>
    </div>
    @push('js')
        <script>
            $(document).ready(function() {
                $(window).scroll(function() {
                    var scrollPosition = $(window).scrollTop();
                    var blurTriggerPosition = 200;

                    if (scrollPosition > blurTriggerPosition) {
                        $('.sticky').addClass('blurred-background');
                    } else {
                        $('.sticky').removeClass('blurred-background');
                    }
                });
            });
        </script>
    @endpush
@endsection

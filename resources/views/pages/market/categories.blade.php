<style>
    * {
        font-family: Montserrat;
    }

    .text-primary {
        color: #f9b529;
    }

    .text-primary-lite {
        color: #fac251;
    }

    .text-secondary {
        color: #294356;
    }

    .text-secondary-lite {
        color: #d5dee5;
    }

    .bg-primary {
        background-color: #f9b529;
    }

    .bg-primary-lite {
        background-color: #fac251;
    }

    .bg-secondary {
        background-color: #294356;
    }

    .bg-secondary-lite {
        background-color: #d5dee5;
    }

    .product {
        background-image: url('https://i.ibb.co/L00dH6V/2021-11-07-14h07-51.png');
    }

    .product2 {
        background-image: url('https://i.ibb.co/1fZMKPh/2021-11-07-14h08-07.png');
    }

    .product3 {
        background-image: url('https://i.ibb.co/f9tpvV3/2021-11-07-14h08-32.png');
    }

    .product4 {
        background-image: url('https://i.ibb.co/42BsKQ2/2021-11-07-14h08-17.png');
    }
</style>

@extends('includes.app')

@section('title', 'eFarm | Terdekat')

@section('content')
    <div>
        <div class="bg-white min-h-screen">
            <div class="px-32 pt-5 container mx-auto">
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
                    <li class="inline-flex">
                        <div
                            class="flex items-center gap-2 text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                            <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="{{ route('homepage.market.category', $slug_kategori_product) }}"> {{ $breadcrumbs }} </a>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="flex mx-auto justify-center">
                <div class="flex flex-row pt-6 px-6 pb-4">
                    {{-- <div class="w-3/12 mr-8">
                        <div class="bg-white relative rounded-xl shadow-lg mb-6 px-4 py-4 mb-2">
                            <a href="" class="inline-block text-gray-600 hover:text-black w-full"><span
                                    class="material-icons-outlined font-semibold  float-left">Kisaran harga</span></a>
                            <div class="h-px bg-black"></div>
                            <form action="">
                                <div class="flex flex-row my-2">
                                    <span
                                        class="z-highest rounded-l-lg w-10 h-10 flex justify-center items-center text-md text-gray-400 border border-r-0"
                                        mode="render" block="">
                                        Rp
                                    </span>
                                    <input value=""
                                        class="border border-gray-200 rounded-r-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2"
                                        id="" name="" required="false" placeholder="50000">
                                </div>
                                <div class=" flex flex-row my-2">
                                    <span
                                        class="z-highest rounded-l-lg w-10 h-10 flex justify-center items-center text-md text-gray-400 border border-r-0"
                                        mode="render" block="">
                                        Rp
                                    </span>
                                    <input value=""
                                        class="border border-gray-200 rounded-r-lg outline-none focus:ring-1 ring-blue-400 w-full pl-2"
                                        id="" name="" required="false" placeholder="50000">
                                </div>

                                <a href="#"
                                    class="w-full block text-black justify-center flex font-medium text-lg py-2 mt-2 rounded-xl border border-1 border-white transition duration-200 ease-in-out hover:border hover:border-1 hover:border-solid hover:border-black hover:text-black">
                                    <button type="button">
                                        Batalkan filter
                                    </button>
                                </a>
                                <a href="#"
                                    class="w-full block bg-primarybase text-white justify-center flex font-medium text-lg py-2 mt-2 rounded-xl hover:shadow-lg transition duration-200 ease-in-out hover:bg-yellow-600 hover:text-white">
                                    <button type="button">
                                        Terapkan filter
                                    </button>
                                </a>
                            </form>
                        </div>
                    </div> --}}
                    <main class="w-full">
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
                                                <h3 class="text-gray-700 text-lg font-semibold">{{ $product->nama_product }}
                                                </h3>
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
                                                    <p class="text-gray-700 text-md font-medium mt-4">{{ $product->lokasi }}
                                                    </p>
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
                </div>
            </div>
        </div>
    </div>
    <script src="chrome-extension://kgejglhpjiefppelpmljglcjbhoiplfn/shadydom.js"></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script>
        if (!window.ShadyDOM) window.ShadyDOM = {
            force: true,
            noPatch: true
        };
    </script>
    @push('js')
    @endpush
@endsection

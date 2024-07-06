<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/svg+xml" href="{{ asset('logo-notext.svg') }}" />
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <title>eFarm | Market</title>
    <style>
        * {
            font-family: Montserrat;
        }
    </style>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
</head>

<body>
    <div>
        @include('includes.navbar')
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
                            {{-- <a href="{{ route('homepage.market.category', $slug_kategori_product) }}"> {{ $breadcrumbs }} </a> --}}
                        </div>
                    </li>
                </ol>
            </div>
            <div class="flex mx-auto justify-center">
                <div class="flex flex-row pt-6 px-6 pb-4">
                    <div class="w-3/12 mr-8">
                        <div class="bg-white relative rounded-xl shadow-lg mb-6 px-4 py-4">
                            <a href="" class="inline-block text-gray-600 hover:text-black w-full">
                                <span class="material-icons-outlined font-semibold  float-left">Kategori</span>
                            </a>
                            <div class="h-px bg-black"></div>
                            @php
                                $categoryproducts =  App\Models\CategoryProduct::all();
                            @endphp
                            {{-- @foreach ($categoryproducts as $category)
                            <li class="list-none">
                                <button type="button" class="flex items-center w-full p-2 my-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white"
                                aria-controls="dropdown-mart-kategori-{{ $category->id }}" data-collapse-toggle="dropdown-mart-kategori-{{ $category->id }}">
                                    <span class="flex-1 text-left whitespace-nowrap" sidebar-toggle-item>{{ $category->nama_kategori_product }}</span>
                                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                @php
                                    $categorylivestocks =  App\Models\CategoryLivestock::where('id_kategori_produk', $category->id)->get();
                                @endphp
                                <ul id="dropdown-mart-kategori-{{ $category->id }}" class="hidden py-2 space-y-2 list-none">
                                    @foreach ($categorylivestocks as $categorylivestock)
                                    <li class="">
                                        <a href="/market/buy/{{ $categorylivestock->slug }}"
                                        class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-14"><span class="pl-3">{{ $categorylivestock->nama_kategori_hewan }}</span></a>
                                    </li> @endforeach
                                </ul>
                            </li>
                            @endforeach --}}
                        </div>
                        <div class="bg-white relative rounded-xl shadow-lg mb-6 px-4 py-4">
                            <a href="" class="inline-block text-gray-600 hover:text-black w-full">
                                <span class="material-icons-outlined font-semibold  float-left">Produk terdekat</span>
                            </a>
                            <div class="h-px bg-black"></div>
                            <form action="">
                                <div class="flex flex-row my-2">
                                    <div class="flex items-center">
                                        <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox" class="bg-gray-50 border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded" checked="">
                                        <label for="checkbox-1" class="text-sm ml-3 font-medium text-gray-900">Cari produk terdekat</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="bg-white relative rounded-xl shadow-lg mb-6 px-4 py-4">
                            <a href="" class="inline-block text-gray-600 hover:text-black w-full">
                                <span class="material-icons-outlined font-semibold  float-left">Kisaran harga</span>
                            </a>
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
                    </div>

                    <main class="w-full">
                        <div class="container">
                            <div class="grid gap-3 grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">

                                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                    <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                                        style="background-image: url('https://assets2.rumah-bumn.id/produk/product-16067182096361.jpg')">
                                        <p class="absolute right-2 top-2 bg-primarybase rounded-lg p-2 cursor-pointer group">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                                class="text-white" width="24">
                                                <path fill="white"
                                                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68-39.5t-2-78.5l54-98-144-304H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h65q11 0 21 6t15 17l27 57Zm134 280h280-280Z" />
                                            </svg>
                                        </p>
                                    </div>

                                    <div class="px-5 py-3">
                                        <h3 class="text-gray-700 text-lg font-semibold">Kambing Jawa Asli</h3>
                                        <div>
                                            <h2 class="text-primarybase text-lg font-semibold">Rp 2.000.000</h2>
                                            <div class="flex gap-2">
                                                <div class="px-4 py-1 rounded-md bg-primarybase">
                                                    <p class="text-white text-sm">Jantan</p>
                                                </div>
                                                <div class="px-4 py-1 rounded-md bg-primarybase">
                                                    <p class="text-white text-sm">Boer</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-md font-medium mt-4">Jawa Timur</p>
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <p class="text-gray-700 text-sm font-medium">(3)</p>
                                            </div>
                                            <p class="text-gray-700 text-sm font-medium mb-4">200 Terjual</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                    <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                                        style="background-image: url('https://assets2.rumah-bumn.id/produk/product-16067182096361.jpg')">
                                        <p class="absolute right-2 top-2 bg-primarybase rounded-lg p-2 cursor-pointer group">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                                class="text-white" width="24">
                                                <path fill="white"
                                                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68-39.5t-2-78.5l54-98-144-304H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h65q11 0 21 6t15 17l27 57Zm134 280h280-280Z" />
                                            </svg>
                                        </p>
                                    </div>

                                    <div class="px-5 py-3">
                                        <h3 class="text-gray-700 text-lg font-semibold">Kambing Jawa Asli</h3>
                                        <div>
                                            <h2 class="text-primarybase text-lg font-semibold">Rp 2.000.000</h2>
                                            <div class="flex gap-2">
                                                <div class="px-4 py-1 rounded-md bg-primarybase">
                                                    <p class="text-white text-sm">Jantan</p>
                                                </div>
                                                <div class="px-4 py-1 rounded-md bg-primarybase">
                                                    <p class="text-white text-sm">Boer</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-md font-medium mt-4">Jawa Timur</p>
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <p class="text-gray-700 text-sm font-medium">(3)</p>
                                            </div>
                                            <p class="text-gray-700 text-sm font-medium mb-4">200 Terjual</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                    <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                                        style="background-image: url('https://assets2.rumah-bumn.id/produk/product-16067182096361.jpg')">
                                        <p class="absolute right-2 top-2 bg-primarybase rounded-lg p-2 cursor-pointer group">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                                class="text-white" width="24">
                                                <path fill="white"
                                                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68-39.5t-2-78.5l54-98-144-304H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h65q11 0 21 6t15 17l27 57Zm134 280h280-280Z" />
                                            </svg>
                                        </p>
                                    </div>

                                    <div class="px-5 py-3">
                                        <h3 class="text-gray-700 text-lg font-semibold">Kambing Jawa Asli</h3>
                                        <div>
                                            <h2 class="text-primarybase text-lg font-semibold">Rp 2.000.000</h2>
                                            <div class="flex gap-2">
                                                <div class="px-4 py-1 rounded-md bg-primarybase">
                                                    <p class="text-white text-sm">Jantan</p>
                                                </div>
                                                <div class="px-4 py-1 rounded-md bg-primarybase">
                                                    <p class="text-white text-sm">Boer</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-md font-medium mt-4">Jawa Timur</p>
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <p class="text-gray-700 text-sm font-medium">(3)</p>
                                            </div>
                                            <p class="text-gray-700 text-sm font-medium mb-4">200 Terjual</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                    <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                                        style="background-image: url('https://assets2.rumah-bumn.id/produk/product-16067182096361.jpg')">
                                        <p class="absolute right-2 top-2 bg-primarybase rounded-lg p-2 cursor-pointer group">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                                class="text-white" width="24">
                                                <path fill="white"
                                                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68-39.5t-2-78.5l54-98-144-304H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h65q11 0 21 6t15 17l27 57Zm134 280h280-280Z" />
                                            </svg>
                                        </p>
                                    </div>

                                    <div class="px-5 py-3">
                                        <h3 class="text-gray-700 text-lg font-semibold">Kambing Jawa Asli</h3>
                                        <div>
                                            <h2 class="text-primarybase text-lg font-semibold">Rp 2.000.000</h2>
                                            <div class="flex gap-2">
                                                <div class="px-4 py-1 rounded-md bg-primarybase">
                                                    <p class="text-white text-sm">Jantan</p>
                                                </div>
                                                <div class="px-4 py-1 rounded-md bg-primarybase">
                                                    <p class="text-white text-sm">Boer</p>
                                                </div>
                                            </div>
                                            <p class="text-gray-700 text-md font-medium mt-4">Jawa Timur</p>
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <svg class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                    </path>
                                                </svg>
                                                <p class="text-gray-700 text-sm font-medium">(3)</p>
                                            </div>
                                            <p class="text-gray-700 text-sm font-medium mb-4">200 Terjual</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="flex justify-center">
                                <div class="flex rounded-md mt-8">
                                    <a href="#"
                                        class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white"><span>Previous</a></a>
                                    <a href="#"
                                        class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>1</span></a>
                                    <a href="#"
                                        class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>2</span></a>
                                    <a href="#"
                                        class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white"><span>3</span></a>
                                    <a href="#"
                                        class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
    <script src="chrome-extension://kgejglhpjiefppelpmljglcjbhoiplfn/shadydom.js"></script>
    <script>
        if (!window.ShadyDOM) window.ShadyDOM = {
            force: true,
            noPatch: true
        };
    </script>
    </body>

</html>

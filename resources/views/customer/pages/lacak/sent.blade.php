@extends('customer.pages.lacak.layouts.navigate')

@section('title', 'Customer | Dikirim')

@section('track')
    <section class="bg-white antialiased my-4">
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
                        <a href="{{ route('customer.lacak.sent') }}"> Pengiriman dikirim </a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="mx-auto max-w-screen-xl 2xl:px-0">
            @foreach ($allorders as $allorder)
                <h2 class="text-xl font-semibold mt-3 text-textbase  sm:text-2xl">Pesanan Reference
                    #{{ $allorder['order']['reference'] }} ・
                    {{ $allorder['order']['status_pembayaran'] == 'Paid' ? 'Sudah dibayar' : 'Belum dibayar' }}</h2>
                <div class="mt-6 sm:mt-8 lg:flex lg:gap-8">
                    <div
                        class="w-full divide-y divide-gray-200 overflow-hidden rounded-lg border   lg:max-w-xl xl:max-w-2xl">
                        <div class="space-y-4 p-6">
                            <div class="flex items-center gap-6">
                                <a href="#" class="h-14 w-14 shrink-0">
                                    <img class="h-full w-full "
                                        src="https://flowbite.s3.amazonaws.com/blocks/e-commerce/imac-front.svg"
                                        alt="imac image" />
                                </a>
                                @foreach ($allorder['order_details'] as $orderdetails)
                                    <a href="#"
                                        class="min-w-0 flex-1 font-medium text-textbase hover:underline ">{{ $orderdetails['product']['nama_product'] }}</a>
                                @endforeach
                            </div>

                            <div class="flex items-center justify-between gap-4">

                                <p class="text-sm font-normal text-gray-500 "><span
                                        @foreach ($orderdetails['partner'] as $partner)
                                class="font-medium text-textbase ">Dijual oleh </span>{{ $partner->nama_perusahaan_partner }}</p> @endforeach
                                        <div class="flex items-center justify-end gap-4">
                                        @foreach ($allorder['order_details'] as $orderdetails)
                                            <p class="text-base font-normal text-textbase ">
                                                x{{ $orderdetails->kuantitas_total }}</p>
                                            <p class="text-xl font-bold leading-tight text-textbase ">@currency($orderdetails['harga_total'])</p>
                                        @endforeach
                            </div>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            <p class="text-sm font-normal text-gray-500 "><span
                                    class="font-medium text-textbase ">Pengiriman dilakukan dengan
                                </span>{{ $allorder['order']['pengiriman'] }}
                            </p>
                        </div>
                        <div class="flex items-center justify-between gap-4">
                            @foreach ($orderdetails['partner'] as $partner)
                                <p class="text-sm font-normal text-gray-500 "><span
                                        class="font-medium text-textbase ">Dikirim dari
                                    </span>{{ $partner->provinsi_partner }}, {{ $partner->kabupaten_partner }},
                                    {{ $partner->kecamatan_partner }}, {{ $partner->kelurahan_partner }},
                                    {{ $partner->alamat_partner }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="mt-6 grow sm:mt-8 lg:mt-0">
                    <div class="space-y-6 rounded-lg border border-gray-200 bg-white p-6 shadow-sm  ">
                        <h3 class="text-xl font-semibold text-textbase ">Keterangan</h3>

                        <ol class="relative ms-3 border-gray-200 ">
                            <li class="mb-10 ms-6">
                                <span
                                    class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full bg-gray-100 ring-8 ring-white  ">
                                    <svg class="h-4 w-4 text-gray-500 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                                    </svg>
                                </span>
                                <h4 class="mb-0.5 text-base font-semibold text-textbase ">Pesanan
                                    {{ $allorder['order']['status'] }}</h4>
                                <p class="text-sm font-normal text-gray-500 ">Menunggu dikemas oleh penjual</p>
                            </li>
                        </ol>

                        <div class="gap-4 sm:flex sm:items-center grid grid-col-2">
                            {{-- <a href""
                                class="w-full rounded-lg items-center flex justify-center  border border-gray-200 bg-white px-5  py-2.5 text-sm font-medium text-textbase hover:bg-primarybase cursor-pointer hover:text-white focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Lihat
                                detail</a> --}}
                            <form action="{{ route('customer.lacak.status', $allorder['order']['id']) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input hidden value="Selesai" name="status" id="status" type="text">
                                <button type="submit" onclick="return confirm('Apakah anda yakin ingin menyelesaikan pesanan ini?')"
                                    class="w-full rounded-lg items-center flex justify-center  border border-gray-200 bg-white px-5  py-2.5 text-sm font-medium text-textbase hover:bg-primarybase hover:text-white focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100">Selesai</button>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        @endforeach
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');

            successMessage.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        });
    </script>
@endsection

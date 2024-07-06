<!-- component -->
@extends('customer.layouts.app')

@section('title', 'Customer | Order')

@section('content')
    <section class="md:py-0 bg-white text-zinc-900 relative overflow-hidden z-0 w-full">
        <div class="container px-2 mx-auto">
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
                            <a href="{{ route('customer.order.list') }}"> Dashboard </a>
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
                            <a href="{{ route('admin.category.add') }}"> Pesanan </a>
                        </div>
                    </li>
                </ol>
            </div>
            <div class="flex w-full justify-center mx-auto mb-5">
                <div class="w-full">
                    <div class="mt-2 mb-8 w-full">
                        <h4 class=" text-2xl font-bold text-textbase">
                            Pesanan anda 🤩
                        </h4>
                    </div>
                    @foreach ($allorders as $allorder)
                        @php
                            $created_at = strtotime($allorder['order']->created_at);
                            $current_time = strtotime(now());
                            $difference_in_minutes = round(($current_time - $created_at) / 60);

                            if ($difference_in_minutes > 15) {
                                $allorder['order']->status_pembayaran = 'Tidak bisa dibayar';
                            }
                        @endphp
                        <div class="bg-white ring-1 ring-primarybase rounded-lg p-6 mt-6">
                            <div class="grid grid-cols-12 gap-6 items-center">
                                <div class="col-span-12 sm:col-span-3">
                                    <h6 class="text-2xl leading-none font-bold text-textbase">
                                        {{ $allorder['order']->status_pembayaran == 'Paid' ? 'Sudah dibayar' : ($allorder['order']->status_pembayaran == 'Tidak bisa dibayar' ? 'Tidak bisa dibayar' : 'Belum dibayar') }}
                                    </h6>
                                </div>
                                <div class="col-span-12 sm:col-span-8 sm:col-start-5 sm:text-end">
                                    <div class="flex items-center sm:justify-end">
                                        <div class="opacity-80 pr-3 border-r">
                                            <p class="mb-1">Order Date: {{ $allorder['order']->created_at }}</p>
                                            <p class="mb-1">
                                                Order Ref: {{ $allorder['order']->reference }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4" />

                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="flex items-center">
                                        @foreach ($allorder['order_details'] as $partners)
                                            <p class="text-lg font-semibold">
                                                {{ $partners->partner[0]['nama_perusahaan_partner'] }}
                                            </p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-2 mt-4">
                                    <div class="flex justify-center items-center h-full">
                                        <img src="/uploads/{{ $allorder['order_details'][0]['product']['gambar_hewan'] }}"
                                            alt="" class="max-w-full h-auto" />
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-7 lg:mr-8 mt-4">
                                    <div>
                                        @foreach ($allorder['order_details'] as $products)
                                            <p class="text-lg font-semibold">{{ $products->product->nama_product }}
                                            </p>
                                            <p class="my-2 font-semibold text-textbase">
                                                @currency($products->product->harga_product)<span
                                                    class="opacity-75 ml-2">*{{ $products['kuantitas_total'] }}</span>
                                            </p>
                                            <p class="">{{ $products->partner[0]['nama_partner'] }}</p>
                                            <p class="text-md font-medium text-textbase">
                                                Dikirim dari {{ $partners->partner[0]['provinsi_partner'] }},
                                                {{ $partners->partner[0]['kabupaten_partner'] }},
                                                {{ $partners->partner[0]['kecamatan_partner'] }},
                                                {{ $partners->partner[0]['kelurahan_partner'] }}
                                            </p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-span-12 lg:col-span-3 mt-4">
                                    <div class="flex flex-col items-center">
                                        @foreach ($allorder['order_details'] as $products)
                                            <h6 class="font-bold">Total: {{ $products['harga_total'] }}</h6>
                                        @endforeach

                                        @if ($allorder['order']->status_pembayaran != 'Paid')
                                            @if ($difference_in_minutes > 15)
                                                <button disabled
                                                    class="py-2.5 px-5 bg-sekunderbase text-white hover:bg-opacity-90 w-full rounded-lg mt-2">
                                                    Expired
                                                </button>
                                            @else
                                            <button disabled
                                                class="py-2.5 px-5 bg-sekunderbase text-white hover:bg-opacity-90 w-full rounded-lg mt-2">
                                                Sudah dibayar
                                            </button>

                                            @endif
                                        @else
                                        <button
                                        class="py-2.5 px-5 bg-primarybase text-white hover:bg-opacity-90 w-full rounded-lg mt-2">
                                        Bayar sekarang
                                    </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @endpush
@endsection

@extends('includes.app')

@section('title', 'eFarm | Checkout')

@section('content')
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
    </style>
    <div>
        <!-- component -->
        <div class="py-10 md:px-32 w-full 2xl:px-20 2xl:container 2xl:mx-auto">

            <div class="flex justify-start item-start space-y-2 flex-col">
                <h1 class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9 text-textbase">
                    Order #{{ $detail->reference }}</h1>
                <p class="text-base font-medium leading-6 text-textbase">Dipesan pada:
                    {{ $products->created_at->format('D M Y') }}
                </p>
            </div>
            <div
                class="flex flex-col md:flex-row jusitfy-center items-stretch w-full xl:space-x-3 space-y-4 md:space-y-3 xl:space-y-0">
                <div class="flex flex-col justify-start items-start w-full space-y-4 md:space-y-6 xl:space-y-8">
                    <div class="flex flex-col justify-start items-start  px-4 py-4 md:py-6 md:p-6 xl:p-8 w-full">
                        <div
                            class="mt-4 md:mt-6 flex flex-col md:flex-row justify-start items-start md:items-center md:space-x-6 xl:space-x-8 w-full">
                            <div class="pb-4 md:pb-8 w-full md:w-40">
                                <img class="w-full hidden md:block" src="/uploads/{{ $products->gambar_hewan }}"
                                    alt="dress" />
                            </div>
                            <div class="max-w-4xl bg-white w-full rounded-lg">
                                <div class="">
                                    <h2 class="text-2xl text-textbase font-semibold">
                                        Detail hewan
                                    </h2>
                                </div>
                                <div>
                                    <div class="md:grid md:grid-cols-2 md:space-y-0 space-y-1 py-2 gap-x-3">
                                        <p class="text-textbase">
                                            Gender hewan
                                        </p>
                                        @foreach ($products->gender_livestocks as $gender)
                                            <p class="text-textbase font-semibold">
                                                {{ $gender->nama_gender }}
                                            </p>
                                        @endforeach
                                    </div>
                                    <div class="md:grid
        md:grid-cols-2  md:space-y-0 space-y-1 py-2 gap-x-3">
                                        <p class="text-textbase">
                                            Usia hewan
                                        </p>
                                        <p class="text-textbase font-semibold">
                                            {{ $products->lahir_hewan }} Bulan
                                        </p>
                                    </div>
                                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 py-2 gap-x-3">
                                        <p class="text-textbase">
                                            Berat hewan
                                        </p>
                                        <p class="text-textbase font-semibold">
                                            {{ $products->berat_hewan_ternak }} kg
                                        </p>
                                    </div>
                                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 py-2 gap-x-3">
                                        <p class="text-textbase">
                                            Stok
                                        </p>
                                        <p class="text-textbase font-semibold">
                                            {{ $products->stok_hewan_ternak }} ekor
                                        </p>
                                    </div>
                                    <div class="md:grid md:grid-cols-2  md:space-y-0 space-y-1 py-2 gap-x-3">
                                        <p class="text-textbase">
                                            Deskripsi
                                        <p class="text-textbase font-semibold">
                                            {{ $products->deskripsi_product }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div
                        class="flex justify-center md:flex-row flex-col items-stretch w-full space-y-4 md:space-y-0 md:space-x-6 xl:space-x-8">
                        <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 flex-1 space-y-6">
                            <h3 class="text-xl font-semibold leading-5 text-textbase">Ringkasan</h3>
                            <div
                                class="flex justify-center items-center w-full space-y-4 flex-col border-gray-200 border-b pb-4">
                                <div class="flex justify-between w-full">
                                    <p class="text-base leading-4 text-textbase">Kuantitas</p>
                                    @foreach ($orderitems as $orderitem)
                                        <p class="text-textbase font-semibold">{{ $orderitem->quantity }}</p>
                                    @endforeach
                                </div>
                                <div class="flex justify-between items-center w-full">
                                    <p class="text-base leading-4 text-textbase">Harga Produk</p>
                                    @foreach ($orderitems as $orderitem)
                                        <p class="text-textbase font-semibold">{{ $orderitem->price }}</p>
                                    @endforeach
                                </div>
                            </div>
                            <div class="flex justify-between items-center w-full">
                                <p class="text-base font-semibold text-textbase">Total</p>
                                <p class="text-base font-semibold text-textbase">@currency($detail->amount)</p>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col px-4 py-6 md:p-6 xl:p-8 flex-1 space-y-6">


                                <h3 class="text-xl font-semibold leading-5 text-textbase">Pengiriman</h3>
                                <form class="mt-5 grid gap-6 relative">
                                    <div class="static">
                                        <label
                                            class="peer-checked:border-2 border-primarybase peer-checked:bg-gray-50 flex cursor-pointer select-none rounded-lg border  p-4 items-center"
                                            for="radio_1">
                                            <img class="w-10 object-contain"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLirWoWV1AiJNfOY69WI9A9VfleBE6W4JbsJHLcYsbtQ&s"
                                                alt="" />
                                            <div class="ml-5">
                                                <span class="mt-2 font-semibold">Pengiriman Internal</span>
                                            </div>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="w-full xl:w-96 flex justify-between items-center md:items-start px-4 py-6 md:p-6 xl:p-8 flex-col">
                    <h3 class="text-2xl font-semibold leading-5 text-textbase mb-4">Metode pembayaran 💸</h3>
                    <div
                        class="flex flex-col md:flex-row xl:flex-col justify-start items-stretch h-full w-full md:space-x-6 lg:space-x-8 xl:space-x-0">

                        <ul class="space-y-4 text-textbase list-disc list-inside font-semibold">
                            @foreach ($instruksi as $instruksi_pembayaran)
                                <li>
                                    {{ $instruksi_pembayaran->title }}
                                    @foreach ($instruksi_pembayaran->steps as $detail)
                                        <ol class="ps-5 mt-2 space-y-1 list-decimal list-inside font-medium">
                                            <p>{{ $loop->iteration }}. {!! $detail !!}</p>
                                        </ol>
                                    @endforeach
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="chrome-extension://kgejglhpjiefppelpmljglcjbhoiplfn/shadydom.js"></script>
    <script>
        if (!window.ShadyDOM) window.ShadyDOM = {
            force: true,
            noPatch: true
        };
    </script>
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

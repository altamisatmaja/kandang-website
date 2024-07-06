@extends('includes.app')

@section('title', 'eFarm | Terdekat')

@section('content')
    <div>
        <div class="bg-white min-h-screen">

            <div class="px-28 py-10">
                <div class="relative z-10 pb-10">
                    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                        <div class="max-w-2xl text-center mx-auto">
                            <div class="mt-5 max-w-2xl">
                                <h1 class="block font-bold text-textbase text-5xl md:text-5xl lg:text-6xl">
                                    Menyediakan Layanan Sesuai Kebutuhan <span class="text-primarybase">Anda</span>
                                </h1>
                            </div>

                            <div class="mt-5 max-w-3xl">
                                <p class="text-lg text-textbase">Kelola peternakan, jual hewan ternak, beli hewan ternak
                                    dengan berbagai layanan yang tersedia di eFarm.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <ul role="list" class="grid xs:grid-cols-1 gap-6 px-8 sm:grid-cols-2 lg:grid-cols-2">
                    <div class="w-full px-4">
                        <div
                            class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-4 shadow-lg rounded-lg">
                            <div class="bg-gray-50 rounded-lg">
                                <div class="relative flex">
                                    <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full bg-cover" />
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <img src="{{ asset('efarm-market.png') }}" alt="montaña" class="" />
                                    </div>
                                </div>
                                <div class="py-8 px-10">
                                    <p class="text-3xl font-semibold text-textbase leading-sm">
                                        Market
                                    </p>
                                    <p class="text-xl text-textbase leading-sm mt-2">
                                        Memberikan pengalaman yang baik dalam hal belanja! 🤩
                                    </p>
                                    <div class="flex flex-wrap items-center mt-2 cursor-pointer">
                                        <a href="" class="flex text-primarybase font-semibold text-xl mr-3">
                                            Pelajari selengkapnya
                                        </a>
                                        <svg width="28" height="20" viewBox="0 0 28 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M21.8407 11.7976H1.79759C1.28827 11.7976 0.861346 11.6253 0.516807 11.2808C0.172269 10.9362 0 10.5093 0 10C0 9.49068 0.172269 9.06375 0.516807 8.71922C0.861346 8.37468 1.28827 8.20241 1.79759 8.20241H21.8407L16.7176 3.07927C16.3581 2.71976 16.1858 2.30032 16.2008 1.82096C16.2158 1.3416 16.388 0.922164 16.7176 0.562646C17.0771 0.203128 17.504 0.0158787 17.9984 0.000898796C18.4927 -0.0140811 18.9196 0.158188 19.2792 0.517706L27.5031 8.74169C27.6829 8.92144 27.8102 9.11618 27.8851 9.3259C27.96 9.53562 27.9975 9.76032 27.9975 10C27.9975 10.2397 27.96 10.4644 27.8851 10.6741C27.8102 10.8838 27.6829 11.0786 27.5031 11.2583L19.2792 19.4823C18.9196 19.8418 18.4927 20.0141 17.9984 19.9991C17.504 19.9841 17.0771 19.7969 16.7176 19.4374C16.388 19.0778 16.2158 18.6584 16.2008 18.179C16.1858 17.6997 16.3581 17.2802 16.7176 16.9207L21.8407 11.7976Z"
                                                fill="#AAC14C" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <li class="col-span-1 rounded-lg">
                        <div class="w-full px-4">
                            <div
                                class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-4 shadow-lg rounded-lg">
                                <div class="bg-gray-50 rounded-lg">
                                    <div class="relative flex">
                                        <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full bg-cover" />
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <img src="{{ asset('efarm-partner-logo.png') }}" alt="montaña"
                                                class="" />
                                        </div>
                                    </div>
                                    <div class="py-8 px-10">
                                        <p class="text-3xl font-semibold text-textbase leading-sm">
                                            Partner
                                        </p>
                                        <p class="text-xl text-textbase leading-sm mt-2">
                                            Memberikan pengalaman yang baik dalam hal belanja! 🤩
                                        </p>
                                        <div class="flex flex-wrap items-center mt-2 cursor-pointer">
                                            <a href="" class="flex text-primarybase font-semibold text-xl mr-3">
                                                Pelajari selengkapnya
                                            </a>
                                            <svg width="28" height="20" viewBox="0 0 28 20" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M21.8407 11.7976H1.79759C1.28827 11.7976 0.861346 11.6253 0.516807 11.2808C0.172269 10.9362 0 10.5093 0 10C0 9.49068 0.172269 9.06375 0.516807 8.71922C0.861346 8.37468 1.28827 8.20241 1.79759 8.20241H21.8407L16.7176 3.07927C16.3581 2.71976 16.1858 2.30032 16.2008 1.82096C16.2158 1.3416 16.388 0.922164 16.7176 0.562646C17.0771 0.203128 17.504 0.0158787 17.9984 0.000898796C18.4927 -0.0140811 18.9196 0.158188 19.2792 0.517706L27.5031 8.74169C27.6829 8.92144 27.8102 9.11618 27.8851 9.3259C27.96 9.53562 27.9975 9.76032 27.9975 10C27.9975 10.2397 27.96 10.4644 27.8851 10.6741C27.8102 10.8838 27.6829 11.0786 27.5031 11.2583L19.2792 19.4823C18.9196 19.8418 18.4927 20.0141 17.9984 19.9991C17.504 19.9841 17.0771 19.7969 16.7176 19.4374C16.388 19.0778 16.2158 18.6584 16.2008 18.179C16.1858 17.6997 16.3581 17.2802 16.7176 16.9207L21.8407 11.7976Z"
                                                    fill="#AAC14C" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
            </div>
            </ul>
            <div class="relative z-10 pb-10">
                <div class="w-full mx-auto lg:px-4 py-10 lg:py-10">
                    <div class="max-w-2xl text-center mx-auto">
                        <div class="mt-5 max-w-2xl">
                            <h1 class="block font-bold text-textbase text-5xl md:text-5xl lg:text-6xl">
                                Berbagai produk yang tersedia di eFarm
                            </h1>
                        </div>

                        <div class="mt-5 max-w-3xl">
                            <p class="text-lg text-textbase">Kelola peternakan, jual hewan ternak, beli hewan ternak
                                dengan berbagai layanan yang tersedia di eFarm.</p>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto py-16 text-center">
                    <img class="h-96 w-full rounded-xl object-cover lg:w-full"
                        src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" />
                </div>
            </div>
            <div class="flex mx-auto justify-center">
                <section class="bg-white px-10">
                    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                        <div class="mr-auto place-self-center lg:col-span-7">
                            <h1
                                class="text-textbase max-w-2xl mb-4 text-6xl font-bold leading-none md:text-5xl xl:text-6xl">
                                Pengelolaan Peternakan secara Online</h1>
                            <p class="text-textbase max-w-2xl mb-6 font-semibold lg:mb-8 md:text-xl lg:text-2xl">
                                Pantau hewan ternak dalam genggaman tangan, melihat data</p>
                        </div>
                        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                            <img src="{{ asset('layouts.png') }}" alt="mockup">
                        </div>
                    </div>
                </section>
            </div>
            <div class="flex mx-auto justify-center">
                <section class="bg-white px-10">
                    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                            <img src="{{ asset('layouts.png') }}" alt="mockup">
                        </div>
                        <div class="ml-auto place-self-center lg:col-span-7">
                            <h1
                                class="text-textbase max-w-2xl mb-4 text-6xl font-bold leading-none md:text-5xl xl:text-6xl">
                                Sistem pembayaran yang aman dan terjamin</h1>
                            <p class="text-textbase max-w-2xl mb-6 font-semibold lg:mb-8 md:text-xl lg:text-2xl">
                                Pantau hewan ternak dalam genggaman tangan, melihat data </p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="flex mx-auto justify-center">
                <section class="bg-white px-10">
                    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                        <div class="mr-auto place-self-center lg:col-span-7">
                            <h1
                                class="text-textbase max-w-2xl mb-4 text-6xl font-bold leading-none md:text-5xl xl:text-6xl">
                                Pengelolaan Peternakan secara Online</h1>
                            <p class="text-textbase max-w-2xl mb-6 font-semibold lg:mb-8 md:text-xl lg:text-2xl">
                                Pantau hewan ternak dalam genggaman tangan, melihat data</p>
                        </div>
                        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                            <img src="{{ asset('layouts.png') }}" alt="mockup">
                        </div>
                    </div>
                </section>
            </div>
            <div class="flex mx-auto justify-center">
                <section class="bg-white px-10">
                    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                            <img src="{{ asset('layouts.png') }}" alt="mockup">
                        </div>
                        <div class="ml-auto place-self-center lg:col-span-7">
                            <h1
                                class="text-textbase max-w-2xl mb-4 text-6xl font-bold leading-none md:text-5xl xl:text-6xl">
                                Sistem pembayaran yang aman dan terjamin</h1>
                            <p class="text-textbase max-w-2xl mb-6 font-semibold lg:mb-8 md:text-xl lg:text-2xl">
                                Pantau hewan ternak dalam genggaman tangan, melihat data </p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @push('js')
    @endpush
@endsection

@extends('includes.app')

@section('title', 'eFarm | Tentang')

@section('content')
    <div>
        <div class="text-white mt-24 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">

            <div class="grid gap-8 md:grid-cols-2 ">
                <div class="flex flex-col  justify-center">
                    <p class="self-start inline text-xl font-semibold text-textbase">
                        Tentang eFarm 🐑
                    </p>
                    <h2 class="text-4xl font-bold text-textbase">eFarm, Teman peternakanmu</h2>
                    <div class="h-6"></div>
                    <p class="font-serif text-xl text-textbase md:pr-10">
                        Dengan eFarm, kebutuhan peternakan Anda akan terpenuhi dengan mudah dan efisien. Kami menyediakan
                        solusi terbaik untuk mendukung peternakan Anda dalam mencapai hasil yang optimal.
                    </p>
                    <div class="h-8"></div>
                    <div class="grid grid-cols-2 gap-4 pt-4 ">
                        <div>
                            <p class="font-semibold text-textbase">Partner</p>
                            <div class="h-4"></div>
                            <p class="font-serif text-textbase">
                                Kami bekerja sama dengan berbagai mitra terpercaya untuk memastikan Anda mendapatkan produk
                                dan layanan terbaik
                            </p>
                        </div>
                        <div>
                            <p class="font-semibold text-textbase">Market</p>
                            <div class="h-4"></div>
                            <p class="font-serif text-textbase">
                                Temukan berbagai produk berkualitas tinggi yang tersedia di pasar kami
                            </p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="hidden lg:mt-0 lg:col-span-5 lg:flex rounded-lg">
                        <img class="rounded-xl"
                            src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2022/03/14/3062481748.jpg"
                            alt="about">
                    </div>
                </div>
            </div>

            <div class="h-32 md:h-40"></div>

            <p class="text-4xl">
                <span class="text-textbase font-semibold text-6xl">Dibangun oleh kelompok PPL E08 dengan Mitranya adalah
                    Ternak Express</span>
            </p>
            <section
                class="flex flex-col mt-20 w-full h-[500px] bg-blur bg-cover bg-fixed bg-center flex justify-center items-center rounded-3xl"
                style="
                background-image: url({{ asset('images/herofixed.png') }});
            ">
                <h1 class="text-primarybase text-7xl font-bold mt-20 mb-10">
                    eFarm
                </h1>

                <span class="text-center font-bold my-20 text-white/90">
                    <a href="https://egoistdeveloper.github.io/twcss-to-sass-playground/" target="_blank"
                        class="text-primarybase hover:text-white">
                        Jadi Partner
                    </a>

                    <a href="https://unsplash.com/photos/8Pm_A-OHJGg" target="_blank"
                        class="text-primarybase hover:text-white">
                        Jual Beli Hewan Ruminansia
                    </a>

                </span>
            </section>
        </div>


        <div class="text-white mt-24 container mx-auto p-8 overflow-hidden md:rounded-lg md:p-10 lg:p-12">
            <div class="mx-auto px-4 md:px-8">
                <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12 flex-col">
                    <div class="flex items-center flex-col">
                        <h2 class="text-6xl font-bold text-gray-800 lg:text-6xl ">Dokumentasi eFarm</h2>
                        <p class="max-w-screen text-xl mt-3 text-gray-500 ">
                            Ini adalah aktivitas, kemitraan, produk, penjalanan, dan sejarah dari eFarm
                        </p>
                    </div>

                </div>

                <div class="grid grid-cols-3 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/03/16/Screenshot-138-2778996270.png"
                            loading="lazy" alt="Photo by Minh Pham"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Kambing</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2023/08/23/kandang-kambing-mewah-di-tuban-2_169.jpeg?w=650"
                            loading="lazy" alt="Photo by Magicle"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Kandang</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80">
                        <img src="https://kominfo.jatimprov.go.id/uploads/images/IMG-20240311-WA0050.jpg" loading="lazy"
                            alt="Photo by Martin Sanchez"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Mitra</span>
                    </a>
                    <!-- image - end -->

                    <!-- image - start -->
                    <a href="#"
                        class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80">
                        <img src="https://cdn.rri.co.id/berita/48/images/1677338816561-Bupati_Banyuwangi_Ipuk_Fiestiandani_(Kanan)_Saat_Meninjau_Peternakan_Kambing/1677338816561-Bupati_Banyuwangi_Ipuk_Fiestiandani_(Kanan)_Saat_Meninjau_Peternakan_Kambing.jpg"
                            loading="lazy" alt="Photo by Lorenzo Herrera"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50">
                        </div>

                        <span class="relative ml-4 mb-3 inline-block text-sm text-white md:ml-5 md:text-lg">Aktivitas</span>
                    </a>
                    <!-- image - end -->
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        @push('js')
            <script>
                $(document).ready(function() {
                    $(window).scroll(function() {
                        var scrollPosition = $(window).scrollTop();
                        var blurTriggerPosition = 200;

                        // Menambahkan atau menghapus kelas blur sesuai dengan posisi scroll
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

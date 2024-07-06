<div class="relative mt-44">
    <div class="absolute top-0 left-0 right-0 container mx-auto z-10" style="transform: translateY(-50%);">
        <div class="relative flex flex-col bg-white w-full h-64 rounded-lg">
            <div class="bg-white rounded-4xl">
                <div class="px-14 py-10 flex flex-col">
                    <p class="text-5xl font-bold text-textbase">
                        Butuh bantuan?
                    </p>
                    <a href="https://www.instagram.com/ternakexpress" target="_blank"
                        class="bg-primarybase cursor-pointer w-2/6 mt-4 font-semibold rounded-xl px-8 py-6 text-white text-4xl">
                        Hubungi kami 🤝
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="bg-primarybase relative pt-28" aria-labelledby="footer-heading">
    <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8">
                <a href="/">
                    <img class="h-14" src="{{ asset('footer-logo.png') }}" alt="Company name">
                    <p class="text-md leading-6 text-white">eFarm: Partner Peternakanmu</p>
                </a>
            </div>
            <div class="xs:mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-lg font-bold leading-6 text-white">Layanan</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('homepage.market') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Market</a>
                            </li>
                            <li>
                                <a href="{{ route('homepage.partner') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Partner</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-lg font-bold leading-6 text-white">Perusahaan</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('homepage.about') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Tentang
                                    Kami</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/ternakexpress" target="_blank"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Kontak</a>
                            </li>
                            <li>
                                <a href="{{ route('homepage.about') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Kebijakan
                                    Privasi</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-lg font-bold leading-6 text-white">Jadi Partner</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('partner.submission') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Pengajuan</a>
                            </li>
                            <li>
                                <a href="{{ route('homepage.partner') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Proses</a>
                            </li>
                            <li>
                                <a href="{{ route('partner.login') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Login
                                    Partner</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-lg font-bold leading-6 text-white">Market</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('homepage.market') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Kategori</a>
                            </li>
                            <li>
                                <a href="{{ route('homepage.market') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Jenis
                                    Hewan</a>
                            </li>
                            <li>
                                <a href="{{ route('homepage.market.nearest') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Terdekatmu</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-white">
        <div class="max-w-7xl px-4 mx-auto text-black">
            <div class="text-center flex justify-between items-center">
                <h3 class="text-lg font-medium text-primarybase">Media Sosial</h3>
                <div class="flex justify-center">
                    <div class="flex items-center w-auto rounded-lg px-4 py-2">
                        <div class="flex space-x-6">
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Facebook</span>
                                <img src="{{ asset('bxl-facebook.png') }}" alt="" srcset="">
                            </a>
                            <a href="#" class="text-yellow-500 hover:text-gray-500">
                                <img src="{{ asset('instagram-logo.png') }}" alt="" srcset="">

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="border-t border-white pt-8 sm:mt-20 lg:mt-24">
        <p class="text-md flex justify-center items-center pb-6 leading-5 text-white">&copy; 2024 eFarm, Tbk.
            All
            rights
            reserved.</p>
    </div>
</footer>
</div>

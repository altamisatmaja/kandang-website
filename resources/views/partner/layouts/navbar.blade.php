<style>
    [x-cloak] {
        display: none !important;
    }

    * {
        font-family: 'Montserrat';
    }

    nav {
        position: sticky;
        top: 0;
        z-index: 999;
        background-color: white;
    }

    .icon path {
        fill: currentColor;
        transition: fill 0.3s ease;
    }

    .icon:hover path {
        fill: #ffffff;
    }
</style>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script>
    const setup = () => {
        return {
            loading: true,
            isSidebarOpen: false,
            toggleSidbarMenu() {
                this.isSidebarOpen = !this.isSidebarOpen
            },
            isSettingsPanelOpen: false,
            isSearchBoxOpen: false,
        }
    }
</script>

@auth
    <nav class="z-50 md:py-5 pr-5 md:mx-auto sticky">
        <div class="hidden lg:flex lg:justify-between lg:items-center">
            <ul class="flex items-center space-x-1 font-semibold">

                <li><a href="{{ route('partner.farm.list') }}"
                        class="px-2 xl:px-4 py-2 text-textbase text-base rounded-md hover:bg-primarybase hover:text-white">Peternakan
                    </a>
                </li>
                <li><a href="{{ route('partner.report.list') }}"
                        class="px-2 xl:px-4 py-2 text-textbase text-base rounded-md hover:bg-primarybase hover:text-white">Laporan</a>
                </li>
                <li><a href="/partner/testimonial"
                        class="px-2 xl:px-4 py-2 text-textbase text-base rounded-md hover:bg-primarybase hover:text-white">Ulasan</a>
                </li>
                <li><a href="{{ route('partner.product.list') }}"
                        class="px-2 xl:px-4 py-2 text-textbase text-base rounded-md hover:bg-primarybase hover:text-white">Produk</a>
                </li>
                <li class="relative" x-data="{ open: false }">
                    <a x-on:click="open = !open" x-on:click.outside="open = false" href="#"
                        class="px-2 xl:px-4 py-2 text-textbase text-base rounded-md hover:bg-primarybase hover:text-white flex gap-2 items-center">
                        Pesanan
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 stroke-current stroke-2 transform duration-500 ease-in-out"
                            :class="open ? 'rotate-90' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg> </a>
                    <ul x-cloak x-show="open" x-transition
                        class="absolute top-10 left-0 bg-white p-4 rounded-md shadow overflow-hidden w-64">
                        @php
                            $username = auth()->user()->username;
                        @endphp
                        <li>
                            <a href="{{ route('partner.order.master') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="M240-160q-33 0-56.5-23.5T160-240q0-33 23.5-56.5T240-320q33 0 56.5 23.5T320-240q0 33-23.5 56.5T240-160Zm240 0q-33 0-56.5-23.5T400-240q0-33 23.5-56.5T480-320q33 0 56.5 23.5T560-240q0 33-23.5 56.5T480-160Zm240 0q-33 0-56.5-23.5T640-240q0-33 23.5-56.5T720-320q33 0 56.5 23.5T800-240q0 33-23.5 56.5T720-160ZM240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400ZM240-640q-33 0-56.5-23.5T160-720q0-33 23.5-56.5T240-800q33 0 56.5 23.5T320-720q0 33-23.5 56.5T240-640Zm240 0q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Zm240 0q-33 0-56.5-23.5T640-720q0-33 23.5-56.5T720-800q33 0 56.5 23.5T800-720q0 33-23.5 56.5T720-640Z" />
                                </svg>
                                Semua pesanan
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('partner.order.new') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="M160-240v-436L98-810q-7-15-1-30.5t21-22.5q15-7 30.5-1.5T171-844l77 166h464l77-166q7-15 22.5-21t30.5 2q15 7 21 22.5t-1 30.5l-62 134v436q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm240-200h160q17 0 28.5-11.5T600-480q0-17-11.5-28.5T560-520H400q-17 0-28.5 11.5T360-480q0 17 11.5 28.5T400-440ZM240-240h480v-358H240v358Zm0 0v-358 358Z" />
                                </svg>
                                Pesanan terbaru
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('partner.order.confirmed') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="m691-235-17-17q-9-9-21.5-9t-21.5 9q-9 9-9 21t9 21l39 39q9 9 21 9t21-9l97-95q9-9 9-21.5t-9-21.5q-9-9-21.5-9t-21.5 9l-75 74ZM280-600h400q17 0 28.5-11.5T720-640q0-17-11.5-28.5T680-680H280q-17 0-28.5 11.5T240-640q0 17 11.5 28.5T280-600ZM720-40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40ZM120-760q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v215q0 17-11.5 28.5T800-505q-17 0-28.5-11.5T760-545v-215H200v562h243q2 15 6 30t9 29q5 11-4 17.5t-17-1.5l-3-3q-6-6-14-6t-14 6l-32 32q-6 6-14 6t-14-6l-32-32q-6-6-14-6t-14 6l-32 32q-6 6-14 6t-14-6l-32-32q-6-6-14-6t-14 6l-46 46v-680Zm160 480h135q17 0 28.5-11.5T455-320q0-17-11.5-28.5T415-360H280q-17 0-28.5 11.5T240-320q0 17 11.5 28.5T280-280Zm0-160h262q17 0 28.5-11.5T582-480q0-17-11.5-28.5T542-520H280q-17 0-28.5 11.5T240-480q0 17 11.5 28.5T280-440Zm-80 242v-562 562Z" />
                                </svg>
                                Pesanan dikonfirmasi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('partner.order.packed') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-80 92L160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11Zm200-528 77-44-237-137-78 45 238 136Zm-160 93 78-45-237-137-78 45 237 137Z" />
                                </svg>
                                Pesanan dikemas
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('partner.order.sent') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="M240-160q-50 0-85-35t-35-85H80q-17 0-28.5-11.5T40-320v-400q0-33 23.5-56.5T120-800h480q33 0 56.5 23.5T680-720v80h80q19 0 36 8.5t28 23.5l88 117q4 5 6 11t2 13v147q0 17-11.5 28.5T880-280h-40q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z" />
                                </svg>
                                Pesanan dikirim
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('partner.order.end') }}"
                                class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                    width="24px" fill="currentColor"
                                    class="icon transition duration-300 ease-in-out transform hover:text-white">
                                    <path
                                        d="M80-160q-17 0-28.5-11.5T40-200q0-17 11.5-28.5T80-240h160v-80H120q-17 0-28.5-11.5T80-360q0-17 11.5-28.5T120-400h120v-80h-78q-17 0-28.5-11.5T122-520q0-17 11.5-28.5T162-560h78v-118l-61-132q-7-15-1.5-30.5T198-863q15-7 30.5-1.5T251-844l77 164h464l-61-130q-7-15-1.5-30.5T750-863q15-7 30.5-1.5T803-844l69 148q4 8 6 16.5t2 17.5v422q0 33-23.5 56.5T800-160H80Zm400-280h160q17 0 28.5-11.5T680-480q0-17-11.5-28.5T640-520H480q-17 0-28.5 11.5T440-480q0 17 11.5 28.5T480-440ZM320-240h480v-360H320v360Zm0 0v-360 360Z" />
                                </svg>
                                Pesanan selesai
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="flex items-center gap-6">
                <li>
                    <a href="{{ route('partner.account') }}">
                        <div
                            class="flex flex-row items-center justify-center rounded-lg gap-2 ring-1 ring-primarybase py-2 px-4">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                                fill="#AAC14C">
                                <path
                                    d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                            </svg>
                            <span class="font-semibold text-textbase">
                                {{ $partner->nama_partner }}
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div x-data="{ open: false }" class="lg:hidden relative mx-4 my-4 flex justify-between w-full">
            <a href="#" class="flex items-start gap-2 group">
                <div class="text-white p-3 rounded-md group-hover:bg-primarybase hover:text-white">
                    <img class="w-24" src="{{ asset('efarm-partner-logo.png') }}" alt="">
                </div>
            </a>
            <div class="flex flex-wrap items-start mt-3 pt-1">
                <a aria-current="page" class="active" href="{{ route('partner.logout') }}">
                    <button class="" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                            fill="currentColor">
                            <path
                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                        </svg>
                    </button>
                </a>
            </div>
            <button x-on:click="open = !open" type="button" class="bg-primarybase p-3 rounded-md m-2">
                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                </svg>
                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div x-show="open" x-transition class="absolute top-14 -left-1 right-6 w-full bg-white rounded-md bPesanan">
                <ul class="p-4">
                    <li class="px-4 py-2 rounded hover:bg-primarybase hover:text-white">
                        <a hhref="{{ route('partner.dashboard') }}" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-primarybase hover:text-white">
                        <a href="{{ route('partner.farm.list') }}" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Peternakan
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-primarybase hover:text-white">
                        <a href="{{ route('partner.report.list') }}" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Laporan
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-primarybase hover:text-white">
                        <a href="/partner/testimonial" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Ulasan
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-primarybase hover:text-white">
                        <a href="{{ route('partner.product.list') }}" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Produk
                        </a>
                    </li>
                    <li class="relative" x-data="{ open: false }">
                        <a x-on:click="open = !open" x-on:click.outside="open = false" href="#"
                            class="px-4 xl:px-4 py-2  rounded-md hover:bg-primarybase hover:text-white flex gap-2 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4 stroke-current stroke-2 transform duration-500 ease-in-out"
                                :class="open ? 'rotate-90' : ''" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Pesanan
                        </a>
                        <ul x-cloak x-show="open" x-transition
                            class="absolute top-10 left-0 bg-white p-4 rounded-md shadow overflow-hidden w-64">
                            @php
                                $username = auth()->user()->username;
                            @endphp
                            <li>
                                <a href="{{ route('partner.order.master') }}"
                                    class="p-4 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960"
                                        width="15px" fill="currentColor"
                                        class="icon transition duration-300 ease-in-out transform hover:text-white">
                                        <path
                                            d="M240-160q-33 0-56.5-23.5T160-240q0-33 23.5-56.5T240-320q33 0 56.5 23.5T320-240q0 33-23.5 56.5T240-160Zm240 0q-33 0-56.5-23.5T400-240q0-33 23.5-56.5T480-320q33 0 56.5 23.5T560-240q0 33-23.5 56.5T480-160Zm240 0q-33 0-56.5-23.5T640-240q0-33 23.5-56.5T720-320q33 0 56.5 23.5T800-240q0 33-23.5 56.5T720-160ZM240-400q-33 0-56.5-23.5T160-480q0-33 23.5-56.5T240-560q33 0 56.5 23.5T320-480q0 33-23.5 56.5T240-400Zm240 0q-33 0-56.5-23.5T400-480q0-33 23.5-56.5T480-560q33 0 56.5 23.5T560-480q0 33-23.5 56.5T480-400Zm240 0q-33 0-56.5-23.5T640-480q0-33 23.5-56.5T720-560q33 0 56.5 23.5T800-480q0 33-23.5 56.5T720-400ZM240-640q-33 0-56.5-23.5T160-720q0-33 23.5-56.5T240-800q33 0 56.5 23.5T320-720q0 33-23.5 56.5T240-640Zm240 0q-33 0-56.5-23.5T400-720q0-33 23.5-56.5T480-800q33 0 56.5 23.5T560-720q0 33-23.5 56.5T480-640Zm240 0q-33 0-56.5-23.5T640-720q0-33 23.5-56.5T720-800q33 0 56.5 23.5T800-720q0 33-23.5 56.5T720-640Z" />
                                    </svg>
                                    Semua pesanan
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('partner.order.new') }}"
                                    class="p-3 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960"
                                        width="15px" fill="currentColor"
                                        class="icon transition duration-300 ease-in-out transform hover:text-white">
                                        <path
                                            d="M160-240v-436L98-810q-7-15-1-30.5t21-22.5q15-7 30.5-1.5T171-844l77 166h464l77-166q7-15 22.5-21t30.5 2q15 7 21 22.5t-1 30.5l-62 134v436q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm240-200h160q17 0 28.5-11.5T600-480q0-17-11.5-28.5T560-520H400q-17 0-28.5 11.5T360-480q0 17 11.5 28.5T400-440ZM240-240h480v-358H240v358Zm0 0v-358 358Z" />
                                    </svg>
                                    Pesanan terbaru
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('partner.order.confirmed') }}"
                                    class="p-3 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960"
                                        width="15px" fill="currentColor"
                                        class="icon transition duration-300 ease-in-out transform hover:text-white">
                                        <path
                                            d="m691-235-17-17q-9-9-21.5-9t-21.5 9q-9 9-9 21t9 21l39 39q9 9 21 9t21-9l97-95q9-9 9-21.5t-9-21.5q-9-9-21.5-9t-21.5 9l-75 74ZM280-600h400q17 0 28.5-11.5T720-640q0-17-11.5-28.5T680-680H280q-17 0-28.5 11.5T240-640q0 17 11.5 28.5T280-600ZM720-40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40ZM120-760q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v215q0 17-11.5 28.5T800-505q-17 0-28.5-11.5T760-545v-215H200v562h243q2 15 6 30t9 29q5 11-4 17.5t-17-1.5l-3-3q-6-6-14-6t-14 6l-32 32q-6 6-14 6t-14-6l-32-32q-6-6-14-6t-14 6l-32 32q-6 6-14 6t-14-6l-32-32q-6-6-14-6t-14 6l-46 46v-680Zm160 480h135q17 0 28.5-11.5T455-320q0-17-11.5-28.5T415-360H280q-17 0-28.5 11.5T240-320q0 17 11.5 28.5T280-280Zm0-160h262q17 0 28.5-11.5T582-480q0-17-11.5-28.5T542-520H280q-17 0-28.5 11.5T240-480q0 17 11.5 28.5T280-440Zm-80 242v-562 562Z" />
                                    </svg>
                                    Pesanan dikonfirmasi
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('partner.order.packed') }}"
                                    class="p-3 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960"
                                        width="15px" fill="currentColor"
                                        class="icon transition duration-300 ease-in-out transform hover:text-white">
                                        <path
                                            d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-80 92L160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11Zm200-528 77-44-237-137-78 45 238 136Zm-160 93 78-45-237-137-78 45 237 137Z" />
                                    </svg>
                                    Pesanan dikemas
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('partner.order.sent') }}"
                                    class="p-3 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960"
                                        width="15px" fill="currentColor"
                                        class="icon transition duration-300 ease-in-out transform hover:text-white">
                                        <path
                                            d="M240-160q-50 0-85-35t-35-85H80q-17 0-28.5-11.5T40-320v-400q0-33 23.5-56.5T120-800h480q33 0 56.5 23.5T680-720v80h80q19 0 36 8.5t28 23.5l88 117q4 5 6 11t2 13v147q0 17-11.5 28.5T880-280h-40q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z" />
                                    </svg>
                                    Pesanan dikirim
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('partner.order.end') }}"
                                    class="p-3 text-textbase text-base rounded flex items-center gap-2 hover:bg-primarybase hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="15px" viewBox="0 -960 960 960"
                                        width="15px" fill="currentColor"
                                        class="icon transition duration-300 ease-in-out transform hover:text-white">
                                        <path
                                            d="M80-160q-17 0-28.5-11.5T40-200q0-17 11.5-28.5T80-240h160v-80H120q-17 0-28.5-11.5T80-360q0-17 11.5-28.5T120-400h120v-80h-78q-17 0-28.5-11.5T122-520q0-17 11.5-28.5T162-560h78v-118l-61-132q-7-15-1.5-30.5T198-863q15-7 30.5-1.5T251-844l77 164h464l-61-130q-7-15-1.5-30.5T750-863q15-7 30.5-1.5T803-844l69 148q4 8 6 16.5t2 17.5v422q0 33-23.5 56.5T800-160H80Zm400-280h160q17 0 28.5-11.5T680-480q0-17-11.5-28.5T640-520H480q-17 0-28.5 11.5T440-480q0 17 11.5 28.5T480-440ZM320-240h480v-360H320v360Zm0 0v-360 360Z" />
                                    </svg>
                                    Pesanan selesai
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="px-4 py-2 rounded hover:bg-primarybase hover:text-white">
                        <a href="{{ route('partner.account') }}" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Akun
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-primarybase hover:text-white">
                        <a href="{{ route('partner.account.information') }}" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Profile
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-primarybase hover:text-white">
                        <a href="{{ route('partner.account.edit') }}" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Edit Akun
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-primarybase hover:text-white">
                        <a href="{{ route('partner.account.rekening') }}" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Rekening
                        </a>
                    </li>
                    <li class="px-4 py-2 rounded hover:bg-primarybase hover:text-white">
                        <a href="{{ route('partner.account.password') }}" class="flex items-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                            Lupa password
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
@endauth

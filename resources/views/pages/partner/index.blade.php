@extends('includes.app')

@section('title', 'eFarm | Partner')

@section('content')
    <div>
        <section
            class="relative overflow-hidden bg-gradient-to-b from-green-50 via-transparent to-transparent pb-12 pt-20 sm:pb-16 sm:pt-32 lg:pb-24 xl:pb-32 xl:pt-40">
            <div class="relative z-10">
                <div
                    class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 justify-center overflow-hidden [mask-image:radial-gradient(50%_45%_at_50%_55%,white,transparent)]">
                    <svg class="h-[60rem] w-[100rem] flex-none stroke-green-600 opacity-20" aria-hidden="true">
                        <defs>
                            <pattern id="e9033f3e-f665-41a6-84ef-756f6778e6fe" width="200" height="200" x="50%"
                                y="50%" patternUnits="userSpaceOnUse" patternTransform="translate(-100 0)">
                                <path d="M.5 200V.5H200" fill="none"></path>
                            </pattern>
                        </defs>
                        <svg x="50%" y="50%" class="overflow-visible fill-green-50">
                            <path d="M-300 0h201v201h-201Z M300 200h201v201h-201Z" stroke-width="0"></path>
                        </svg>
                        <rect width="100%" height="100%" stroke-width="0"
                            fill="url(#e9033f3e-f665-41a6-84ef-756f6778e6fe)">
                        </rect>
                    </svg>
                </div>
            </div>
            <div class="relative z-20 mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h1 class="block font-bold text-textbase text-5xl md:text-5xl lg:text-6xl">
                        Jual <span class="text-primarybase">Hewan ternak</span> Anda bersama kami!
                    </h1>
                    <div class="mt-5 max-w-3xl">
                        <p class="text-lg text-textbase">Kelola peternakan, jual hewan ternak, beli hewan ternak
                            dengan berbagai layanan yang tersedia di eFarm.</p>
                    </div>
                    <div class="mt-12 grid grid-cols-2 gap-8 sm:grid-cols-2 sm:gap-0 sm:gap-x-4">
                        <a href="{{ route('partner.submission') }}"
                            class="flex flex-row items-center justify-center gap-x-2 rounded-lg text-white px-10 py-3 bg-primarybase">
                            <svg class="h-[30px] text-white" stroke="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 64 64" stroke-width="3" stroke="#000000" fill="none">
                                <path d="M14,39.87,24.59,50.51s33-14,31.23-42.29C55.82,8.22,29.64,4.28,14,39.87Z">
                                </path>
                                <path d="M44.69,9.09a12.3,12.3,0,0,0,3.48,6.73,12.31,12.31,0,0,0,7,3.52"></path>
                                <circle cx="39.46" cy="24.56" r="6.2"></circle>
                                <path
                                    d="M14.89,37.82l-5.3.68a.27.27,0,0,1-.28-.37l3.93-9a2.65,2.65,0,0,1,1.88-1.53l6.59-1.38">
                                </path>
                                <path
                                    d="M26.55,49.4l-.69,5.3a.27.27,0,0,0,.37.28l9-3.92a2.69,2.69,0,0,0,1.53-1.89l1.38-6.59">
                                </path>
                                <path d="M22.21,48.13c-2.37,7.41-14.1,7.78-14.1,7.78S8,44.51,15.76,41.67"></path>
                            </svg>
                            Jadi Partner
                        </a>
                        <a href="{{ route('partner.login') }}"
                            class="flex flex-row items-center justify-center gap-x-2 rounded-lg border border-primarybase px-10 py-3 text-primarybase">Masuk
                            sebagai Partner →
                        </a>
                    </div>
                </div>
                <div class="w-full mx-auto mt-16 px-16 text-center md:w-10/12">
                    <div class="relative z-0 w-full mt-8">
                        <div class="relative overflow-hidden shadow-2xl">
                            <div class="flex items-center flex-none px-4 bg-primarybase rounded-b-none h-11 rounded-xl">
                                <div class="flex space-x-1.5">
                                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                                    <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                                </div>
                            </div>
                            <img src="https://cdn.devdojo.com/images/march2021/green-dashboard.jpg">
                        </div>
                    </div>
                </div>
        </section>


        <section class="flex flex-col py-20">
            <h1 class="block font-bold text-textbase text-center text-5xl md:text-5xl lg:text-6xl">
                Rekam Jejak <span class="text-primarybase ">eFarm</span>
            </h1>
            <div
                class="mt-10 grid md:grid-cols-4 lg:grid-cols-4 gap-y-5 lg:gap-y-0 gap-x-5 place-items-center w-full mx-auto max-w-7xl px-5">
                <div
                    class="flex flex-col justify-center items-center bg-[#FFF6F3] px-4 h-[126px] w-[100%] md:w-[281px] md:h-[192px] rounded-lg justify-self-center">
                    <div class="flex flex-row justify-center items-center">
                        <svg class="w-[35px] h-[35px] md:w-[50px] md:h-[50px]" viewBox="0 0 50 50" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M39.37 18.432c0 3.058-.906 5.862-2.466 8.203a14.728 14.728 0 0 1-10.079 6.367c-.717.127-1.455.19-2.214.19-.759 0-1.497-.063-2.214-.19a14.728 14.728 0 0 1-10.078-6.368 14.692 14.692 0 0 1-2.467-8.202c0-8.16 6.6-14.76 14.76-14.76s14.759 6.6 14.759 14.76Z"
                                stroke="#AAC14C" stroke-width="3.473" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                            <path
                                d="m44.712 38.17-3.431.83a2.063 2.063 0 0 0-1.539 1.572l-.728 3.122c-.09.384-.281.734-.554 1.012a2.068 2.068 0 0 1-.992.564c-.375.09-.768.073-1.134-.052a2.078 2.078 0 0 1-.938-.653l-9.92-11.64-9.92 11.661a2.078 2.078 0 0 1-.938.653 2.038 2.038 0 0 1-1.134.052 2.067 2.067 0 0 1-.992-.563 2.137 2.137 0 0 1-.554-1.012l-.728-3.123a2.13 2.13 0 0 0-.55-1.01 2.06 2.06 0 0 0-.988-.562L6.24 38.19a2.073 2.073 0 0 1-.956-.533 2.14 2.14 0 0 1-.563-.953 2.175 2.175 0 0 1-.015-1.113c.091-.366.276-.7.536-.97l8.11-8.284a14.672 14.672 0 0 0 4.307 4.281 14.34 14.34 0 0 0 5.634 2.134 12.29 12.29 0 0 0 2.183.191c.749 0 1.477-.063 2.184-.19 4.138-.617 7.694-3.017 9.94-6.416l8.11 8.285c1.144 1.147.583 3.165-.998 3.547Zm-18.03-26.532 1.227 2.507c.167.34.603.68.998.743l2.226.383c1.414.233 1.747 1.296.727 2.336l-1.726 1.764c-.29.297-.457.87-.353 1.295l.499 2.188c.395 1.721-.5 2.4-1.996 1.487l-2.08-1.253a1.434 1.434 0 0 0-1.372 0l-2.08 1.253c-1.497.892-2.392.234-1.996-1.487l.499-2.188c.083-.403-.063-.998-.354-1.295l-1.726-1.764c-1.019-1.04-.686-2.081.728-2.336l2.225-.383c.375-.063.811-.403.977-.743l1.227-2.507c.604-1.36 1.685-1.36 2.35 0Z"
                                stroke="#AAC14C" stroke-width="3.473" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                        <p class="font-bold text-3xl sm:text-4xl lg:text-5xl text-textbase leading-9 text-primary ml-2">412+</p>
                    </div>
                    <p class="font-semibold text-lg sm:text-lg leading-6 mt-3 md:mt-6 text-textbase text-center">Partner</p>
                </div>
                <div
                    class="flex flex-col justify-center items-center bg-[#FFF6F3] px-4 h-[126px] w-[100%] md:w-[281px] md:h-[192px] rounded-lg justify-self-center">
                    <div class="flex flex-row justify-center items-center">
                        <svg class="w-[35px] h-[35px] md:w-[50px] md:h-[50px]" viewBox="0 0 51 50" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#a)">
                                <path
                                    d="m26.91 5.776 4.483 10.683a1.544 1.544 0 0 0 1.287.942l11.474.992a1.544 1.544 0 0 1 .876 2.715L36.325 28.7a1.559 1.559 0 0 0-.49 1.523l2.61 11.296a1.544 1.544 0 0 1-2.295 1.677l-9.86-5.982a1.53 1.53 0 0 0-1.59 0l-9.861 5.982a1.544 1.544 0 0 1-2.295-1.677l2.609-11.296a1.56 1.56 0 0 0-.49-1.523l-8.705-7.593a1.544 1.544 0 0 1 .876-2.715l11.474-.992a1.544 1.544 0 0 0 1.287-.942l4.483-10.683a1.544 1.544 0 0 1 2.833 0Z"
                                    stroke="#AAC14C" stroke-width="4.341" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </g>
                            <defs>
                                <clipPath id="a">
                                    <path fill="#fff" d="M.8.2h49.4v49.4H.8z"></path>
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="font-bold text-3xl sm:text-4xl lg:text-5xl leading-9 text-textbase text-primary ml-2">4.9</p>
                    </div>
                    <p class="font-semibold text-lg sm:text-lg leading-6 mt-3 md:mt-6 text-textbase text-center">Rating di Google Maps
                    </p>
                </div>
                <div
                    class="flex flex-col justify-center items-center bg-[#FFF6F3] px-4 h-[126px] w-[100%] md:w-[281px] md:h-[192px] rounded-lg justify-self-center">
                    <div class="flex flex-row justify-center items-center">
                        <svg class="w-[35px] h-[35px] md:w-[50px] md:h-[50px]" viewBox="0 0 50 50" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#a)" stroke="#AAC14C" stroke-width="3.473" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M10.811 39.091c-1.775-1.775-.598-5.505-1.5-7.69-.939-2.255-4.377-4.089-4.377-6.5 0-2.413 3.438-4.246 4.376-6.502.903-2.182-.274-5.914 1.501-7.69 1.776-1.775 5.508-.598 7.69-1.5 2.266-.939 4.09-4.377 6.501-4.377 2.412 0 4.246 3.438 6.501 4.376 2.185.903 5.915-.274 7.69 1.501 1.776 1.776.598 5.506 1.502 7.69.937 2.266 4.376 4.09 4.376 6.501 0 2.412-3.439 4.246-4.377 6.501-.903 2.185.274 5.915-1.5 7.69-1.776 1.776-5.506.598-7.69 1.501-2.256.938-4.09 4.377-6.502 4.377s-4.245-3.439-6.5-4.377c-2.183-.903-5.915.275-7.69-1.5Z">
                                </path>
                                <path d="m17.281 26.444 4.632 4.631L32.718 20.27"></path>
                            </g>
                            <defs>
                                <clipPath id="a">
                                    <path fill="#fff" d="M.3.2h49.4v49.4H.3z"></path>
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="font-bold text-3xl sm:text-4xl lg:text-5xl leading-9 text-textbase text-primary ml-2">1000+</p>
                    </div>
                    <p class="font-semibold text-lg sm:text-lg leading-6 mt-3 text-textbase md:mt-6 text-center">Total Pelanggan
                    </p>
                </div>
                <div
                    class="flex flex-col justify-center items-center bg-[#FFF6F3] px-4 h-[126px] w-[100%] md:w-[281px] md:h-[192px] rounded-lg justify-self-center">
                    <div class="flex flex-row justify-center items-center">
                        <svg class="w-[35px] h-[35px] md:w-[50px] md:h-[50px]" viewBox="0 0 51 50" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M45.571 12.006 27.046 30.531l-7.719-7.718L5.434 36.706" stroke="#AAC14C"
                                stroke-width="4.341" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M45.569 24.356v-12.35h-12.35" stroke="#AAC14C" stroke-width="4.341"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <p class="font-bold text-3xl sm:text-4xl lg:text-5xl leading-9 text-textbase text-primary ml-2">40%+</p>
                    </div>
                    <p class="font-semibold text-lg sm:text-lg leading-6 mt-3 md:mt-6 text-textbase text-center">Pelanggan 2023</p>
                </div>
            </div>
        </section>

        <section id="testimonies" class="my-32 bg-white">
            <div class="max-w-6xl mx-8 md:mx-10 lg:mx-20 xl:mx-auto">
                <div
                    class="transition duration-500 ease-in-out transform scale-100 translate-x-0 translate-y-0 opacity-100">
                    <div class="mb-12 space-y-5 md:mb-16 md:text-center">
                        <h1 class="block font-bold text-textbase text-5xl py-5 md:text-5xl lg:text-6xl">
                            Apa kata <span class="text-primarybase">Partner kami?</span>
                        </h1>
                    </div>
                </div>

                <div class="grid xs:grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-8">
                    <ul class="space-y-8">
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Kanye West">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Kanye West</h3>
                                                <p class="text-base text-md">Rapper &amp; Entrepreneur</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Find God.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Tim Cook">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Tim Cook</h3>
                                                <p class="text-base text-md">CEO of Apple</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Diam quis enim lobortis
                                            scelerisque
                                            fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec
                                            sagittis
                                            aliquam malesuada bibendum.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/kanyewest" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/1276461929934942210/cqNhNk6v_400x400.jpg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Kanye West">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Kanye West</h3>
                                                <p class="text-base text-md">Rapper &amp; Entrepreneur</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Find God.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Tim Cook">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Tim Cook</h3>
                                                <p class="text-base text-md">CEO of Apple</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Diam quis enim lobortis
                                            scelerisque
                                            fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec
                                            sagittis
                                            aliquam malesuada bibendum.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>

                    <ul class="hidden space-y-8 sm:block">
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/paraga" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/1375285353146327052/y6jeByyD_400x400.jpg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Parag Agrawal">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Parag Agrawal</h3>
                                                <p class="text-base text-md">CEO of Twitter</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Enim neque volutpat ac
                                            tincidunt vitae
                                            semper. Mattis aliquam faucibus purus in massa tempor. Neque vitae tempus
                                            quam
                                            pellentesque nec. Turpis cursus in hac habitasse platea dictumst.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Tim Cook">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Tim Cook</h3>
                                                <p class="text-base text-md">CEO of Apple</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Diam quis enim lobortis
                                            scelerisque
                                            fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec
                                            sagittis
                                            aliquam malesuada bibendum.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/paraga" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/1375285353146327052/y6jeByyD_400x400.jpg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Parag Agrawal">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Parag Agrawal</h3>
                                                <p class="text-base text-md">CEO of Twitter</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Enim neque volutpat ac
                                            tincidunt vitae
                                            semper. Mattis aliquam faucibus purus in massa tempor. Neque vitae tempus
                                            quam
                                            pellentesque nec. Turpis cursus in hac habitasse platea dictumst.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/tim_cook" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/1535420431766671360/Pwq-1eJc_400x400.jpg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Tim Cook">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Tim Cook</h3>
                                                <p class="text-base text-md">CEO of Apple</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Diam quis enim lobortis
                                            scelerisque
                                            fermentum dui faucibus in ornare. Donec pretium vulputate sapien nec
                                            sagittis
                                            aliquam malesuada bibendum.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>


                    <ul class="hidden space-y-8 lg:block">
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/satyanadella" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/1221837516816306177/_Ld4un5A_400x400.jpg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Satya Nadella">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Satya Nadella</h3>
                                                <p class="text-base text-md">CEO of Microsoft</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Tortor dignissim convallis
                                            aenean et
                                            tortor at. At ultrices mi tempus imperdiet nulla malesuada. Id cursus metus
                                            aliquam
                                            eleifend mi. Quis ipsum suspendisse ultrices gravida dictum fusce ut.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/dan_schulman" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/516916920482672641/3jCeLgFb_400x400.jpeg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Dan Schulman">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Dan Schulman</h3>
                                                <p class="text-base text-md">CEO of PayPal</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Quam pellentesque nec nam
                                            aliquam sem
                                            et tortor consequat id. Enim sit amet venenatis urna cursus.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/satyanadella" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/1221837516816306177/_Ld4un5A_400x400.jpg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Satya Nadella">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Satya Nadella</h3>
                                                <p class="text-base text-md">CEO of Microsoft</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Tortor dignissim convallis
                                            aenean et
                                            tortor at. At ultrices mi tempus imperdiet nulla malesuada. Id cursus metus
                                            aliquam
                                            eleifend mi. Quis ipsum suspendisse ultrices gravida dictum fusce ut.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="text-sm leading-6">
                            <div class="relative group">
                                <div
                                    class="absolute transition rounded-lg opacity-25 -inset-1 bg-primarybase blur duration-400 group-hover:opacity-100 group-hover:duration-200">
                                </div><a href="https://twitter.com/dan_schulman" class="cursor-pointer">
                                    <div
                                        class="relative p-6 space-y-6 leading-none rounded-lg bg-sekunderbase ring-1 ring-gray-900/5">
                                        <div class="flex items-center space-x-4"><img
                                                src="https://pbs.twimg.com/profile_images/516916920482672641/3jCeLgFb_400x400.jpeg"
                                                class="w-12 h-12 bg-center bg-cover border rounded-full"
                                                alt="Dan Schulman">
                                            <div>
                                                <h3 class="text-lg font-semibold text-textbase">Dan Schulman</h3>
                                                <p class="text-base text-md">CEO of PayPal</p>
                                            </div>
                                        </div>
                                        <p class="leading-normal text-textbase text-md">Quam pellentesque nec nam
                                            aliquam sem
                                            et tortor consequat id. Enim sit amet venenatis urna cursus.</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </section>



        <section class="bg-gray-50 py-12 pb-32 sm:py-10 lg:py-10 xl:py-10">
            <div class="mx-auto max-w-7xl ">
                <div class="text-center">
                    <p class="text-lg font-semibold text-textbase">Cara menjadi Partner eFarm?</p>
                    <h2 class="mt-6 text-6xl font-bold tracking-tight text-textbase sm:text-4xl lg:text-5xl">Hanya 4 langkah, <span class="text-primarybase">tanpa ribet</span>
                    </h2>
                    <p class="mx-auto mt-4 max-w-2xl text-lg font-normal text-textbase lg:text-xl lg:leading-8">
                        Isi formulir, validasi, jadi Partner, mulai berjualan 🤩
                    </p>
                </div>
                <ul
                    class="mx-auto mt-12 grid max-w-7xl xs:grid-cols-1 md:grid-cols-4 gap-10 sm:mt-16 lg:mt-20 lg:max-w-7xl lg:grid-cols-4">
                    <li class="flex-start group relative flex lg:flex-col">
                        <span
                            class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                            aria-hidden="true"></span>
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-white group-hover:bg-textbase">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-textbase group-hover:text-white">
                                <path
                                    d="M21 12C21 13.6569 16.9706 15 12 15C7.02944 15 3 13.6569 3 12M21 5C21 6.65685 16.9706 8 12 8C7.02944 8 3 6.65685 3 5M21 5C21 3.34315 16.9706 2 12 2C7.02944 2 3 3.34315 3 5M21 5V19C21 20.6569 16.9706 22 12 22C7.02944 22 3 20.6569 3 19V5"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold text-textbase before:mb-2 before:block before:font-mono before:text-sm before:text-textbase">
                                Isi formulir
                            </h3>
                            <h4 class="mt-2 text-base text-textbase">Sesuaikan isi formulir dengan kondisi di Lapangan
                            </h4>
                        </div>
                    </li>
                    <li class="flex-start group relative flex lg:flex-col">
                        <span
                            class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                            aria-hidden="true"></span>
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-white group-hover:bg-textbase">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-textbase group-hover:text-white">
                                <path
                                    d="M2 3L2 21M22 3V21M11.8 20H12.2C13.8802 20 14.7202 20 15.362 19.673C15.9265 19.3854 16.3854 18.9265 16.673 18.362C17 17.7202 17 16.8802 17 15.2V8.8C17 7.11984 17 6.27976 16.673 5.63803C16.3854 5.07354 15.9265 4.6146 15.362 4.32698C14.7202 4 13.8802 4 12.2 4H11.8C10.1198 4 9.27976 4 8.63803 4.32698C8.07354 4.6146 7.6146 5.07354 7.32698 5.63803C7 6.27976 7 7.11984 7 8.8V15.2C7 16.8802 7 17.7202 7.32698 18.362C7.6146 18.9265 8.07354 19.3854 8.63803 19.673C9.27976 20 10.1198 20 11.8 20Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold text-textbase before:mb-2 before:block before:font-mono before:text-sm before:text-textbase">
                                Menunggu validasi
                            </h3>
                            <h4 class="mt-2 text-base text-textbase">Proses dilakukan oleh Admin</h4>
                        </div>
                    </li>
                    <li class="flex-start group relative flex lg:flex-col">
                        <span
                            class="absolute left-[18px] top-14 h-[calc(100%_-_32px)] w-px bg-gray-300 lg:right-0 lg:left-auto lg:top-[18px] lg:h-px lg:w-[calc(100%_-_72px)]"
                            aria-hidden="true"></span>
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-white group-hover:bg-textbase">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-textbase group-hover:text-white">
                                <path
                                    d="M22 12C22 17.5228 17.5228 22 12 22M22 12C22 6.47715 17.5228 2 12 2M22 12C22 9.79086 17.5228 8 12 8C6.47715 8 2 9.79086 2 12M22 12C22 14.2091 17.5228 16 12 16C6.47715 16 2 14.2091 2 12M12 22C6.47715 22 2 17.5228 2 12M12 22C14.2091 22 16 17.5228 16 12C16 6.47715 14.2091 2 12 2M12 22C9.79086 22 8 17.5228 8 12C8 6.47715 9.79086 2 12 2M2 12C2 6.47715 6.47715 2 12 2"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold text-textbase before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                                Pengajuan divalidasi
                            </h3>
                            <h4 class="mt-2 text-base text-textbase">Selamat Anda berhasil jadi partner kami</h4>
                        </div>
                    </li>
                    <li class="flex-start group relative flex lg:flex-col">
                        <div
                            class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-gray-300 bg-gray-50 transition-all duration-200 group-hover:border-white group-hover:bg-textbase">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-600 group-hover:text-white">
                                <path
                                    d="M5.50049 10.5L2.00049 7.9999L3.07849 6.92193C3.964 6.03644 4.40676 5.5937 4.9307 5.31387C5.39454 5.06614 5.90267 4.91229 6.42603 4.86114C7.01719 4.80336 7.63117 4.92617 8.85913 5.17177L10.5 5.49997M18.4999 13.5L18.8284 15.1408C19.0742 16.3689 19.1971 16.983 19.1394 17.5743C19.0883 18.0977 18.9344 18.6059 18.6867 19.0699C18.4068 19.5939 17.964 20.0367 17.0783 20.9224L16.0007 22L13.5007 18.5M7 16.9998L8.99985 15M17.0024 8.99951C17.0024 10.1041 16.107 10.9995 15.0024 10.9995C13.8979 10.9995 13.0024 10.1041 13.0024 8.99951C13.0024 7.89494 13.8979 6.99951 15.0024 6.99951C16.107 6.99951 17.0024 7.89494 17.0024 8.99951ZM17.1991 2H16.6503C15.6718 2 15.1826 2 14.7223 2.11053C14.3141 2.20853 13.9239 2.37016 13.566 2.5895C13.1623 2.83689 12.8164 3.18282 12.1246 3.87469L6.99969 9C5.90927 10.0905 5.36406 10.6358 5.07261 11.2239C4.5181 12.343 4.51812 13.6569 5.07268 14.776C5.36415 15.3642 5.90938 15.9094 6.99984 16.9998V16.9998C8.09038 18.0904 8.63565 18.6357 9.22386 18.9271C10.343 19.4817 11.6569 19.4817 12.7761 18.9271C13.3643 18.6356 13.9095 18.0903 15 16.9997L20.1248 11.8745C20.8165 11.1827 21.1624 10.8368 21.4098 10.4331C21.6291 10.0753 21.7907 9.6851 21.8886 9.27697C21.9991 8.81664 21.9991 8.32749 21.9991 7.34918V6.8C21.9991 5.11984 21.9991 4.27976 21.6722 3.63803C21.3845 3.07354 20.9256 2.6146 20.3611 2.32698C19.7194 2 18.8793 2 17.1991 2Z"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <div class="ml-6 lg:ml-0 lg:mt-10">
                            <h3
                                class="text-xl font-bold text-textbase before:mb-2 before:block before:font-mono before:text-sm before:text-gray-500">
                                Mulai berjualan!
                            </h3>
                            <h4 class="mt-2 text-base text-textbase">Sebarluaskan pasar ternak Anda
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <div class="py-24 px-8 max-w-7xl mx-auto flex flex-col md:flex-row gap-12">
            <div class="flex flex-col text-left basis-1/2">
                <p class="inline-block text-textbase font-semibold text-primary mb-4">Pertanyaan dari calon Partner</p>
                <p class="sm:text-4xl text-4xl text-textbase font-bold text-base-content">Paling sering ditanyakan</p>
            </div>
            <ul class="basis-1/2">
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Bagaimana cara memesan hewan ternak di platform ini?</span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center transition duration-200 ease-out false"></rect>
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center rotate-90 transition duration-200 ease-out false">
                            </rect>
                        </svg>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">Pengguna dapat memesan hewan ternak melalui platform kami dengan cara mendaftar sebagai pengguna, memilih hewan yang diinginkan, dan melakukan pembayaran melalui fitur payment secara online</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Apakah ada jaminan kesehatan dan kebersihan hewan yang dibeli?
                        </span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center transition duration-200 ease-out false"></rect>
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center rotate-90 transition duration-200 ease-out false">
                            </rect>
                        </svg>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">Kami memastikan bahwa semua hewan yang kami jual telah melewati proses pemeriksaan kesehatan yang ketat oleh tenaga profesional. Kami juga memastikan kebersihan dan kesejahteraan hewan sebelum pengiriman</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Bagaimana proses pengiriman hewan yang telah pengguna pesan?</span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center transition duration-200 ease-out false"></rect>
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center rotate-90 transition duration-200 ease-out false">
                            </rect>
                        </svg>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">Setelah pembayaran dikonfirmasi, partner akan mengatur pengiriman hewan tersebut sesuai dengan permintaan Anda. Kami bekerja sama dengan penyedia jasa pengiriman terpercaya untuk memastikan hewan tiba dengan aman dan tepat waktu</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Bagaimana saya bisa menjadi mitra atau penjual di platform ini?
                        </span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center transition duration-200 ease-out false"></rect>
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center rotate-90 transition duration-200 ease-out false">
                            </rect>
                        </svg>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">Untuk menjadi mitra atau penjual di platform kami, Anda dapat mendaftar melalui fitur <span class="font-semibold text-primarybase"><a href="{{ route('partner.submission') }}">Daftar sebagai Partner</a></span> di website kami. Tim kami akan menghubungi Anda untuk proses selanjutnya</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Apakah ada persyaratan khusus untuk menjadi mitra atau penjual?                        </span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center transition duration-200 ease-out false"></rect>
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center rotate-90 transition duration-200 ease-out false">
                            </rect>
                        </svg>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">Kami meminta calon mitra atau penjual untuk memenuhi persyaratan tertentu, termasuk memiliki izin usaha yang sah dan mematuhi standar kesejahteraan hewan yang ditetapkan</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Bagaimana cara saya mengelola dan memperbarui produk yang saya jual di platform ini?</span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center transition duration-200 ease-out false"></rect>
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center rotate-90 transition duration-200 ease-out false">
                            </rect>
                        </svg>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">Setelah Anda menjadi mitra atau penjual, Anda akan memiliki akses ke dashboard khusus di mana Anda dapat mengelola inventaris produk Anda, termasuk pembaruan harga, stok, dan deskripsi produk</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Apa manfaat menjadi mitra atau partner di platform ini?                        </span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center transition duration-200 ease-out false"></rect>
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center rotate-90 transition duration-200 ease-out false">
                            </rect>
                        </svg>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">Sebagai mitra atau partner, Anda akan mendapatkan akses ke pasar yang lebih luas dan mendapat eksposur lebih besar bagi produk Anda. Selain itu, kami juga menyediakan dukungan pemasaran dan promosi untuk membantu meningkatkan penjualan Anda</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Apakah ada biaya atau komisi yang perlu saya bayarkan sebagai mitra atau partner?</span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center transition duration-200 ease-out false"></rect>
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center rotate-90 transition duration-200 ease-out false">
                            </rect>
                        </svg>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">
                                Kami tidak mengenakan biaya pendaftaran atau biaya bulanan kepada mitra atau partner kami. Kami mengambil komisi yang wajar dari setiap transaksi yang berhasil dilakukan melalui platform kami</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Apakah saya bisa menentukan harga sendiri untuk produk yang saya jual di platform ini?</span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center transition duration-200 ease-out false"></rect>
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center rotate-90 transition duration-200 ease-out false">
                            </rect>
                        </svg>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">Ya, sebagai mitra atau partner, Anda memiliki kendali penuh atas penetapan harga produk Anda. Namun, kami mendorong Anda untuk menetapkan harga yang bersaing dan sesuai dengan pasar</div>
                        </div>
                    </div>
                </li>
                <li>
                    <button
                        class="relative flex gap-2 items-center w-full py-5 text-base font-semibold text-left border-t md:text-lg border-base-content/10"
                        aria-expanded="false" onclick="toggleFAQ(this)">
                        <span class="flex-1 text-textbase text-base-content">Apakah saya bisa menjadi mitra atau partner di platform ini jika saya berlokasi di luar wilayah operasional saat ini?</span>
                        <svg class="flex-shrink-0 w-4 h-4 ml-auto fill-current" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center transition duration-200 ease-out false"></rect>
                            <rect y="7" width="16" height="2" rx="1"
                                class="transform origin-center rotate-90 transition duration-200 ease-out false">
                            </rect>
                        </svg>
                    </button>
                    <div class="transition-all duration-300 ease-in-out max-h-0 overflow-hidden"
                        style="transition: max-height 0.3s ease-in-out 0s;">
                        <div class="pb-5 leading-relaxed">
                            <div class="space-y-2 leading-relaxed">Kami terbuka untuk bekerja sama dengan mitra di berbagai wilayah. Jika Anda berlokasi di luar wilayah operasional saat ini, silakan hubungi tim kami untuk mendiskusikan kemungkinan kerja sama dan pengiriman produk ke wilayah Anda</div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <script>
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            button.setAttribute("aria-expanded", button.getAttribute("aria-expanded") === "false" ? "true" : "false");
            content.style.maxHeight = button.getAttribute("aria-expanded") === "true" ? content.scrollHeight + "px" : "0";
        }
        // Faq
        document.addEventListener("alpine:init", () => {
            Alpine.store("accordion", {
                tab: 0
            });

            Alpine.data("accordion", (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab =
                        this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? "-rotate-180" : "";
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` :
                        "";
                }
            }));
        });
        //  end faq
    </script>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @endpush
    @endsection

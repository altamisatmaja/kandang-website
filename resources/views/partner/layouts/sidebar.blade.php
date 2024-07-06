<aside
    class="bg-primarybase -translate-x-80 fixed inset-0 z-50 my-4 ml-4 h-[calc(100vh-32px)] w-64 rounded-xl transition-transform duration-300 xl:translate-x-0">
    <div class="relative border-b border-white/20">
        <div class="flex items-center justify-center my-5">
            <a href="{{ route('partner.dashboard') }}" class="flex items-start gap-2 group">
                <img src="{{ asset('icons/efarm-partner-white.png') }}" alt="" class="w-32">
            </a>
        </div>
    </div>
    <div class="relative border-b border-white/20">
        <div class="flex flex-col items-center my-4">
            <div class="flex flex-wrap px-2">
                <div class="mr-2 flex-1">
                    <img src="/uploads/{{ $partner->foto_profil }}"
                        class="relative object-cover shrink-0 h-12 w-12 z-10 rounded-xl">
                </div>
                <div>
                    <p class="text-lg font-bold text-white">
                        {{ $partner->nama_partner }}
                    </p>
                    <div class="text-white font-semibold text-md">
                        Partner
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative border-b border-white/20">
        <div class="mx-2">
            <ul class="mb-4 flex flex-col gap-1">
                <li class="mx-3.5 mt-4 mb-2">
                    <p class="block antialiased  text-sm leading-normal text-white font-bold uppercase">
                        Akun</p>
                </li>
                <li>
                    <a aria-current="page" class="active" href="{{ route('partner.dashboard') }}">
                        <button
                            class="middle none  font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960"
                                width="30px" fill="#ffffff">
                                <path
                                    d="M200-520q-33 0-56.5-23.5T120-600v-160q0-33 23.5-56.5T200-840h160q33 0 56.5 23.5T440-760v160q0 33-23.5 56.5T360-520H200Zm0 400q-33 0-56.5-23.5T120-200v-160q0-33 23.5-56.5T200-440h160q33 0 56.5 23.5T440-360v160q0 33-23.5 56.5T360-120H200Zm400-400q-33 0-56.5-23.5T520-600v-160q0-33 23.5-56.5T600-840h160q33 0 56.5 23.5T840-760v160q0 33-23.5 56.5T760-520H600Zm0 400q-33 0-56.5-23.5T520-200v-160q0-33 23.5-56.5T600-440h160q33 0 56.5 23.5T840-360v160q0 33-23.5 56.5T760-120H600ZM200-600h160v-160H200v160Zm400 0h160v-160H600v160Zm0 400h160v-160H600v160Zm-400 0h160v-160H200v160Zm400-400Zm0 240Zm-240 0Zm0-240Z" />
                            </svg>
                            <p class="block antialiased text-lg leading-relaxed  font-semibold capitalize">
                                Dashboard</p>
                        </button>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('partner.account.information') }}">
                        <button
                            class="middle none  font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960"
                                width="30px" fill="#ffffff">
                                <path
                                    d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z" />
                            </svg>
                            <p class="block antialiased text-lg leading-relaxed  font-semibold capitalize">
                                Profile</p>
                        </button>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('partner.account.edit') }}">
                        <button
                            class="middle none  font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960"
                                width="30px" fill="#ffffff">
                                <path
                                    d="M400-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM80-240v-32q0-33 17-62t47-44q58-29 120-45.5T391-440q17 0 28.5 12t11.5 29q0 17-11.5 28.5T391-359q-56 0-108.5 14T180-306q-10 5-15 14t-5 20v32h231q17 0 28.5 11.5T431-200q0 17-11.5 28.5T391-160H160q-33 0-56.5-23.5T80-240Zm554 88-6-28q-12-5-22.5-10.5T584-204l-29 9q-13 4-25.5-1T510-212l-8-14q-7-12-5-26t13-23l22-19q-2-14-2-26t2-26l-22-19q-11-9-13-22.5t5-25.5l9-15q7-11 19-16t25-1l29 9q11-8 21.5-13.5T628-460l6-29q3-14 13.5-22.5T672-520h16q14 0 24.5 9t13.5 23l6 28q12 5 22.5 11t21.5 15l27-9q14-5 27 0t20 17l8 14q7 12 5 26t-13 23l-22 19q2 12 2 25t-2 25l22 19q11 9 13 22.5t-5 25.5l-9 15q-7 11-19 16t-25 1l-29-9q-11 8-21.5 13.5T732-180l-6 29q-3 14-13.5 22.5T688-120h-16q-14 0-24.5-9T634-152Zm46-88q33 0 56.5-23.5T760-320q0-33-23.5-56.5T680-400q-33 0-56.5 23.5T600-320q0 33 23.5 56.5T680-240ZM400-560q33 0 56.5-23.5T480-640q0-33-23.5-56.5T400-720q-33 0-56.5 23.5T320-640q0 33 23.5 56.5T400-560Zm0-80Zm12 400Z" />
                            </svg>
                            <p class="block antialiased text-lg leading-relaxed  font-semibold capitalize">
                                Akun</p>
                        </button>
                    </a>
                </li>
                <li>
                    <a class="" href="{{ route('partner.account.rekening') }}">
                        <button
                            class="middle none  font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                            type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960"
                                width="30px" fill="#ffffff">
                                <path
                                    d="M200-200v-560 560Zm0 80q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v100h-80v-100H200v560h560v-100h80v100q0 33-23.5 56.5T760-120H200Zm320-160q-33 0-56.5-23.5T440-360v-240q0-33 23.5-56.5T520-680h280q33 0 56.5 23.5T880-600v240q0 33-23.5 56.5T800-280H520Zm280-80v-240H520v240h280Zm-160-60q25 0 42.5-17.5T700-480q0-25-17.5-42.5T640-540q-25 0-42.5 17.5T580-480q0 25 17.5 42.5T640-420Z" />
                            </svg>
                            <p class="block antialiased text-lg leading-relaxed  font-semibold capitalize">
                                Rekening</p>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="mx-2">
        <ul class="mb-4 flex flex-col gap-1">
            <li class="mx-3.5 mt-4 mb-2">
                <p class="block antialiased  text-sm leading-normal text-white font-bold uppercase">
                    Autentikasi</p>
            </li>
            <li>
                <a aria-current="page" class="active" href="{{ route('partner.account.password') }}">
                    <button
                        class="middle none  font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                            fill="#ffffff">
                            <path
                                d="M80-200v-80h800v80H80Zm46-242-52-30 34-60H40v-60h68l-34-58 52-30 34 58 34-58 52 30-34 58h68v60h-68l34 60-52 30-34-60-34 60Zm320 0-52-30 34-60h-68v-60h68l-34-58 52-30 34 58 34-58 52 30-34 58h68v60h-68l34 60-52 30-34-60-34 60Zm320 0-52-30 34-60h-68v-60h68l-34-58 52-30 34 58 34-58 52 30-34 58h68v60h-68l34 60-52 30-34-60-34 60Z" />
                        </svg>
                        <p class="block antialiased text-lg leading-relaxed  font-semibold capitalize">
                            Password</p>
                    </button>
                </a>
            </li>
            <li>
                <a aria-current="page" class="active" href="{{ route('partner.logout') }}">
                    <button
                        class="middle none  font-bold center transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 rounded-lg text-white hover:bg-white/10 active:bg-white/30 w-full flex items-center gap-4 px-4 capitalize"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px"
                            fill="#ffffff">
                            <path
                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                        </svg>
                        <p class="block antialiased text-lg leading-relaxed  font-semibold capitalize">
                            Logout</p>
                    </button>
                </a>
            </li>
        </ul>
    </div>
</aside>

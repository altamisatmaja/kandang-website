@extends('includes.app')

@section('title', 'eFarm | Jual beli hewan')

@section('content')
        <div class="relative h-[40rem] isolate overflow-hidden bg-primarybase">
            <div class="absolute top-0 w-full h-full bg-center bg-cover"
                style="background-image: url('{{ asset('images/herofixed.png') }}');">
                <span id="blackOverlay" class="w-full h-full absolute opacity-25 bg-black"></span>
            </div>

            <div  class="container px-6 py-10 h-screen mx-auto md:py-5">
                <div class="flex flex-col space-y-6 md:flex-row md:space-x-3">
                    <div class="w-full">
                        <div class="max-w-2xl">
                            <div
                                class="relative flex mt-10 flex-col bg-white ring-1 ring-primarybase w-full mb-4 rounded-lg">
                                <div class="bg-white rounded-lg">
                                    <div class="py-8 px-10">
                                        <h1 class="animate-typing overflow-hidden whitespace-nowrap border-r-4 border-r-textbase pr-3 text-4xl font-bold tracking-tight text-textbase sm:text-6xl">Beli hewan ternak dari rumah</h1>
                                        <p class="mt-3 text-xl leading-8 text-textbase">Kelola peternakan, jual hewan ternak, beli
                                            hewan
                                            ternak dengan berbagai layanan yang tersedia di eFarm</p>
                                        <div class="mt-3 flex items-center gap-x-6">
                                            <a href="{{ route('homepage.market') }}"
                                                class="rounded-md cursor-pointer bg-primarybase px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-400">
                                                Beli hewan ternak <span aria-hidden="true">→</span>
                                            </a>
                                            <a href="{{ route('homepage.partner') }}"
                                                class="rounded-md bg-white cursor-pointer ring-1 ring-primarybase px-5 py-2.5 text-sm font-semibold leading-6 text-primarybase">Jadi
                                                Partner</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        {{-- Card --}}
        <section class="pb-10 -mt-[5rem]">
            <div class="container px-9 mx-auto">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <div class="max-w-[100px]">
                                        <img src="{{ asset('shield.svg') }}"
                                            class="rounded-lg bg-white p-4 ring-1 ring-primarybase absolute -m-20 -ml-36 lg:-ml-36 -mt-12 max-w-[60px]" />
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded-lg">
                                <div>
                                    <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full" />
                                </div>
                                <div class="p-4 space-y-3">
                                    <p class="text-xl text-textbase leading-sm">
                                        Memberikan transaksi yang aman dan terpercaya terhadap pengguna! 🤝
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <div class="max-w-[100px]">
                                        <img src="{{ asset('shield.svg') }}"
                                            class="rounded-lg bg-white p-4 ring-1 ring-primarybase absolute -m-20 -ml-36 lg:-ml-36 -mt-12 max-w-[60px]" />
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded-lg">
                                <div>
                                    <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full" />
                                </div>
                                <div class="p-4 space-y-3">
                                    <p class="text-xl text-textbase leading-sm">
                                        Memberikan transaksi yang aman dan terpercaya terhadap pengguna! 🤝
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:w-4/12 px-4">
                        <div class="relative flex flex-col min-w-0 bg-white w-full mb-8 shadow-lg rounded-lg">
                            <div class="w-full flex justify-center">
                                <div class="relative">
                                    <div class="max-w-[100px]">
                                        <img src="{{ asset('shield.svg') }}"
                                            class="rounded-lg bg-white p-4 ring-1 ring-primarybase absolute -m-20 -ml-36 lg:-ml-36 -mt-12 max-w-[60px]" />
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 rounded-lg">
                                <div>
                                    <img src="{{ asset('cardcover.png') }}" alt="montaña" class="w-full" />
                                </div>
                                <div class="p-4 space-y-3">
                                    <p class="text-xl text-textbase leading-sm">
                                        Memberikan transaksi yang aman dan terpercaya terhadap pengguna! 🤝
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 w-full flex justify-center">
                    <div class="bg-sekunderbase w-full px-10 h-1/2-screen rounded-2xl">
                        <h1 class="justify-center flex my-10 font-bold text-4xl text-textbase">Dipercaya oleh</h1>
                        <div class="flex gap-16 mx-auto justify-center my-10">
                            <img src="{{ asset('ipb.png') }}" alt="" class="h-32">
                            <img src="{{ asset('unej.png') }}" alt="" class="h-32">
                            <img src="{{ asset('pemerintah.png') }}" alt="" class="h-32">
                            <img src="{{ asset('pemerintah2.png') }}" alt="" class="h-32">
                        </div>
                        <div class="flex gap-x-7 mx-auto w-full justify-center my-10">
                            <p class="text-textbase text-xl font-semibold">✅ Pencatatan Aktivitas</p>
                            <p class="text-textbase text-xl font-semibold">✅ Teknologi AI</p>
                            <p class="text-textbase text-xl font-semibold">✅ Jual Beli</p>
                            <p class="text-textbase text-xl font-semibold">✅ Keamanan</p>
                        </div>
                    </div>
                </div>
        </section>

        <div x-data="{ openTab: 1 }" class="container px-6 py-10 h-screen mx-auto md:py-5">
            <div class="flex flex-col space-y-6 md:flex-row md:space-x-3">
                <div class="w-full">
                    <div class="max-w-2xl">
                        <h1 class="text-5xl font-bold tracking-wide text-textbase">
                            Layanan yang kami sediakan untuk Anda!
                        </h1>
                        <p class="mt-2 font-medium text-xl text-textbase">
                            Pilih dan raih peternakan ideal bersama kami
                        </p>
                        <div class="grid gap-4 mt-8 sm:grid-cols-3">
                            <div class="flex items-center justify-center text-gray-800">
                                <button x-on:click="openTab = 1"
                                    class="flex w-full bg-primarybase py-3 px-4 rounded-lg ring-1 ring-primarybase">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.77778 11.1111C2.01389 11.1111 1.35995 10.8391 0.815972 10.2951C0.271991 9.75116 0 9.09722 0 8.33333V2.77778C0 2.01389 0.271991 1.35995 0.815972 0.815972C1.35995 0.271991 2.01389 0 2.77778 0H8.33333C9.09722 0 9.75116 0.271991 10.2951 0.815972C10.8391 1.35995 11.1111 2.01389 11.1111 2.77778V8.33333C11.1111 9.09722 10.8391 9.75116 10.2951 10.2951C9.75116 10.8391 9.09722 11.1111 8.33333 11.1111H2.77778ZM2.77778 25C2.01389 25 1.35995 24.728 0.815972 24.184C0.271991 23.64 0 22.9861 0 22.2222V16.6667C0 15.9028 0.271991 15.2488 0.815972 14.7049C1.35995 14.1609 2.01389 13.8889 2.77778 13.8889H8.33333C9.09722 13.8889 9.75116 14.1609 10.2951 14.7049C10.8391 15.2488 11.1111 15.9028 11.1111 16.6667V22.2222C11.1111 22.9861 10.8391 23.64 10.2951 24.184C9.75116 24.728 9.09722 25 8.33333 25H2.77778ZM16.6667 11.1111C15.9028 11.1111 15.2488 10.8391 14.7049 10.2951C14.1609 9.75116 13.8889 9.09722 13.8889 8.33333V2.77778C13.8889 2.01389 14.1609 1.35995 14.7049 0.815972C15.2488 0.271991 15.9028 0 16.6667 0H22.2222C22.9861 0 23.64 0.271991 24.184 0.815972C24.728 1.35995 25 2.01389 25 2.77778V8.33333C25 9.09722 24.728 9.75116 24.184 10.2951C23.64 10.8391 22.9861 11.1111 22.2222 11.1111H16.6667ZM16.6667 25C15.9028 25 15.2488 24.728 14.7049 24.184C14.1609 23.64 13.8889 22.9861 13.8889 22.2222V16.6667C13.8889 15.9028 14.1609 15.2488 14.7049 14.7049C15.2488 14.1609 15.9028 13.8889 16.6667 13.8889H22.2222C22.9861 13.8889 23.64 14.1609 24.184 14.7049C24.728 15.2488 25 15.9028 25 16.6667V22.2222C25 22.9861 24.728 23.64 24.184 24.184C23.64 24.728 22.9861 25 22.2222 25H16.6667ZM2.77778 8.33333H8.33333V2.77778H2.77778V8.33333ZM16.6667 8.33333H22.2222V2.77778H16.6667V8.33333ZM16.6667 22.2222H22.2222V16.6667H16.6667V22.2222ZM2.77778 22.2222H8.33333V16.6667H2.77778V22.2222Z"
                                            fill="white" />
                                    </svg>
                                    <p class="text-white ml-2 font-semibold text-lg">Semua Layanan</p>
                                </button>
                            </div>
                            <div class="flex items-center justify-center text-gray-800">
                                <button x-on:click="openTab = 2"
                                    class="flex  w-full bg-white py-3 px-4 rounded-lg ring-1 ring-primarybase">
                                    <svg width="35" height="25" viewBox="0 0 31 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.02337 19.2775V23.5694C8.02337 23.9747 7.88627 24.3145 7.61206 24.5887C7.33786 24.8629 6.99809 25 6.59275 25C6.18741 25 5.84764 24.8629 5.57344 24.5887C5.29924 24.3145 5.16214 23.9747 5.16214 23.5694V19.2775H3.73152C3.32618 19.2775 2.98641 19.1404 2.71221 18.8662C2.43801 18.592 2.30091 18.2523 2.30091 17.8469C2.30091 17.4416 2.43801 17.1018 2.71221 16.8276C2.98641 16.5534 3.32618 16.4163 3.73152 16.4163H5.16214V10.4793L2.30091 12.6609C1.9671 12.8994 1.60944 13.0007 1.22794 12.965C0.846447 12.9292 0.536481 12.7444 0.298045 12.4106C0.059609 12.0768 -0.0357654 11.7191 0.0119218 11.3376C0.059609 10.9561 0.250358 10.6462 0.584168 10.4077L13.4239 0.572246C13.6862 0.381497 13.9664 0.238436 14.2644 0.143062C14.5625 0.0476872 14.8665 0 15.1764 0C15.4864 0 15.7904 0.0476872 16.0885 0.143062C16.3865 0.238436 16.6667 0.381497 16.9289 0.572246L29.7687 10.4077C30.0787 10.6462 30.2635 10.9561 30.3231 11.3376C30.3827 11.7191 30.2933 12.0768 30.0548 12.4106C29.8164 12.7444 29.5064 12.9292 29.1249 12.965C28.7434 13.0007 28.3858 12.8994 28.052 12.6609L25.1907 10.4793V16.4163H26.6214C27.0267 16.4163 27.3665 16.5534 27.6407 16.8276C27.9149 17.1018 28.052 17.4416 28.052 17.8469C28.052 18.2523 27.9149 18.592 27.6407 18.8662C27.3665 19.1404 27.0267 19.2775 26.6214 19.2775H25.1907V23.5694C25.1907 23.9747 25.0536 24.3145 24.7794 24.5887C24.5052 24.8629 24.1655 25 23.7601 25C23.3548 25 23.015 24.8629 22.7408 24.5887C22.4666 24.3145 22.3295 23.9747 22.3295 23.5694V19.2775H16.6071V23.5694C16.6071 23.9747 16.47 24.3145 16.1958 24.5887C15.9216 24.8629 15.5818 25 15.1764 25C14.7711 25 14.4313 24.8629 14.1571 24.5887C13.8829 24.3145 13.7458 23.9747 13.7458 23.5694V19.2775H8.02337ZM8.02337 16.4163H13.7458V3.93419L8.02337 8.29757V16.4163ZM16.6071 16.4163H22.3295V8.29757L16.6071 3.93419V16.4163Z"
                                            fill="#AAC14C" />
                                    </svg>
                                    <p class="text-primarybase ml-2 font-semibold text-lg">Partner</p>
                                </button>
                            </div>
                            <div class="flex items-center justify-center text-gray-800">
                                <button x-on:click="openTab = 3"
                                    class="flex  w-full bg-white py-3 px-4 rounded-lg ring-1 ring-primarybase">
                                    <svg width="35" height="25" viewBox="0 0 51 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2.42415 25C1.83388 25 1.33908 24.8003 0.939779 24.401C0.540473 24.0017 0.34082 23.5069 0.34082 22.9167V21.7188C0.34082 20.2257 1.10471 19.0104 2.63249 18.0729C4.16026 17.1354 6.17415 16.6667 8.67415 16.6667C9.12554 16.6667 9.55957 16.6753 9.97624 16.6927C10.3929 16.7101 10.7922 16.7535 11.1742 16.8229C10.688 17.5521 10.3235 18.316 10.0804 19.1146C9.83735 19.9132 9.71582 20.7465 9.71582 21.6146V25H2.42415ZM14.9242 25C14.3339 25 13.8391 24.8003 13.4398 24.401C13.0405 24.0017 12.8408 23.5069 12.8408 22.9167V21.6146C12.8408 20.5035 13.1446 19.4878 13.7523 18.5677C14.3599 17.6476 15.2193 16.8403 16.3304 16.1458C17.4415 15.4514 18.7696 14.9306 20.3148 14.5833C21.8599 14.2361 23.5353 14.0625 25.3408 14.0625C27.1811 14.0625 28.8738 14.2361 30.4189 14.5833C31.9641 14.9306 33.2922 15.4514 34.4033 16.1458C35.5144 16.8403 36.3651 17.6476 36.9554 18.5677C37.5457 19.4878 37.8408 20.5035 37.8408 21.6146V22.9167C37.8408 23.5069 37.6412 24.0017 37.2419 24.401C36.8426 24.8003 36.3478 25 35.7575 25H14.9242ZM40.9658 25V21.6146C40.9658 20.7118 40.853 19.8611 40.6273 19.0625C40.4016 18.2639 40.063 17.5174 39.6117 16.8229C39.9936 16.7535 40.3842 16.7101 40.7835 16.6927C41.1828 16.6753 41.5908 16.6667 42.0075 16.6667C44.5075 16.6667 46.5214 17.1267 48.0492 18.0469C49.5769 18.967 50.3408 20.191 50.3408 21.7188V22.9167C50.3408 23.5069 50.1412 24.0017 49.7419 24.401C49.3426 24.8003 48.8478 25 48.2575 25H40.9658ZM17.2679 20.8333H33.4658C33.1186 20.1389 32.1551 19.5312 30.5752 19.0104C28.9953 18.4896 27.2505 18.2292 25.3408 18.2292C23.4311 18.2292 21.6863 18.4896 20.1064 19.0104C18.5266 19.5312 17.5804 20.1389 17.2679 20.8333ZM8.67415 14.5833C7.52832 14.5833 6.54742 14.1753 5.73145 13.3594C4.91547 12.5434 4.50749 11.5625 4.50749 10.4167C4.50749 9.23611 4.91547 8.24653 5.73145 7.44792C6.54742 6.64931 7.52832 6.25 8.67415 6.25C9.85471 6.25 10.8443 6.64931 11.6429 7.44792C12.4415 8.24653 12.8408 9.23611 12.8408 10.4167C12.8408 11.5625 12.4415 12.5434 11.6429 13.3594C10.8443 14.1753 9.85471 14.5833 8.67415 14.5833ZM42.0075 14.5833C40.8617 14.5833 39.8807 14.1753 39.0648 13.3594C38.2488 12.5434 37.8408 11.5625 37.8408 10.4167C37.8408 9.23611 38.2488 8.24653 39.0648 7.44792C39.8807 6.64931 40.8617 6.25 42.0075 6.25C43.188 6.25 44.1776 6.64931 44.9762 7.44792C45.7748 8.24653 46.1742 9.23611 46.1742 10.4167C46.1742 11.5625 45.7748 12.5434 44.9762 13.3594C44.1776 14.1753 43.188 14.5833 42.0075 14.5833ZM25.3408 12.5C23.6047 12.5 22.129 11.8924 20.9137 10.6771C19.6985 9.46181 19.0908 7.98611 19.0908 6.25C19.0908 4.47917 19.6985 2.99479 20.9137 1.79688C22.129 0.598958 23.6047 0 25.3408 0C27.1117 0 28.596 0.598958 29.7939 1.79688C30.9919 2.99479 31.5908 4.47917 31.5908 6.25C31.5908 7.98611 30.9919 9.46181 29.7939 10.6771C28.596 11.8924 27.1117 12.5 25.3408 12.5ZM25.3408 8.33333C25.9311 8.33333 26.4259 8.13368 26.8252 7.73438C27.2245 7.33507 27.4242 6.84028 27.4242 6.25C27.4242 5.65972 27.2245 5.16493 26.8252 4.76562C26.4259 4.36632 25.9311 4.16667 25.3408 4.16667C24.7505 4.16667 24.2558 4.36632 23.8564 4.76562C23.4571 5.16493 23.2575 5.65972 23.2575 6.25C23.2575 6.84028 23.4571 7.33507 23.8564 7.73438C24.2558 8.13368 24.7505 8.33333 25.3408 8.33333Z"
                                            fill="#AAC14C" />
                                    </svg>
                                    <p class="text-primarybase ml-2 font-semibold text-lg">Market</p>
                                </button>
                            </div>
                        </div>
                        <div
                            class="relative flex mt-10 flex-col bg-sekunderbase ring-1 ring-primarybase w-full mb-4 rounded-lg">
                            <div class="bg-sekunderbase rounded-lg">
                                <div class="py-8 px-10">
                                    <div class="flex flex-wrap items-center">
                                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.77778 11.1111C2.01389 11.1111 1.35995 10.8391 0.815972 10.2951C0.271991 9.75116 0 9.09722 0 8.33333V2.77778C0 2.01389 0.271991 1.35995 0.815972 0.815972C1.35995 0.271991 2.01389 0 2.77778 0H8.33333C9.09722 0 9.75116 0.271991 10.2951 0.815972C10.8391 1.35995 11.1111 2.01389 11.1111 2.77778V8.33333C11.1111 9.09722 10.8391 9.75116 10.2951 10.2951C9.75116 10.8391 9.09722 11.1111 8.33333 11.1111H2.77778ZM2.77778 25C2.01389 25 1.35995 24.728 0.815972 24.184C0.271991 23.64 0 22.9861 0 22.2222V16.6667C0 15.9028 0.271991 15.2488 0.815972 14.7049C1.35995 14.1609 2.01389 13.8889 2.77778 13.8889H8.33333C9.09722 13.8889 9.75116 14.1609 10.2951 14.7049C10.8391 15.2488 11.1111 15.9028 11.1111 16.6667V22.2222C11.1111 22.9861 10.8391 23.64 10.2951 24.184C9.75116 24.728 9.09722 25 8.33333 25H2.77778ZM16.6667 11.1111C15.9028 11.1111 15.2488 10.8391 14.7049 10.2951C14.1609 9.75116 13.8889 9.09722 13.8889 8.33333V2.77778C13.8889 2.01389 14.1609 1.35995 14.7049 0.815972C15.2488 0.271991 15.9028 0 16.6667 0H22.2222C22.9861 0 23.64 0.271991 24.184 0.815972C24.728 1.35995 25 2.01389 25 2.77778V8.33333C25 9.09722 24.728 9.75116 24.184 10.2951C23.64 10.8391 22.9861 11.1111 22.2222 11.1111H16.6667ZM16.6667 25C15.9028 25 15.2488 24.728 14.7049 24.184C14.1609 23.64 13.8889 22.9861 13.8889 22.2222V16.6667C13.8889 15.9028 14.1609 15.2488 14.7049 14.7049C15.2488 14.1609 15.9028 13.8889 16.6667 13.8889H22.2222C22.9861 13.8889 23.64 14.1609 24.184 14.7049C24.728 15.2488 25 15.9028 25 16.6667V22.2222C25 22.9861 24.728 23.64 24.184 24.184C23.64 24.728 22.9861 25 22.2222 25H16.6667ZM2.77778 8.33333H8.33333V2.77778H2.77778V8.33333ZM16.6667 8.33333H22.2222V2.77778H16.6667V8.33333ZM16.6667 22.2222H22.2222V16.6667H16.6667V22.2222ZM2.77778 22.2222H8.33333V16.6667H2.77778V22.2222Z"
                                                fill="#444444" />
                                        </svg>
                                        <p class="text-3xl ml-2 font-semibold text-textbase leading-sm">
                                            Semua layanan eFarm
                                        </p>
                                    </div>
                                    <p class="text-xl text-textbase leading-sm mt-2">
                                        Pelajari lebih lanjut semua layanan eFarm untuk mengembangkan ternak Anda
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-4/6 px-4">
                    <div x-show="openTab === 1">
                        <div class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-10 rounded-lg">
                            <div class="bg-gray-50 rounded-lg">
                                <div class="relative flex">
                                    <img src="{{ asset('cardcover.png') }}" alt="montaña"
                                        class="w-full bg-cover" />
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
                        <div class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-10 rounded-lg">
                            <div class="bg-gray-50 rounded-lg">
                                <div class="relative flex">
                                    <img src="{{ asset('cardcover.png') }}" alt="montaña"
                                        class="w-full bg-cover" />
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <img src="{{ asset('efarm-partner-logo.png') }}" alt="montaña"
                                            class="" />
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
                    <div x-show="openTab === 2" class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-10 rounded-lg">
                        <div class="bg-gray-50 rounded-lg">
                            <div class="relative flex">
                                <img src="{{ asset('cardcover.png') }}" alt="montaña"
                                    class="w-full bg-cover" />
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
                    <div x-show="openTab === 3" class="relative flex flex-col bg-white ring-1 ring-primarybase w-full mb-10 rounded-lg">
                        <div class="bg-gray-50 rounded-lg">
                            <div class="relative flex">
                                <img src="{{ asset('cardcover.png') }}" alt="montaña"
                                    class="w-full bg-cover" />
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <img src="{{ asset('efarm-partner-logo.png') }}" alt="montaña"
                                        class="" />
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
            </div>
        </div>
        <div class="relative flex my-44 flex-col justify-center sm:py-5">
            <div class="w-full items-center mx-auto max-w-screen-lg">
                <div class="group grid w-full grid-cols-2">
                    <div class="">
                        <h class="text-4xl font-bold tracking-wide text-textbase">
                            Jadi partner kami untuk melakukan <span class="text-primarybase">penjualan</span> hewan
                            ternak!
                        </h>
                        <div class="flex my-3 items-center text-gray-800">
                            <a href="{{ route('homepage.partner') }}"
                                class="flex items-center bg-primarybase py-3 px-4 rounded-lg ring-1 ring-primarybase">
                                <p class="text-white mr-4 font-semibold text-lg">Jadi partner</p>
                                <svg width="25" height="20" viewBox="0 0 28 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="white"
                                        d="M21.8407 11.7976H1.79759C1.28827 11.7976 0.861346 11.6253 0.516807 11.2808C0.172269 10.9362 0 10.5093 0 10C0 9.49068 0.172269 9.06375 0.516807 8.71922C0.861346 8.37468 1.28827 8.20241 1.79759 8.20241H21.8407L16.7176 3.07927C16.3581 2.71976 16.1858 2.30032 16.2008 1.82096C16.2158 1.3416 16.388 0.922164 16.7176 0.562646C17.0771 0.203128 17.504 0.0158787 17.9984 0.000898796C18.4927 -0.0140811 18.9196 0.158188 19.2792 0.517706L27.5031 8.74169C27.6829 8.92144 27.8102 9.11618 27.8851 9.3259C27.96 9.53562 27.9975 9.76032 27.9975 10C27.9975 10.2397 27.96 10.4644 27.8851 10.6741C27.8102 10.8838 27.6829 11.0786 27.5031 11.2583L19.2792 19.4823C18.9196 19.8418 18.4927 20.0141 17.9984 19.9991C17.504 19.9841 17.0771 19.7969 16.7176 19.4374C16.388 19.0778 16.2158 18.6584 16.2008 18.179C16.1858 17.6997 16.3581 17.2802 16.7176 16.9207L21.8407 11.7976Z"
                                        fill="#AAC14C" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="pl-12">
                            <h3 class="text-2xl text-textbase font-medium mb-6">Hingga dalam satu tahun, Ternak Express
                                berhasil memiliki 1000 lebih partner yang tersebar diseluruh wilayah Indonesia</h3>
                            <div class="grid grid-cols-2 gap-6 justify-between mb-3">
                                <div>
                                    <div
                                        class="flex items-center py-2 px-2 justify-center gap-3 w-full bg-sekunderbase rounded-lg">
                                        <p class="font-semibold justify-center text-textbase flex items-center">Service
                                        </p>
                                    </div>
                                    <p
                                        class="flex my-2 text-textbase font-bold text-6xl justify-center items-center gap-3">
                                        1023+
                                    </p>
                                </div>
                                <div>
                                    <div
                                        class="flex items-center py-2 px-2 justify-center gap-3 w-full bg-sekunderbase rounded-lg">
                                        <p class="font-semibold justify-center text-textbase flex items-center">
                                            Penjualan 2023</p>
                                    </div>
                                    <p
                                        class="flex my-2 text-textbase font-bold text-6xl justify-center items-center gap-3">
                                        40232+
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="testimonies" class="py-5 bg-white">
            <div class="max-w-6xl mx-8 md:mx-10 lg:mx-20 xl:mx-auto">
                <div
                    class="transition duration-500 ease-in-out transform scale-100 translate-x-0 translate-y-0 opacity-100">
                    <div class="mb-12 space-y-5 md:mb-16 md:text-center">
                        <h1 class="block font-bold text-textbase text-5xl md:text-5xl lg:text-6xl">
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
                                </div><a href="#" class="cursor-pointer">
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
                                </div><a href="#" class="cursor-pointer">
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
                                </div><a href="#" class="cursor-pointer">
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
                                </div><a href="#" class="cursor-pointer">
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
                                </div><a href="#" class="cursor-pointer">
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
                                </div><a href="#" class="cursor-pointer">
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
                                </div><a href="#" class="cursor-pointer">
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
                                </div><a href="#" class="cursor-pointer">
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
                                </div><a href="#" class="cursor-pointer">
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
                                </div><a href="#" class="cursor-pointer">
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
                                </div><a href="#" class="cursor-pointer">
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
                                </div><a href="#" class="cursor-pointer">
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

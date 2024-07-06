@extends('admin.layouts.app')

@section('title' | 'Dashboard | Order accepted')

@section('content')
    <section class="container mx-auto px-4">
        <div class="pb-5">
            <ol class="flex items-center gap-4">
                <li>
                    <div
                        class="flex items-center text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <a  class="text-textbase" href="{{ route('admin.dashboard') }}">Beranda </a>
                    </div>
                </li>
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a class="text-textbase"  href="{{ route('admin.order.end') }}"> Pesanan diterima </a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <h3 class="font-semibold text-textbase text-xl mb-5">Semua order</h3>
                    <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        <div class="flex items-center gap-x-3">
                                            <button class="flex items-center gap-x-2">
                                                <span>No</span>

                                                <svg class="h-3" viewBox="0 0 10 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M2.13347 0.0999756H2.98516L5.01902 4.79058H3.86226L3.45549 3.79907H1.63772L1.24366 4.79058H0.0996094L2.13347 0.0999756ZM2.54025 1.46012L1.96822 2.92196H3.11227L2.54025 1.46012Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path
                                                        d="M0.722656 9.60832L3.09974 6.78633H0.811638V5.87109H4.35819V6.78633L2.01925 9.60832H4.43446V10.5617H0.722656V9.60832Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.1" />
                                                    <path
                                                        d="M8.45558 7.25664V7.40664H8.60558H9.66065C9.72481 7.40664 9.74667 7.42274 9.75141 7.42691C9.75148 7.42808 9.75146 7.42993 9.75116 7.43262C9.75001 7.44265 9.74458 7.46304 9.72525 7.49314C9.72522 7.4932 9.72518 7.49326 9.72514 7.49332L7.86959 10.3529L7.86924 10.3534C7.83227 10.4109 7.79863 10.418 7.78568 10.418C7.77272 10.418 7.73908 10.4109 7.70211 10.3534L7.70177 10.3529L5.84621 7.49332C5.84617 7.49325 5.84612 7.49318 5.84608 7.49311C5.82677 7.46302 5.82135 7.44264 5.8202 7.43262C5.81989 7.42993 5.81987 7.42808 5.81994 7.42691C5.82469 7.42274 5.84655 7.40664 5.91071 7.40664H6.96578H7.11578V7.25664V0.633865C7.11578 0.42434 7.29014 0.249976 7.49967 0.249976H8.07169C8.28121 0.249976 8.45558 0.42434 8.45558 0.633865V7.25664Z"
                                                        fill="currentColor" stroke="currentColor" stroke-width="0.3" />
                                                </svg>
                                            </button>
                                        </div>
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Tanggal
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Status
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Pelanggan
                                    </th>

                                    <th scope="col"
                                        class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                        Partner
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200 ">
                                @foreach ($allorders as $allorder)
                                    <tr>
                                        <td class="px-4 py-4 text-sm text-textbaser">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-4 text-sm text-textbaser">
                                            {{ $allorder['order']['created_at']->diffForHumans() }}
                                        </td>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            @if ($allorder['order']['status'] == 'Baru')
                                                <div
                                                    class="inline-flex items-center px-5 py-1 text-textbase rounded-full gap-x-2 bg-yellow-100/60">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 -960 960 960" width="24px" fill="#444444">
                                                        <path
                                                            d="M160-160v-516L82-846l72-34 94 202h464l94-202 72 34-78 170v516H160Zm240-280h160q17 0 28.5-11.5T600-480q0-17-11.5-28.5T560-520H400q-17 0-28.5 11.5T360-480q0 17 11.5 28.5T400-440ZM240-240h480v-358H240v358Zm0 0v-358 358Z" />
                                                    </svg>
                                                    <h2 class="text-md font-normal">{{ $allorder['order']['status'] }}</h2>
                                                </div>
                                            @elseif($allorder['order']['status'] == 'Dikonfirmasi')
                                                <div
                                                    class="inline-flex items-center px-5 py-1 text-textbase rounded-full gap-x-2 bg-yellow-100/60">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 -960 960 960" width="24px" fill="#444444">
                                                        <path
                                                            d="m691-150 139-138-42-42-97 95-39-39-42 43 81 81ZM240-600h480v-80H240v80ZM720-40q-83 0-141.5-58.5T520-240q0-83 58.5-141.5T720-440q83 0 141.5 58.5T920-240q0 83-58.5 141.5T720-40ZM120-80v-680q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v267q-19-9-39-15t-41-9v-243H200v562h243q5 31 15.5 59T486-86l-6 6-60-60-60 60-60-60-60 60-60-60-60 60Zm120-200h203q3-21 9-41t15-39H240v80Zm0-160h284q38-37 88.5-58.5T720-520H240v80Zm-40 242v-562 562Z" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">{{ $allorder['order']['status'] }}</h2>
                                                </div>
                                            @elseif($allorder['order']['status'] == 'Dikemas')
                                                <div
                                                    class="inline-flex items-center px-5 py-1 text-textbase rounded-full gap-x-2 bg-yellow-100/60">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 -960 960 960" width="24px" fill="#444444">
                                                        <path
                                                            d="M440-183v-274L200-596v274l240 139Zm80 0 240-139v-274L520-457v274Zm-80 92L160-252q-19-11-29.5-29T120-321v-318q0-22 10.5-40t29.5-29l280-161q19-11 40-11t40 11l280 161q19 11 29.5 29t10.5 40v318q0 22-10.5 40T800-252L520-91q-19 11-40 11t-40-11Zm200-528 77-44-237-137-78 45 238 136Zm-160 93 78-45-237-137-78 45 237 137Z" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">{{ $allorder['order']['status'] }}</h2>
                                                </div>
                                            @elseif($allorder['order']['status'] == 'Dikirim')
                                                <div
                                                    class="inline-flex items-center px-5 py-1 text-textbase rounded-full gap-x-2 bg-yellow-100/60">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 -960 960 960" width="24px" fill="#444444">
                                                        <path
                                                            d="M240-160q-50 0-85-35t-35-85H40v-440q0-33 23.5-56.5T120-800h560v160h120l120 160v200h-80q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">{{ $allorder['order']['status'] }}</h2>
                                                </div>
                                            @else
                                                <div
                                                    class="inline-flex items-center px-5 py-1 text-textbase rounded-full gap-x-2 bg-yellow-100/60">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                        viewBox="0 -960 960 960" width="24px" fill="#444444">
                                                        <path
                                                            d="M680-119q-8 0-16-2t-15-7l-120-70q-14-8-21.5-21.5T500-249v-141q0-16 7.5-29.5T529-441l120-70q7-5 15-7t16-2q8 0 15.5 2.5T710-511l120 70q14 8 22 21.5t8 29.5v141q0 16-8 29.5T830-198l-120 70q-7 4-14.5 6.5T680-119ZM400-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM80-160v-112q0-33 17-62t47-44q51-26 115-44t141-18h14q6 0 12 2-8 18-13.5 37.5T404-360h-4q-71 0-127.5 18T180-306q-9 5-14.5 14t-5.5 20v32h252q6 21 16 41.5t22 38.5H80Zm320-400q33 0 56.5-23.5T480-640q0-33-23.5-56.5T400-720q-33 0-56.5 23.5T320-640q0 33 23.5 56.5T400-560Zm0-80Zm12 400Zm174-166 94 55 94-55-94-54-94 54Zm124 208 90-52v-110l-90 53v109Zm-150-52 90 53v-109l-90-53v109Z" />
                                                    </svg>
                                                    <h2 class="text-sm font-normal">{{ $allorder['order']['status'] }}</h2>
                                                </div>
                                            @endif
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-8 h-8 rounded-full"
                                                    src="/uploads/{{ $allorder['order']['user']['profile_photo_path'] }}"
                                                    alt="">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800 ">
                                                        {{ $allorder['order']['user']['nama'] }}</h2>
                                                    <p class="text-xs font-normal text-gray-600 ">
                                                        {{ $allorder['order']['user']['alamat_lengkap'] }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-textbaser">
                                            <div class="flex items-center gap-x-2">
                                                <img class="object-cover w-8 h-8 rounded-full"
                                                    src="/uploads/{{ $allorder['order_details'][0]['partner'][0]['foto_profil'] }}"
                                                    alt="">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800 ">
                                                        {{ $allorder['order_details'][0]['partner'][0]['nama_partner'] }}
                                                    </h2>
                                                    <p class="text-xs font-normal text-gray-600 ">
                                                        {{ $allorder['order_details'][0]['partner'][0]['provinsi_partner'] }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')

    @endpush
@endsection

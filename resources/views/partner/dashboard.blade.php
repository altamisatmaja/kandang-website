@extends('partner.layouts.app')

@section('title', 'Dashboard | List Product')

@section('content')
    <div>
        <ol class="flex items-center gap-4">
            <li>
                <div class="flex items-center text-lg font-medium transition-all duration-300 hover:text-blue-600">
                    <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                    </svg>
                    <a href="#" class="text-md">Beranda </a>
                </div>
            </li>
        </ol>
    </div>
    <div class="mt-12">
        <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-textbase shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-yellow-300 text-white  absolute -mt-4 grid h-16 w-16 place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px"
                        fill="#ffff">
                        <path
                            d="M212.31-140Q182-140 161-161q-21-21-21-51.31v-535.38Q140-778 161-799q21-21 51.31-21h535.38Q778-820 799-799q21 21 21 51.31v535.38Q820-182 799-161q-21 21-51.31 21H212.31ZM324.6-550q-12.75 0-21.37 8.63-8.61 8.62-8.61 21.37v200q0 12.75 8.63 21.37 8.62 8.63 21.38 8.63 12.75 0 21.37-8.63 8.61-8.62 8.61-21.37v-200q0-12.75-8.62-21.37-8.63-8.63-21.39-8.63Zm155.39-120q-12.76 0-21.37 8.63Q450-652.75 450-640v320q0 12.75 8.63 21.37 8.63 8.63 21.38 8.63 12.76 0 21.37-8.63Q510-307.25 510-320v-320q0-12.75-8.63-21.37-8.63-8.63-21.38-8.63Zm155.38 240q-12.75 0-21.37 8.63-8.61 8.62-8.61 21.37v80q0 12.75 8.62 21.37 8.63 8.63 21.39 8.63 12.75 0 21.37-8.63 8.61-8.62 8.61-21.37v-80q0-12.75-8.63-21.37-8.62-8.63-21.38-8.63Z" />
                    </svg>
                </div>
                <div class="p-4 text-right">
                    <p class="block antialiased  text-sm leading-normal font-normal text-blue-gray-600">
                        Total pendapatan</p>
                    <h4 class="block antialiased tracking-normal  text-2xl font-semibold leading-snug text-blue-gray-900">
                        @currency($total_keuntungan)</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4">
                    <p class="block antialiased  text-base leading-relaxed font-normal text-blue-gray-600">
                        Keseluruhan pendapatan dari awal hingga sekarang 🤩
                    </p>
                </div>
            </div>
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-textbase shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-red-400 text-white absolute -mt-4 grid h-16 w-16 place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px"
                        fill="#ffff">
                        <path
                            d="m692.92-225.77-21.61-21.61q-7.08-7.08-16.89-7.08-9.8 0-16.88 7.08-7.08 7.07-7.08 16.57t7.08 16.58l36.69 36.69q8.23 8.23 18.89 8.23 10.65 0 18.88-8.23l90.46-88.84q7.08-7.08 7.27-16.7.19-9.61-7.27-17.07-7.08-7.08-17.08-7.08-10 0-17.07 7.08l-75.39 74.38Zm-18.31-379.62q12.77 0 21.39-8.61 8.61-8.62 8.61-21.38 0-12.77-8.61-21.39-8.62-8.61-21.39-8.61H285.39q-12.77 0-21.39 8.61-8.61 8.62-8.61 21.39 0 12.76 8.61 21.38 8.62 8.61 21.39 8.61h389.22ZM720-57.69q-74.92 0-127.46-52.54Q540-162.77 540-237.69q0-74.92 52.54-127.46 52.54-52.54 127.46-52.54 74.92 0 127.46 52.54Q900-312.61 900-237.69q0 74.92-52.54 127.46Q794.92-57.69 720-57.69Zm-580-50.39v-639.61q0-29.92 21.19-51.12Q182.39-820 212.31-820h535.38q29.92 0 51.12 21.19Q820-777.61 820-747.69v212.31q0 14.69-12.08 23.84-12.08 9.16-26.77 5.31-29.54-6.23-59.5-7.12-29.96-.88-59.73 3.35H285.39q-12.77 0-21.39 8.62-8.61 8.61-8.61 21.38t8.61 21.38q8.62 8.62 21.39 8.62h258.23q-23.54 18.92-42.27 42.96-18.73 24.04-31.66 52.43h-184.3q-12.77 0-21.39 8.61-8.61 8.62-8.61 21.38 0 12.77 8.61 21.39 8.62 8.61 21.39 8.61h165.69q-3.16 13.08-4.62 26.04-1.46 12.96-1.46 27.43 0 22.53 4.04 44.65 4.04 22.11 10.5 44.04 3.84 9.07-3.81 14.61-7.65 5.54-14.5-.54l-6.46-4.92q-5.23-4.46-11.69-4.46-6.46 0-11.69 4.46l-33.54 28.15q-5.23 4.47-11.7 4.47-6.46 0-11.69-4.47l-33.54-28.15q-5.23-4.46-11.69-4.46-6.46 0-11.69 4.46L264-115.16q-5.23 4.47-11.69 4.47-6.46 0-11.69-4.47l-33.54-28.15q-5.23-4.46-11.69-4.46-6.47 0-11.7 4.46l-31.61 28.15q-1.16.77-12.08 7.08Z" />
                    </svg>
                </div>
                <div class="p-4 text-right">
                    <p class="block antialiased  text-sm leading-normal font-normal text-blue-gray-600">
                        Total pesanan</p>
                    <h4 class="block antialiased tracking-normal  text-2xl font-semibold leading-snug text-blue-gray-900">
                        {{ $total_order }}</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4">
                    <p class="block antialiased  text-base leading-relaxed font-normal text-blue-gray-600">
                        Keseluruhan pesanan dari awal hingga sekarang 💸
                    </p>
                </div>
            </div>
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-textbase shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-green-400 text-white  absolute -mt-4 grid h-16 w-16 place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px"
                        fill="#ffff">
                        <path
                            d="M202.92-130q-30.3 0-51.3-21-21-21-21-51.31v-319.54q-24.16-19.84-36.27-51.5-12.12-31.65-.5-68.34l40.46-132.16q8-25.23 27.15-40.69Q180.62-830 207.23-830h546q26.62 0 45.46 14.77 18.85 14.77 27.46 40.62l41.23 132.92q11.62 36.69-.5 68.11-12.11 31.43-36.27 52.5v318.77q0 30.31-21 51.31-21 21-51.3 21H202.92Zm365.7-420q32.77 0 49.27-20.04t13.5-43.04L607.08-770h-96.47v158q0 25.23 17.08 43.62Q544.77-550 568.62-550Zm-180 0q27.61 0 44.8-18.38 17.2-18.39 17.2-43.62v-158h-96.47l-24.3 158.46q-3.24 21.31 13.38 41.43Q359.85-550 388.62-550Zm-178 0q22.23 0 38.23-15.5 16-15.5 19.77-38.96L292.15-770h-84.92q-6.54 0-10.38 2.88-3.85 2.89-5.77 8.66l-38.47 130.15q-7.92 25.77 7.47 52.04Q175.46-550 210.62-550Zm540 0q32.46 0 49.69-25.5 17.23-25.5 8.31-52.81l-40.47-130.92q-1.92-5.77-5.76-8.27-3.85-2.5-10.39-2.5h-82.92l23.53 165.54q3.77 23.46 19.77 38.96t38.24 15.5Z" />
                    </svg>
                </div>
                <div class="p-4 text-right">
                    <p class="block antialiased  text-sm leading-normal font-normal text-blue-gray-600">
                        Total hewan terjual</p>
                    <h4 class="block antialiased tracking-normal  text-2xl font-semibold leading-snug text-blue-gray-900">
                        {{ $total_hewan_ternak }}</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4">
                    <p class="block antialiased  text-base leading-relaxed font-normal text-blue-gray-600">
                        Keseluruhan hewan ternak yang terjual dari awal hingga sekarang 🐑
                    </p>
                </div>
            </div>
            <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-textbase shadow-md">
                <div
                    class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-orange-400 text-white  absolute -mt-4 grid h-16 w-16 place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="w-6 h-6 text-white">
                        <path
                            d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                        </path>
                    </svg>
                </div>
                <div class="p-4 text-right">
                    <p class="block antialiased  text-sm leading-normal font-normal text-blue-gray-600">
                        Total produk aktif</p>
                    <h4 class="block antialiased tracking-normal  text-2xl font-semibold leading-snug text-blue-gray-900">
                        {{ $total_product }}</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4">
                    <p class="block antialiased  text-base leading-relaxed font-normal text-blue-gray-600">
                        Keseluruhan produk yang anda listing dan sedang aktif 🛍
                    </p>
                </div>
            </div>
        </div>

        <main>
            <div class="">
                <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-2 gap-6">
                    <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                        <div class="mb-4 flex items-center justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-textbase mb-2">Pembeli terakhir</h3>
                                <span class="text-base font-normal text-textbase">Lima pembeli terakhir</span>
                            </div>
                        </div>
                        <div class="flex flex-col mt-8">
                            <div class="overflow-x-auto rounded-lg">
                                <div class="align-middle inline-block min-w-full">
                                    <div class="shadow overflow-hidden sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-4 text-left text-xs font-medium text-textbase uppercase tracking-wider">
                                                        Transaksi
                                                    </th>
                                                    <th scope="col"
                                                        class="p-4 text-left text-xs font-medium text-textbase uppercase tracking-wider">
                                                        Tanggal
                                                    </th>
                                                    <th scope="col"
                                                        class="p-4 text-left text-xs font-medium text-textbase uppercase tracking-wider">
                                                        Pembelian
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="">
                                                @if ($reportdata->empty())
                                                    <tr>
                                                        <td class="p-4 whitespace-nowrap text-sm font-normal text-textbase"
                                                            colspan="3">Tidak ada pesanan yang tersedia.</td>
                                                    </tr>
                                                @else
                                                    @foreach ($reportdata as $report)
                                                        <tr>
                                                            <td
                                                                class="p-4 whitespace-nowrap text-sm font-normal text-textbase">
                                                                    Pembelian <span
                                                                        class="font-semibold">{{ $report['nama_produk'] }}</span>
                                                            </td>
                                                            <td
                                                                class="p-4 whitespace-nowrap text-sm font-normal text-textbase">
                                                                {{ date('D, m, Y', strtotime($report['dipesan_pada'])) }}
                                                            </td>
                                                            <td
                                                                class="p-4 whitespace-nowrap text-sm font-semibold text-textbase">
                                                                @currency($report['total_untung'])
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                        <div class="mb-4 flex items-center justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-textbase mb-2">Produk terbaru</h3>
                                <span class="text-base font-normal text-textbase">Lima produk terbaru dari anda</span>
                            </div>
                        </div>
                        <div class="flex flex-col mt-8">
                            <div class="overflow-x-auto rounded-lg">
                                <div class="align-middle inline-block min-w-full">
                                    <div class="shadow overflow-hidden sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="p-4 text-left text-xs font-medium text-textbase uppercase tracking-wider">
                                                        Nama produk
                                                    </th>
                                                    <th scope="col"
                                                        class="p-4  text-xs font-medium text-textbase uppercase tracking-wider">
                                                        Foto produk
                                                    </th>
                                                    <th scope="col"
                                                        class="p-4 text-left text-xs font-medium text-textbase uppercase tracking-wider">
                                                        Harga
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white">
                                                @if ($productbaru->isEmpty())
                                                    <tr>
                                                        <td class="p-4 whitespace-nowrap text-sm font-normal text-textbase"
                                                            colspan="3">Tidak ada produk yang tersedia.</td>
                                                    </tr>
                                                @else
                                                    @foreach ($productbaru as $product)
                                                        <tr>
                                                            <td
                                                                class="p-4 whitespace-nowrap text-sm font-normal text-textbase">
                                                                {{ $product['nama_product'] }}
                                                            </td>
                                                            <td
                                                                class="p-4 whitespace-nowrap text-sm font-normal text-textbase">
                                                                <div class="flex gap-1 flex-col items-center">
                                                                    <img class="object-cover w-14 h-14 rounded-lg"
                                                                        src="/uploads/{{ $product['gambar_hewan'] }}"
                                                                        alt="">
                                                                </div>
                                                            </td>
                                                            <td
                                                                class="p-4 whitespace-nowrap text-sm font-semibold text-textbase">
                                                                @currency($product['harga_product'])
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </main>
    </div>
    @push('js')
    @endpush
@endsection

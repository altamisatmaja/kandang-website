<style>
    [x-cloak] {
        display: none;
    }
</style>

@extends('admin.layouts.app')

@section('title', 'Dashboard | Laporan')

@section('content')
    <section class="container mx-auto px-4 w-full pb-5">
        <div class="pb-5">
            <ol class="flex items-center gap-4">
                <li>
                    <div class="flex items-center text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <a class="text-textbase" href="{{ route('admin.dashboard') }}">Beranda </a>
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
                        <a class="text-textbase" href="{{ route('admin.report.list') }}"> Laporan </a>
                    </div>
                </li>
            </ol>
        </div>
        <div class="flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <h3 class="font-bold text-textbase text-2xl">📑 Laporan transaksi</h3>
                    <h2 class="font-medium mt-5 text-textbase text-xl">Silahkan pilih jangkauan hari</h2>
                    <form action="{{ route('admin.report.range') }}" method="POST">
                        @csrf
                        <div class="grid gap-6 mb-6 lg:grid-cols-4 mt-2">
                            <div>
                                <label for="dari" class="block mb-2 text-lg font-medium text-textbase ">Dari</label>
                                <input class="rounded-lg w-full" type="date" name="dari" id="dari"
                                    value="{{ request()->input('dari') }}">
                            </div>
                            <div>
                                <label for="sampai" class="block mb-2 text-lg font-medium text-textbase ">Sampai</label>
                                <input class="rounded-lg w-full" type="date" name="sampai" id="sampai"
                                    value="{{ request()->input('sampai') }}">
                            </div>
                            <div>
                                <label for="submit"
                                    class="block mb-2 text-lg font-medium text-textbase invisible">Cari</label>
                                <button type="submit"
                                    class="justify-center w-full flex text-lg px-10 font-semibold bg-primarybase border border-1 border-primarybase text-white py-1.5 rounded-lg">Cari</button>
                            </div>
                            <div>
                                <label for="button"
                                    class="block mb-2 text-lg font-medium text-textbase invisible">Bersihkan</label>
                                <a href="{{ route('admin.report.list') }}">
                                    <button type="button"
                                        class="justify-center w-full flex text-lg px-10 font-semibold bg-white border-1 border border-primarybase text-primarybase py-1.5 rounded-lg">Bersihkan</button>
                                </a>
                            </div>
                        </div>
                    </form>
                    @if($reports->isEmpty())
                        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            <div class="flex items-center gap-x-3">
                                                <button class="flex items-center gap-x-2">
                                                    <span>No</span>

                                                </button>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Nama Partner Penjual
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Jumlah Dibeli
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Nama Product
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Harga Product
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Total Dibeli
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="6" class="px-4 py-4 text-sm text-gray-500 text-center">Data tidak
                                            ditemukan
                                        </td>
                                </tbody>
                                </tr>
                            </table>
                        </div>
                        @elseif (request()->input('dari'))
                        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            <div class="flex items-center gap-x-3">
                                                <button class="flex items-center gap-x-2">
                                                    <span>No</span>

                                                </button>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Nama Partner Penjual
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Jumlah Dibeli
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Nama Product
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Harga Product
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Total Dibeli
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($reports as $report)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
                                                    <span>{{ $loop->iteration }}</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->nama_partner }}
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->total_qty }} ekor
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->nama_product }}</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">@currency($report->harga_product)
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                @currency($report->total_harga)</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            <div class="flex items-center gap-x-3">
                                                <button class="flex items-center gap-x-2">
                                                    <span>No</span>
                                                </button>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Nama Partner Penjual
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Jumlah Dibeli
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Nama Product
                                        </th>

                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Harga Product
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 ">
                                            Total Dibeli
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($reports as $report)
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
                                                    <span>{{ $loop->iteration }}</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->nama_partner }}
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->total_qty }} ekor
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                {{ $report->nama_product }}</td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                @currency($report->harga_product)
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                @currency($report->total_harga)</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <script defer src="https://unpkg.com/alpinejs@3.7.0/dist/cdn.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script></script>
    @endpush
@endsection

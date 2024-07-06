@extends('admin.layouts.app')

@section('title', 'Dashboard | Admin')

@section('content')
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
                    <a class="text-textbase" href="{{ route('admin.dashboard') }}">Beranda </a>
                </div>
            </li>
        </ol>
    </div>
    <div class="w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $total_product }}</span>
                    <h3 class="text-base font-normal text-gray-500">Total produk di eFarm</h3>
                </div>
                <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" height="50px" viewBox="0 -960 960 960" width="50px"
                        fill="#AAC14C">
                        <path
                            d="M841-518v318q0 33-23.5 56.5T761-120H201q-33 0-56.5-23.5T121-200v-318q-23-21-35.5-54t-.5-72l42-136q8-26 28.5-43t47.5-17h556q27 0 47 16.5t29 43.5l42 136q12 39-.5 71T841-518Zm-272-42q27 0 41-18.5t11-41.5l-22-140h-78v148q0 21 14 36.5t34 15.5Zm-180 0q23 0 37.5-15.5T441-612v-148h-78l-22 140q-4 24 10.5 42t37.5 18Zm-178 0q18 0 31.5-13t16.5-33l22-154h-78l-40 134q-6 20 6.5 43t41.5 23Zm540 0q29 0 42-23t6-43l-42-134h-76l22 154q3 20 16.5 33t31.5 13ZM201-200h560v-282q-5 2-6.5 2H751q-27 0-47.5-9T663-518q-18 18-41 28t-49 10q-27 0-50.5-10T481-518q-17 18-39.5 28T393-480q-29 0-52.5-10T299-518q-21 21-41.5 29.5T211-480h-4.5q-2.5 0-5.5-2v282Zm560 0H201h560Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $total_user }}</span>
                    <h3 class="text-base font-normal text-gray-500">Total pengguna di eFarm</h3>
                </div>
                <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px"
                        fill="#AAC14C">
                        <path
                            d="M38-160v-94q0-35 18-63.5t50-42.5q73-32 131.5-46T358-420q62 0 120 14t131 46q32 14 50.5 42.5T678-254v94H38Zm700 0v-94q0-63-32-103.5T622-423q69 8 130 23.5t99 35.5q33 19 52 47t19 63v94H738ZM358-481q-66 0-108-42t-42-108q0-66 42-108t108-42q66 0 108 42t42 108q0 66-42 108t-108 42Zm360-150q0 66-42 108t-108 42q-11 0-24.5-1.5T519-488q24-25 36.5-61.5T568-631q0-45-12.5-79.5T519-774q11-3 24.5-5t24.5-2q66 0 108 42t42 108ZM98-220h520v-34q0-16-9.5-31T585-306q-72-32-121-43t-106-11q-57 0-106.5 11T130-306q-14 6-23 21t-9 31v34Zm260-321q39 0 64.5-25.5T448-631q0-39-25.5-64.5T358-721q-39 0-64.5 25.5T268-631q0 39 25.5 64.5T358-541Zm0 321Zm0-411Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">{{ $total_partner }}</span>
                    <h3 class="text-base font-normal text-gray-500">Total partner di eFarm</h3>
                </div>
                <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 -960 960 960" width="48px"
                        fill="#AAC14C">
                        <path
                            d="M480-629 354-755l126-126 126 126-126 126ZM40-160v-160q0-29 20.5-49.5T110-390h141q17 0 32.5 8.5T310-358q29 42 74 65t96 23q51 0 96-23t75-65q11-15 26-23.5t32-8.5h141q29 0 49.5 20.5T920-320v160H660v-119q-36 33-82.5 51T480-210q-51 0-97-18t-83-51v119H40Zm120-300q-45 0-77.5-32.5T50-570q0-46 32.5-78t77.5-32q46 0 78 32t32 78q0 45-32 77.5T160-460Zm640 0q-45 0-77.5-32.5T690-570q0-46 32.5-78t77.5-32q46 0 78 32t32 78q0 45-32 77.5T800-460Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <div class="inline-block min-w-full py-5 align-middle">
        <div class="overflow-hidden border border-gray-200 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            No
                        </th>
                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Tanggal
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Nama Product
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Harga
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Diskon
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Gambar
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Nama Kategori
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Jenis Hewan
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Deskripsi
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Gender Hewan
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Umur
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Berat
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Stok
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Terjual
                        </th>

                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500">
                            Partner
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($product_new as $products)
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-500">{{ $loop->iteration }}</td>
                            <td class="px-4 py-4 text-sm text-gray-500">
                                {{ $products->created_at->format('d M Y') }}</td>
                            <td class="px-4 py-4 text-sm text-gray-500">{{ $products->nama_product }}</td>
                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div
                                    class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                    <h2 class="text-sm font-normal">@currency($products->harga_product)</h2>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div
                                    class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60">
                                    <h2 class="text-sm font-normal">@currency($products->diskon)</h2>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap align-middle">
                                <div class="flex gap-1 flex-col items-center justify-center">
                                    <img class="object-cover w-14 h-14 rounded-lg"
                                        src="/uploads/{{ $products->gambar_hewan }}" alt="">
                                </div>
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">
                                @foreach ($products->categoryproduct as $categoryproducts)
                                    {{ $categoryproducts->nama_kategori_product }}
                                @endforeach
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">
                                @foreach ($products->typelivestocks as $typelivestock)
                                    {{ $typelivestock->nama_jenis_hewan }}
                                @endforeach
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">
                                {{ $products->deskripsi_product }}
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                @foreach ($products->gender_livestocks as $gender_livestockss)
                                    {{ $gender_livestockss->nama_gender }}
                                @endforeach
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500">
                                {{ $products->lahir_hewan }} tahun</td>
                            <td class="px-4 py-4 text-sm text-gray-500">
                                {{ $products->berat_hewan_ternak }} kg</td>
                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                {{ $products->stok_hewan_ternak }} ekor
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500 whitespace-nowrap">
                                {{ $products->terjual }} ekor
                            </td>
                            <td class="px-4 py-4 text-sm text-gray-500 align-middle">
                                <div class="flex gap-1 flex-col items-center justify-center">
                                    @foreach ($products->partner as $partner)
                                        <img class="object-cover w-8 h-8 rounded-lg"
                                            src="/uploads/{{ $partner->foto_profil }}" alt="">
                                    @endforeach
                                    <div>
                                        <p class="text-xs font-normal align-middle text-center items-center text-gray-600">
                                            {{ $partner->nama_partner }}
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
@endsection

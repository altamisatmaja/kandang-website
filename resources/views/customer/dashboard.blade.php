@extends('customer.layouts.app')

@section('title', 'Customer | Account')

@section('content')
    <div class="px-2">
        <div class="pb-3">
            <ol class="flex items-center gap-4">
                <li class="cursor-pointer">
                    <div
                        class="flex items-center text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                        <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <a href="{{ route('admin.dashboard') }}">Beranda </a>
                    </div>
                </li>
                <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ route('admin.category.list') }}"> Dashboard </a>
                    </div>
                </li>
                {{-- <li class="inline-flex">
                    <div
                        class="flex items-center gap-2 text-lg font-medium opacity-60 transition-all duration-300 hover:text-primarybase">
                        <svg class="h-3 w-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <a href="{{ route('admin.category.add') }}"> Tambah kategori hewan </a>
                    </div>
                </li> --}}
            </ol>
        </div>

        <div class="flex flex-col text-textbase w-full">
            <div
                class="relative flex flex-col items-center rounded-[20px] w-full mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500">
                <div class="mt-2 mb-8 w-full">
                    <h4 class=" text-2xl font-bold text-textbase">
                        Semua informasi Anda 🤩
                    </h4>
                </div>
                <div class="grid grid-cols-2 gap-4 w-full">
                    <div
                        class="flex flex-col justify-center  py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Nama</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->nama }}
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-start justify-center  bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Nomor telepon</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->no_telp != NULL ? $user->no_telp : 'Belum diisi' }}
                        </p>
                    </div>
                </div>

                <div class="mt-4 mb-8 w-full">
                    <h4 class=" text-2xl font-bold text-textbase">
                        Informasi akun Anda 😁
                    </h4>
                </div>
                <div class="grid grid-cols-2 gap-4 w-full">
                    <div
                        class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Username</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->username }}
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Email</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->email }}
                        </p>
                    </div>
                </div>

                <div class="mt-4 mb-8 w-full">
                    <h4 class=" text-2xl font-bold text-textbase">
                        Informasi alamat Anda 🤗
                    </h4>
                </div>
                <div class="grid grid-cols-2 gap-4 w-full">
                    <div
                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Provinsi</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->provinsi_user != NULL ? $user->provinsi_user : 'Belum diisi' }}
                        </p>
                    </div>

                    <div
                        class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Kabupaten</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->kabupaten_user != NULL ? $user->provinsi_user : 'Belum diisi' }}
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Kelurahan</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->kecamatan_user != NULL ? $user->provinsi_user : 'Belum diisi' }}
                        </p>
                    </div>

                    <div
                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border py-2 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">Kelurahan</p>
                        <p class="text-base font-medium text-textbase">
                            {{ $user->kelurahan_user != NULL ? $user->provinsi_user : 'Belum diisi' }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </d>
    @push('js')
        <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    @endpush
@endsection

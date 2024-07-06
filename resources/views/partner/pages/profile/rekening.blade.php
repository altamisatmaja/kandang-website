@extends('partner.layouts.app')

@section('title', 'Dashboard | Order')

@section('content')
    <div class="flex w-full flex-col mb-5">
        <div class="pb-5">
            <ol class="flex items-start gap-4">
                <li>
                    <div class="flex items-center text-lg font-medium transition-all duration-300 hover:text-primarybase">
                        <svg class="mr-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <a href="{{ route('partner.dashboard') }}">Beranda </a>
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
                        <a href="{{ route('partner.account.rekening') }}"> Rekening </a>
                    </div>
                </li>
            </ol>
        </div>
        @if (session('success'))
            <div id="successMessage"
                class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                <div class="relative w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
                    data-dismissible="alert">
                    <div class="absolute top-4 left-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            class="mt-px h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-8 mr-12">
                        <h5
                            class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                            Berhasil
                        </h5>
                        <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                            {{ session('success') }}
                        </p>
                    </div>
                    <div data-dismissible-target="alert" data-ripple-dark="true"
                        class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                        <div role="button" class="w-max rounded-lg p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if (session('error'))
            <div id="successMessage"
                class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                <div class="relative w-full max-w-screen-md rounded-lg bg-red-500 px-4 py-4 text-base text-white"
                    data-dismissible="alert">
                    <div class="absolute top-4 left-4">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                            class="mt-px h-6 w-6">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="ml-8 mr-12">
                        <h5
                            class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                            Gagal
                        </h5>
                        <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                            {{ session('error') }}
                        </p>
                    </div>
                    <div data-dismissible-target="alert" data-ripple-dark="true"
                        class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                        <div role="button" class="w-max rounded-lg p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div
            class="relative flex flex-col bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:!shadow-none">
            <form action="{{ route('partner.account.rekening.store') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-2 mb-4 w-full">
                    <div class="mb-3">
                        <h3 class="font-semibold text-2xl text-textbase">Informasi rekening anda 👋</h3>
                    </div>
                    <p class="text-lg text-textbase">
                        Informasi rekening digunakan untuk pencairan dana dan hanya bisa diubah sekali. Jika terdapat
                        kesalahan pengisian, silahkan menghubungi <span class="italic">Customer Service</span> ya!
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4 w-full">
                    <div
                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                        <label for="nama_bank" class=" text-lg font-semibold text-textbase block mb-2">Nama Bank</label>
                        <select name="nama_bank" id="nama_bank" class="border @if($partner->diubah == 'Sudah diubah') border-gray-400 @else border-textbase @endif py-2.5 px-2 rounded w-full" @if ($partner->diubah == 'Sudah diubah') disabled readonly @endif>
                            @foreach ($bank as $banks)
                                <option value="{{ $banks['name'] }}">{{ $banks['name'] }}</option>
                            @endforeach
                        </select>
                        @error('nama_bank')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div
                        class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                        <label for="nama_pemilik_rekening" class=" text-lg font-semibold text-textbase block mb-2">Nama
                            Pemilik Rekening</label>
                        <input name="nama_pemilik_rekening" id="nama_pemilik_rekening"
                            class="border @if($partner->diubah == 'Sudah diubah') border-gray-400 @else border-textbase @endif font-medium text-lg p-2 rounded w-full" type="text"
                            value="{{ $partner->nama_pemilik_rekening }}" @if ($partner->diubah == 'Sudah diubah') disabled readonly @endif>
                        @error('nama_pemilik_rekening')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <label for="nomor_rekening" class=" text-lg font-semibold text-textbase block mb-2">Nomor
                        Rekening</label>
                    <input name="nomor_rekening" id="nomor_rekening"
                        class="border @if($partner->diubah == 'Sudah diubah') border-gray-400 @else border-textbase @endif font-medium text-lg p-2 rounded w-full" type="number"
                        value="{{ $partner->nomor_rekening }}" @if ($partner->diubah == 'Sudah diubah') disabled readonly @endif>
                    @error('nomor_rekening')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    @if ($partner->diubah == 'Sudah diubah')
                        <button type="button"
                            class="mt-4 px-4 w-full py-2 rounded bg-gray-300 text-white cursor-not-allowed focus:outline-none transition-colors"
                            disabled>
                            Ubah
                        </button>
                    @else
                        <button type="submit"
                            class="mt-4 px-4 w-full py-2 rounded bg-primarybase text-white hover:bg-primarybase focus:outline-none transition-colors">
                            Ubah
                        </button>
                    @endif
                </div>
                @if ($partner->change_at)
                <p class="text-lg text-textbase">
                    * Data sudah diubah pada {{ $partner->updated_at->diffForHumans() }}
                </p>
            @else
                <p></p>
            @endif
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var successMessage = document.getElementById('successMessage');

                successMessage.addEventListener('click', function() {
                    successMessage.style.display = 'none';
                });
            });
        </script>
    @endpush
@endsection

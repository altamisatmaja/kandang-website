@extends('includes.app')

@section('title', 'eFarm | Verifikasi')

@section('content')
    <div class="bg-white flex my-32 items-center justify-center flex-col">

        <div class="w-1/2 items-center justify-center flex flex-col ring-1 ring-primarybase px-5 py-5 rounded-xl">
            <div class="justify-start">
                <div class="mb-4 text-2xl font-semibold text-textbase">
                    {{ __('Terima kasih telah mendaftar!🤗') }}
                </div>
                <div class="text-md font-medium text-textbase">
                    {{ __('Sebelum memulai, verifikasi alamat email Anda dengan mengklik tautan yang baru saja kami kirimkan ke email Anda. Jika Anda tidak menerima email tersebut, silahkan kirim ulang') }}
                </div>
            </div>

            <div class="mt-4 flex items-center gap-x-3 justify-end flex-wrap w-full">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button class="w-full bg-primarybase px-5 py-3 rounded-lg text-white font-semibold hover:bg-white hover:ring-1 hover:ring-primarybase hover:text-primarybase">
                            {{ __('Kirim ulang verifikasi') }}
                        </button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="text-md text-primarybase bg-white ring-1 ring-primarybase rounded-lg px-7 py-3 hover:bg-primarybase hover:text-white">
                        {{ __('Keluar') }}
                    </button>
                </form>
            </div>
        </div>
        @if (session('status') == 'verification-link-sent')
                <div class="mt-5 font-semibold text-xl text-green-600">
                    {{ __('Verifikasi berhasil dikirim ulang') }}
                </div>
            @endif
    </div>
    @push('js')
    @endpush
@endsection

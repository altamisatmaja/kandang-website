@extends('includes.app')

@section('title', 'eFarm | Berhasil diverifikasi')

@section('content')
    <div class="bg-white flex my-32 items-center justify-center flex-col">
        <div class="w-1/2 flex flex-col p-5 ring-1 rounded-xl ring-primarybase">
            <div class="mb-2 text-4xl font-semibold text-textbase">
                {{ __('Selamat! 🥳') }}
            </div>
            <div class="text-md mb-4 font-medium text-textbase">
                {{ __('Akun anda telah berhasil diverifikasi, selamat berbelanja!') }}
            </div>
            <a href="{{ route('customer.login') }}"
                class="text-lg items-center justify-center flex font-semibold text-white bg-primarybase ring-1 ring-primarybase rounded-lg px-7 py-3 hover:bg-white hover:text-primarybase">Login</a>
        </div>
    </div>
    @push('js')
    @endpush
@endsection

@extends('customer.layouts.app')

@section('title', 'Customer | Account')

@section('content')
    <div class="bg-white sm:px-0 ">
        <div class="border md:py-3 rounded-md md:px-10 py-1 px-2">
            <div class="md:gap-x-8 gap-x-1 flex items-center justify-between">
                <a href="{{ route('customer.account.detail') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-lg py-1 px-4 font-medium hover:text-white hover:bg-primarybase">Akun</a>
                <a href="{{ route('customer.account.information') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-lg py-1 px-4 font-medium hover:text-white hover:bg-primarybase">Informasi</a>
                <a href="{{ route('customer.account.address') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-lg py-1 px-4 font-medium hover:text-white hover:bg-primarybase">Alamat</a>
            </div>
        </div>
    </div>
    @yield('account')
    @push('js')
    @endpush
@endsection

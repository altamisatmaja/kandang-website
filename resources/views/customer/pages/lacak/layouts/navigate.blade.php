@extends('customer.layouts.app')

@section('title', 'Customer | Order')

@section('content')
    <div class="bg-white sm:px-0 ">
        <div class="border md:py-3 rounded-md md:px-10 py-1 px-2">
            <div class="md:gap-x-8 gap-x-1 flex items-center justify-between">
                <a href="{{ route('customer.lacak') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm px-1 md:rounded-lg md:py-1 md:px-4 font-medium hover:text-white hover:bg-primarybase">Semua</a>
                <a href="{{ route('customer.lacak.new') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm px-1 md:rounded-lg md:py-1 md:px-4 font-medium hover:text-white hover:bg-primarybase">Baru</a>
                <a href="{{ route('customer.lacak.confirmed') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm px-1 md:rounded-lg md:py-1 md:px-4 font-medium hover:text-white hover:bg-primarybase">Dikonfirmasi</a>
                <a href="{{ route('customer.lacak.packed') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm px-1 md:rounded-lg md:py-1 md:px-4 font-medium hover:text-white hover:bg-primarybase">Dikemas</a>
                <a href="{{ route('customer.lacak.sent') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm px-1 md:rounded-lg md:py-1 md:px-4 font-medium hover:text-white hover:bg-primarybase">Dikirim</a>
                <a href="{{ route('customer.lacak.end') }}" class=" md:text-textbase text-sm md:text-lg cursor-pointer rounded-sm px-1 md:rounded-lg md:py-1 md:px-4 font-medium hover:text-white hover:bg-primarybase">Selesai</a>
            </div>
        </div>
    </div>
    @yield('track')
    @push('js')
    @endpush
@endsection

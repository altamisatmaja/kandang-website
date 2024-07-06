@extends('partner.layouts.app')

@section('title', 'Dashboard | Order')

@section('content')
    <div class="flex w-3/4 flex-col h-screen px-16 py-10 mx-auto">
        @if (session('success'))
            <div id="alert-dissmiss"
                class="font-regular mb-4 flex flex-wrap justify-between items-center w-full rounded-lg bg-green-500 p-4 text-base leading-5 text-white opacity-100"
                data-dismissible="alert">
                <div class="mr-12 items-center">{{ session('success') }}</div>
                <div id="dismiss-button"
                    class="top-2.5 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20"
                    data-dismissible-target="alert">
                    <button role="button" class="w-max rounded-lg p-1" data-alert-dimissible="true">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
        @endif
        <div
            class="relative flex flex-col items-center rounded-[20px] w-[700px] max-w-[95%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:!shadow-none p-3">
            <form action="{{ route('partner.account.address.update') }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mt-2 mb-4 w-full">
                    <h4 class="px-2 text-xl font-bold text-navy-700">
                        Informasi akun
                    </h4>
                    <p class="mt-2 px-2 text-base text-gray-600">
                        Hati-hati dalam mengubah alamat akun
                    </p>
                </div>
                <div class="mb-5">
                    <label for="alamat_partner" class="text-sm font-medium text-gray-700 block mb-2">
                        Alamat partner
                    </label>
                    <input value="{{ $partners->alamat_partner }}" type="text" name="alamat_partner" id="alamat_partner"
                        placeholder="5" min="0"
                        class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        @error('alamat_partner')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <button type="submit"
                        class="mt-4 px-4 w-full py-2 rounded bg-primarybase text-white hover:bg-primarybase focus:outline-none transition-colors">
                        Ubah
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
        <script>
            $(function() {
                $('#dismiss-button').click(function(e) {
                    e.preventDefault(); // menghentikan default
                    $('#alert-dissmiss').addClass('hidden');
                });
            });
        </script>
    @endpush
@endsection

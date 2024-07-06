@extends('includes.app')

@section('title', 'eFarm | Verifikasi')

@section('content')
    <div class="bg-white flex my-32 items-center justify-center flex-col">
        <div class="w-1/3 items-center justify-center flex flex-col ring-1 ring-primarybase px-5 py-5 rounded-xl">

            <div class="justify-start w-full">
                <div class="mb-2 text-2xl font-semibold text-textbase">
                    {{ __('Lupa password? 😱') }}
                </div>
                <div class="text-md mb-4 font-medium text-textbase">
                    {{ __('Jangan khawatir, ubah passwordmu sekarang!') }}
                </div>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

            <form method="POST" action="{{ route('password.email') }}" class="w-full">
                @csrf

                <!-- Email Address -->
                <div class="flex flex-col justify-start">
                    <label for="email" class="text-textbase mb-2 font-semibold">Email</label>

                    <input type="email" name="email" class="w-full flex rounded-lg">
                    @error('email')
                        <span class="text-red-500 mt-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center mt-4">
                    <button type="submit"
                        class="text-lg text-white bg-primarybase ring-1 ring-primarybase rounded-lg px-7 w-full py-3 hover:bg-white hover:text-primarybase">
                        {{ __('Kirim link reset password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
    @push('js')
    @endpush
@endsection

<style>
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    .animated.faster {
        -webkit-animation-duration: 500ms;
        animation-duration: 500ms;
    }

    .fadeIn {
        -webkit-animation-name: fadeIn;
        animation-name: fadeIn;
    }

    .fadeOut {
        -webkit-animation-name: fadeOut;
        animation-name: fadeOut;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
        }
    }
</style>

@extends('admin.layouts.app')

@section('title', 'Dashboard | categorylivestock')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-4 lg:px-4">
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
                        <a class="text-textbase"  href="{{ route('admin.testimoni.list') }}"> Ulasan </a>
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
                        <a class="text-textbase"
                            href="{{ route('admin.testimoni.show', $testimonials->id) }}"> Detail ulasan </a>
                    </div>
                </li>
            </ol>
        </div>

        <div class="flex flex-col justify-start items-start w-full">
            <div class=" pb-4 flex text-2xl font-semibold">
                <h1 class="text-textbase text-3xl font-bold">Testimoni dari pembeli {{ $user->nama }}</h1>
            </div>
            <div class="mt-5 bg-white w-full rounded-lg mb-10">
                <div class="grid grid-cols-2 w-full">
                    <div class="md:flex flex-row justify-start items-start">
                        <div class="">
                            <img src="/uploads/{{ $testimonials->gambar }}" alt="foto-testimoni"
                                class=" w-full object-cover object-center rounded" />
                        </div>
                    </div>
                    <div class="ml-10 md:grid md:grid-cols-2">
                        <div class="">
                            <p class="text-textbase font-semibold text-xl">
                                Judul testimoni
                            </p>
                            <p class="text-textbase mt-5 font-medium text-xl">
                                {{ $testimonials->nama_testimoni }}
                            </p>
                        </div>
                        <div class="">
                            <p class="text-textbase font-semibold text-xl">
                                Deskripsi testimoni
                            </p>
                            <p class="text-textbase mt-5 font-medium text-xl">
                                {{ $testimonials->deskripsi }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    @push('js')
    @endpush
@endsection

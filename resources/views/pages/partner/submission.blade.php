@extends('includes.app')

@section('title', 'eFarm | Partner')

@section('content')
    <div>
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

        {{-- @if (session('errors'))
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
        @endif --}}
        <div class="flex
        flex-1 w-full flex-col items-center justify-center text-center px-4 sm:mt-10 my-10">
            <p rel="noreferrer"
                class="border cursor-pointer rounded-2xl py-1 px-4 text-slate-500 text-sm mb-5 hover:scale-105 transition duration-300 ease-in-out">
                Jadi partner
                <span class="font-semibold">eFarm</span> sekarang
            </p>
            <h1 class="mx-auto max-w-4xl font-display text-5xl font-bold tracking-normal text-textbase sm:text-7xl">
                Ajukan menjadi
                <span class="relative whitespace-nowrap text-primarybase">
                    <svg aria-hidden="true" viewBox="0 0 418 42"
                        class="absolute top-2/3 left-0 h-[0.58em] w-full fill-orange-300/70" preserveAspectRatio="none">
                        <path
                            d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z">
                        </path>
                    </svg>
                    <span class="relative cursor-pointer">Partner</span>
                </span>
            </h1>
        </div>
        <div class="container mx-auto py-5">
            <div class="rounded-lg">
                <h1 class="text-2xl font-bold mb-4 text-textbase">Bagian 1 ・ Formulir untuk akun partner</h1>
                <p class="text-textbase text-xl  mb-6">Silahkan diisi sesuai akun yang anda inginkan</p>
                <form action="{{ route('partner.submission.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="nama">Nama *</label>
                            <input name="nama" id="nama" type="text" placeholder="Nama Partner"
                                class="border p-2 rounded w-full">
                            @error('nama')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="username">Username *</label>
                            <input name="username" id="username" type="text" placeholder="Masukkan username"
                                class="border p-2 rounded w-full">
                            @error('username')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="email">Email *</label>
                            <input type="email" name="email" id="email" placeholder="Masukkan Email"
                                class="border p-2 rounded w-full">
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-lg font-medium text-textbase" for="password">Password *</label>
                            <input name="password" id="password" type="password" placeholder="Masukkan password"
                                class="border p-2 rounded w-full">
                            @error('password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-lg font-medium text-textbase" for="konfirmasi_password">Konfirmasi
                                password *</label>
                            <input name="konfirmasi_password" id="konfirmasi_password" type="password"
                                placeholder="Masukkan ulang password" class="border p-2 rounded w-full">
                            @error('konfirmasi_password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
            </div>
        </div>
        <div id="form-data-diri-partner-parent" class="container mx-auto py-5 mb-5">
            <div class="">
                <h1 class="text-2xl font-bold mb-4 text-textbase">Bagian 2 ・ Formulir untuk data pribadi partner</h1>
                <p class="text-textbase text-xl  mb-6"><span class="font-bold">Penting! </span>Silahkan diisi dengan
                    kesesuaian data yang ada
                    dilapangan dikarenakan akan ada pengecekan dari admin ke lokasi</p>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="nama_partner">Nama Partner *</label>
                        <input name="nama_partner" id="nama_partner" type="text" placeholder="Nama Partner"
                            class="border p-2 rounded w-full">
                        @error('nama_partner')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="nama_perusahaan_partner">Nama peternakan
                            *</label>
                        <input name="nama_perusahaan_partner" id="nama_perusahaan_partner" type="text"
                            placeholder="Masukkan nama peternakan" class="border p-2 rounded w-full">
                        @error('nama_perusahaan_partner')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="provinsi_partner">Provinsi *</label>
                        <select name="provinsi_partner" id="provinsi_partner"
                            class="provinsi_partner border p-2 rounded w-full">
                            <option data-id="1" value="JAWA TIMUR">Pilih provinsi *</option>
                        </select>
                        @error('provinsi_partner')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="kabupaten_partner">Kabupaten *</label>
                        <select disabled name="kabupaten_partner" id="kabupaten_partner"
                            class="kabupaten_partner border p-2 rounded w-full">
                            <option data-id="1" value="KAB. NGAWI">Pilih kabupaten *</option>
                        </select>
                        @error('kabupaten_partner')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="kecamatan_partner">Kecamatan *</label>
                        <select disabled name="kecamatan_partner" id="kecamatan_partner"
                            class="kecamatan_partner border p-2 rounded w-full">
                            <option data-id="1" value="Paron">Pilih kecamatan</option>
                        </select>
                        @error('kecamatan_partner')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="text-lg font-medium text-textbase" for="kelurahan_partner">Kelurahan *</label>
                        <select disabled name="kelurahan_partner" id="kelurahan_partner"
                            class="kelurahan_partner border p-2 rounded w-full">
                            <option data-id="1" value="1">Pilih kelurahan *</option>
                        </select>
                        @error('kelurahan_partner')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="grid-cols-2 md:grid-cols-2 gap-4 mb-4 hidden">
                    <div class="pb-4">
                        <label>Latitude *</label>
                        <input readonly disabled type="text" value="{{ $latitude }}" name="latitude"
                            id="latitude" placeholder="Masih belum terdeteksi" class="border p-2 rounded w-full">
                        @error('latitude')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label>Longitude *</label>
                        <input readonly disabled type="text" value="{{ $longitude }}" name="longitude"
                            id="longitude" placeholder="Masih belum terdeteksi" class="border p-2 rounded w-full">
                        @error('longitude')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4 hidden">
                    <label for="status">Status *</label>
                    <input value="Belum terverifikasi" name="status" id="status" type="text"
                        placeholder="Detail alamat" class="border p-2 rounded w-full">
                </div>
                <div class="mb-4">
                    <label for="alamat_partner">Detail alamat *</label>
                    <input name="alamat_partner" id="alamat_partner" type="text" placeholder="Detail alamat"
                        class="border p-2 rounded w-full">
                    @error('alamat_partner')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="tanggal_lahir">Tanggal lahir *</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                            placeholder="Masukkan Tanggal lahir" class="border p-2 rounded w-full">
                        @error('tanggal_lahir')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <div>
                        <label class="text-lg font-medium text-textbase" for="jenis_kelamin">Jenis kelamin *</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="border p-2 rounded w-full">
                            <option value="">Pilih jenis kelamin</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-4">
                    <label class="text-lg font-medium text-textbase" for="lama_peternakan_berdiri">Berdiri sejak
                        *</label>
                    <input name="lama_peternakan_berdiri" id="lama_peternakan_berdiri" type="number"
                        placeholder="Berdiri sejak" class="border p-2 rounded w-full">
                    @error('lama_peternakan_berdiri')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6 pt-4">
                    <label class="mb-5 block text-xl font-medium text-textbase">
                        Foto diri *
                    </label>

                    <div class="mb-8">
                        <input type="file" name="foto_profil" id="foto_profil" class="sr-only" />
                        <label for="foto_profil"
                            class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                            <div>
                                <span class="mb-2 block text-xl font-semibold text-textbase">
                                    Jatuhkan gambar disini
                                </span>
                                <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                    atau
                                </span>
                                <span
                                    class="inline-flex rounded-lg border border-[#e0e0e0] py-2 px-7 text-base font-medium text-textbase">
                                    Pilih
                                </span>
                            </div>
                        </label>
                    </div>
                    @error('foto_profil')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div id="image-preview1" class="mt-4"></div>

                </div>
                <div class="mb-6 pt-4">
                    <label class="mb-5 block text-xl font-medium text-textbase">
                        Foto peternakan *
                    </label>

                    <div class="mb-8">
                        <input type="file" name="foto_peternakan" id="foto_peternakan" class="sr-only" />
                        <label for="foto_peternakan"
                            class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                            <div>
                                <span class="mb-2 block text-xl font-semibold text-textbase">
                                    Jatuhkan gambar disini
                                </span>
                                <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                    atau
                                </span>
                                <span
                                    class="inline-flex rounded-lg border border-[#e0e0e0] py-2 px-7 text-base font-medium text-textbase">
                                    Pilih
                                </span>
                            </div>
                        </label>
                    </div>
                    @error('foto_peternakan')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                    <div id="image-preview2" class="mt-4"></div>
                </div>

                <div>
                    <button type="submit"
                        class="hover:shadow-form w-full rounded-md bg-primarybase py-3 px-8 text-center text-xl font-semibold text-white outline-none">
                        Ajukan
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <script>
        $(function() {
            // get provinsi
            $(document).ready(function() {
                $.ajax({
                    url: `https://ibnux.github.io/data-indonesia/provinsi.json`,
                    method: 'GET',
                    success: function(response) {
                        console.log(response);

                        let row = '';

                        const selectprovinsi = $('.provinsi_partner');
                        selectprovinsi.empty();

                        selectprovinsi.append($('<option>', {
                            value: '',
                            'data-id': '',
                            text: 'Pilih provinsi'
                        }));

                        response.map(function(data) {
                            // console.log(data);
                            selectprovinsi.append($('<option>', {
                                'data-id': data.id,
                                value: data.nama,
                                text: data.nama,
                            }))
                        });

                        $("select.provinsi_partner").change(function() {
                            document.getElementById("kabupaten_partner")
                                .removeAttribute("disabled");
                            var selectprovince = $(this).children("option:selected")
                                .attr('data-id');
                            var valofselectprovince = $(this).children(
                                    "option:selected")
                                .val();

                            console.log(selectprovince);
                            console.log(valofselectprovince);

                            $.ajax({
                                url: `https://ibnux.github.io/data-indonesia/kabupaten/${selectprovince}.json`,
                                method: 'GET',
                                success: function(response) {
                                    console.log(response);

                                    let row = '';

                                    const selectkabupaten = $(
                                        '.kabupaten_partner');
                                    selectkabupaten.empty();

                                    selectkabupaten.append($('<option>', {
                                        value: '',
                                        'data-id': '',
                                        text: 'Pilih kabupaten'
                                    }));

                                    response.map(function(data) {
                                        // console.log(data);
                                        selectkabupaten.append($(
                                            '<option>', {
                                                value: data
                                                    .nama,
                                                'data-id': data
                                                    .id,
                                                text: data
                                                    .nama,
                                            }))
                                    });

                                    $("select.kabupaten_partner").change(
                                        function() {
                                            document.getElementById(
                                                    "kecamatan_partner")
                                                .removeAttribute(
                                                    "disabled");
                                            var selectkabupaten = $(
                                                    this).children(
                                                    "option:selected")
                                                .attr('data-id');

                                            console.log(
                                                selectkabupaten);

                                            $.ajax({
                                                url: `https://ibnux.github.io/data-indonesia/kecamatan/${selectkabupaten}.json`,
                                                method: 'GET',
                                                success: function(
                                                    response
                                                ) {
                                                    console
                                                        .log(
                                                            response
                                                        );

                                                    let row =
                                                        '';

                                                    const
                                                        selectkecamatan =
                                                        $(
                                                            '.kecamatan_partner'
                                                        );
                                                    selectkecamatan
                                                        .empty();

                                                    selectkecamatan
                                                        .append(
                                                            $('<option>', {
                                                                value: '',
                                                                'data-id': '',
                                                                text: 'Pilih kecamatan'
                                                            })
                                                        );

                                                    response
                                                        .map(
                                                            function(
                                                                data
                                                            ) {
                                                                // console.log(data);
                                                                selectkecamatan
                                                                    .append(
                                                                        $('<option>', {
                                                                            value: data
                                                                                .nama,
                                                                            'data-id': data
                                                                                .id,
                                                                            text: data
                                                                                .nama,
                                                                        })
                                                                    )
                                                            }
                                                        );

                                                    $("select.kecamatan_partner")
                                                        .change(
                                                            function() {
                                                                document
                                                                    .getElementById(
                                                                        "kelurahan_partner"
                                                                    )
                                                                    .removeAttribute(
                                                                        "disabled"
                                                                    );
                                                                var selectkec =
                                                                    $(
                                                                        this
                                                                    )
                                                                    .children(
                                                                        "option:selected"
                                                                    )
                                                                    .attr(
                                                                        'data-id'
                                                                    );
                                                                console
                                                                    .log(
                                                                        `Ini data id kecamtan: ${selectkec}`
                                                                    );

                                                                // ini yang diterusin al
                                                                $.ajax({
                                                                    url: `https://ibnux.github.io/data-indonesia/kelurahan/${selectkec}.json`,
                                                                    method: 'GET',
                                                                    success: function(
                                                                        response
                                                                    ) {
                                                                        console
                                                                            .log(
                                                                                response
                                                                            );

                                                                        let row =
                                                                            '';

                                                                        const
                                                                            selectkelurahan =
                                                                            $(
                                                                                '.kelurahan_partner'
                                                                            );
                                                                        selectkelurahan
                                                                            .empty();

                                                                        selectkelurahan
                                                                            .append(
                                                                                $('<option>', {
                                                                                    value: '',
                                                                                    'data-id': '',
                                                                                    text: 'Pilih kelurahan',
                                                                                })
                                                                            );

                                                                        response
                                                                            .map(
                                                                                function(
                                                                                    data
                                                                                ) {
                                                                                    console
                                                                                        .log(
                                                                                            data
                                                                                        );
                                                                                    selectkelurahan
                                                                                        .append(
                                                                                            $('<option>', {
                                                                                                value: data
                                                                                                    .nama,
                                                                                                'data-id': data
                                                                                                    .id,
                                                                                                text: data
                                                                                                    .nama,
                                                                                            })
                                                                                        )
                                                                                }
                                                                            )
                                                                    }
                                                                })
                                                            }
                                                        );
                                                }
                                            })
                                        });

                                },
                                error: function(xhr, status, error) {
                                    console.error(status, error);
                                }
                            });

                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(status, error);
                    }
                });
            });
        })

        $(document).ready(function() {
            $('#foto_profil').change(function(e) {
                var fileName = e.target.files[0].name;
                var fileExt = fileName.split('.').pop();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview1').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-textbase">
                                ${fileName}
                                </span>
                            </div>
                        </div>
                        `);
                };
                reader.readAsDataURL(this.files[0]);
            });
        });
        $(document).ready(function() {
            $('#foto_peternakan').change(function(e) {
                var fileName = e.target.files[0].name;
                var fileExt = fileName.split('.').pop();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview2').html(`
                        <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                            <div class="flex items-center justify-between">
                                <span class="truncate pr-3 text-base font-medium text-textbase">
                                ${fileName}
                                </span>
                            </div>
                        </div>
                        `);
                };
                reader.readAsDataURL(this.files[0]);
            });
        });

        // function validateImage(input) {
        //     var file = input.files[0];
        //     var fileType = file.type.split('/').shift();
        //     var fileName = e.target.files[0].name;

        //     if (fileType !== 'image') {
        //         document.getElementById('file-error').innerHTML = 'Gambar kategori produk harus berupa file gambar.';
        //         document.getElementById('image-preview').innerHTML = '';
        //     } else {
        //         document.getElementById('file-error').innerHTML = '';

        //         var reader = new FileReader();
        //         reader.onload = function(e) {
        //             $('#image-preview').html(`
    //             <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
    //                 <div class="flex items-center justify-between">
    //                     <span class="truncate pr-3 text-base font-medium text-textbase">
    //                     ${fileName}
    //                     </span>
    //                 </div>
    //             </div>
    //             `);
        //         };
        //         reader.readAsDataURL(this.files[0]);
        //     }
        // }

        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');

            // Sembunyikan pesan sukses saat diklik
            successMessage.addEventListener('click', function() {
                successMessage.style.display = 'none';
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @push('js')
    @endpush
@endsection

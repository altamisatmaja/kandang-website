<main class="w-full">
    <div class="container">
        <div class="grid gap-3 grid-cols-4 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
            @foreach ($productss as $product)
                    <a href="/market/buy/{{ $product->slug_category_product }}/{{ $product->slug_category_livestock }}/{{ $product->slug_product }}">
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-52 w-full bg-cover relative"
                            style="background-image: url('/uploads/{{ $product->gambar_hewan }}')">
                        </div>

                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 text-lg font-semibold">{{ $product->nama_product }}</h3>
                            <div>
                                <h2 class="text-primarybase text-lg font-semibold">Rp
                                    {{ number_format($product->harga_product) }}</h2>
                                <div class="flex gap-2">
                                    <div class="px-2 py-1 rounded-md bg-primarybase">
                                        <p class="text-white text-sm">
                                            {{ $product->gender }}
                                        </p>
                                    </div>
                                    <div class="px-2 py-1 rounded-md bg-primarybase">
                                        <p class="text-white text-sm">{{ $product->nama_jenis_hewan }}</p>
                                    </div>
                                </div>
                                <p class="text-gray-700 text-md font-medium mt-4">{{ $product->lokasi }}</p>
                                <div class="flex items-center">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $product->average_rating)
                                            <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        @else
                                            <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                                </path>
                                            </svg>
                                        @endif @endfor
                                    <p class="text-gray-700 text-sm font-medium">({{ $product->total_reviews ?? 0 }})</p>
                                </div>
                                <p class="text-gray-700 text-sm font-medium mb-4">{{ $product->terjual }} Terjual</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
</div>
</main>
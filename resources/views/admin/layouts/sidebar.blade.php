<aside id="sidebar"
    class="fixed hidden z-20 h-full top-0 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75"
    aria-label="Sidebar">
    <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 bg-white divide-y space-y-1">
                <ul class="space-y-2 pb-2">
                    <li>
                        <a href="{{ route('admin.dashboard') }}"
                            class="text-base text-gray-900 font-normal rounded-lg hover:bg-primarybase hover:text-white flex items-center p-2 group ">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                fill="currentColor" width="24">
                                <path fill-rule="evenodd"
                                    d="M200-520q-33 0-56.5-23.5T120-600v-160q0-33 23.5-56.5T200-840h160q33 0 56.5 23.5T440-760v160q0 33-23.5 56.5T360-520H200Zm0 400q-33 0-56.5-23.5T120-200v-160q0-33 23.5-56.5T200-440h160q33 0 56.5 23.5T440-360v160q0 33-23.5 56.5T360-120H200Zm400-400q-33 0-56.5-23.5T520-600v-160q0-33 23.5-56.5T600-840h160q33 0 56.5 23.5T840-760v160q0 33-23.5 56.5T760-520H600Zm0 400q-33 0-56.5-23.5T520-200v-160q0-33 23.5-56.5T600-440h160q33 0 56.5 23.5T840-360v160q0 33-23.5 56.5T760-120H600ZM200-600h160v-160H200v160Zm400 0h160v-160H600v160Zm0 400h160v-160H600v160Zm-400 0h160v-160H200v160Zm400-400Zm0 240Zm-240 0Zm0-240Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white"
                            aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                fill="currentColor" width="24">
                                <path fill-rule="evenodd"
                                    d="M201-120q-33 0-56.5-23.5T121-200v-318q-23-21-35.5-54t-.5-72l42-136q8-26 28.5-43t47.5-17h556q27 0 47 16.5t29 43.5l42 136q12 39-.5 71T841-518v318q0 33-23.5 56.5T761-120H201Zm368-440q27 0 41-18.5t11-41.5l-22-140h-78v148q0 21 14 36.5t34 15.5Zm-180 0q23 0 37.5-15.5T441-612v-148h-78l-22 140q-4 24 10.5 42t37.5 18Zm-178 0q18 0 31.5-13t16.5-33l22-154h-78l-40 134q-6 20 6.5 43t41.5 23Zm540 0q29 0 42-23t6-43l-42-134h-76l22 154q3 20 16.5 33t31.5 13ZM201-200h560v-282q-5 2-6.5 2H751q-27 0-47.5-9T663-518q-18 18-41 28t-49 10q-27 0-50.5-10T481-518q-17 18-39.5 28T393-480q-29 0-52.5-10T299-518q-21 21-41.5 29.5T211-480h-4.5q-2.5 0-5.5-2v282Zm560 0H201h560Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>eFarm Mart</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-example" class="hidden py-2 space-y-2">
                            <li>
                                <a href="{{ route('admin.category.list') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Kategori</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.typelivestock.list') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Typelivestock</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.categorylivestock.list') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Category
                                    Typelivestock</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.product.list') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Produk</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.testimoni.list') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Ulasan</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.review.list') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Review</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white"
                            aria-controls="dropdown-efarm-partner" data-collapse-toggle="dropdown-efarm-partner">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                                fill="currentColor" width="24">
                                <path
                                    d="M475-160q4 0 8-2t6-4l328-328q12-12 17.5-27t5.5-30q0-16-5.5-30.5T817-607L647-777q-11-12-25.5-17.5T591-800q-15 0-30 5.5T534-777l-11 11 74 75q15 14 22 32t7 38q0 42-28.5 70.5T527-522q-20 0-38.5-7T456-550l-75-74-175 175q-3 3-4.5 6.5T200-435q0 8 6 14.5t14 6.5q4 0 8-2t6-4l108-108q11-11 27.5-11.5T398-528q11 11 11 28t-11 28L291-364q-3 3-4.5 6.5T285-350q0 8 6 14t14 6q4 0 8-2t6-4l108-107q11-11 27.5-11.5T483-443q11 11 11 28t-11 28L376-279q-3 2-4.5 6t-1.5 8q0 8 6 14t14 6q4 0 7.5-1.5t6.5-4.5l108-107q11-11 27.5-11.5T568-358q11 11 11 28t-11 28L460-194q-3 3-4.5 6.5T454-180q0 8 6.5 14t14.5 6Zm-1 80q-37 0-65.5-24.5T375-166q-34-5-57-28t-28-57q-34-5-56.5-28.5T206-336q-38-5-62-33t-24-66q0-20 7.5-38.5T149-506l175-175q23-23 56.5-23t56.5 23l75 75q2 3 6 4.5t8 1.5q9 0 15-5.5t6-14.5q0-4-1.5-8t-4.5-6L398-777q-11-12-25.5-17.5T342-800q-15 0-30 5.5T285-777L144-635q-9 9-15 21t-8 24q-2 12 0 24.5t8 23.5l-58 58q-17-23-25-50.5T40-590q2-28 14-54.5T87-692l141-141q24-23 53.5-35t60.5-12q31 0 60.5 12t52.5 35l11 11 11-11q24-23 53.5-35t60.5-12q31 0 60.5 12t52.5 35l169 169q23 23 35 53t12 61q0 31-12 60.5T873-437L545-110q-14 14-32.5 22T474-80Zm-98-560Z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>eFarm
                                Partner</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-efarm-partner" class="hidden py-2 space-y-2">
                            <li>
                                <a href="{{ route('admin.partner') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Data
                                    Partner</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.partner.from.submission') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Pengajuan
                                    Partner</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.partner.from.verified') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Partner
                                    Diverifikasi</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.customer.account') }}"
                            class="text-base text-gray-900 font-normal rounded-lg hover:bg-primarybase hover:text-white flex items-center p-2 group ">
                            <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-white transition duration-75"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M40-240q-17 0-28.5-11.5T0-280v-23q0-43 44-70t116-27q13 0 25 .5t23 2.5q-14 21-21 44t-7 48v65H40Zm240 0q-17 0-28.5-11.5T240-280v-25q0-32 17.5-58.5T307-410q32-20 76.5-30t96.5-10q53 0 97.5 10t76.5 30q32 20 49 46.5t17 58.5v25q0 17-11.5 28.5T680-240H280Zm500 0v-65q0-26-6.5-49T754-397q11-2 22.5-2.5t23.5-.5q72 0 116 26.5t44 70.5v23q0 17-11.5 28.5T920-240H780Zm-455-80h311q-10-20-55.5-35T480-370q-55 0-100.5 15T325-320ZM160-440q-33 0-56.5-23.5T80-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T160-440Zm640 0q-33 0-56.5-23.5T720-520q0-34 23.5-57t56.5-23q34 0 57 23t23 57q0 33-23 56.5T800-440Zm-320-40q-50 0-85-35t-35-85q0-51 35-85.5t85-34.5q51 0 85.5 34.5T600-600q0 50-34.5 85T480-480Zm0-80q17 0 28.5-11.5T520-600q0-17-11.5-28.5T480-640q-17 0-28.5 11.5T440-600q0 17 11.5 28.5T480-560Zm1 240Zm-1-280Z" />
                            </svg>
                            <span class="ml-3 flex-1 whitespace-nowrap">Pelanggan</span>
                        </a>
                    </li>
                    <li>
                        <button type="button"
                            class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white"
                            aria-controls="dropdown-pesanan" data-collapse-toggle="dropdown-pesanan">
                            <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-white transition duration-75"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM120-800H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h66q11 0 21 6t15 17l159 337h280l145-260q5-10 14-15t20-5q23 0 34.5 19.5t.5 39.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68.5-39t-1.5-79l54-98-144-304Zm367 120H360q-17 0-28.5-11.5T320-720q0-17 11.5-28.5T360-760h127l-36-36q-12-12-11.5-28t12.5-28q12-11 28-11.5t28 11.5l104 104q12 12 12 28t-12 28L508-588q-11 11-27.5 11.5T452-588q-11-11-11-28t11-28l35-36Z" />
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Data
                                Pesanan</span>
                            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <ul id="dropdown-pesanan" class="hidden py-2 space-y-2">
                            <li>
                                <a href="{{ route('admin.order.master') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Master
                                    Pesanan</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.order.new') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Pesanan
                                    Baru</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.order.confirmed') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Pesanan
                                    Dikonfirmasi</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.order.packed') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Pesanan
                                    Dikemas</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.order.sent') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Pesanan
                                    Dikirim</a>
                            </li>
                            <li>
                                <a href="{{ route('admin.order.end') }}"
                                    class="flex items-center w-full p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg group hover:bg-primarybase hover:text-white pl-11">Pesanan
                                    Selesai</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.report.list') }}"
                            class="text-base text-gray-900 font-normal rounded-lg hover:bg-primarybase hover:text-white flex items-center p-2 group ">
                            <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-white transition duration-75"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg" height="24"
                                viewBox="0 -960 960 960" width="24">
                                <path
                                    d="M320-600q17 0 28.5-11.5T360-640q0-17-11.5-28.5T320-680q-17 0-28.5 11.5T280-640q0 17 11.5 28.5T320-600Zm0 160q17 0 28.5-11.5T360-480q0-17-11.5-28.5T320-520q-17 0-28.5 11.5T280-480q0 17 11.5 28.5T320-440Zm0 160q17 0 28.5-11.5T360-320q0-17-11.5-28.5T320-360q-17 0-28.5 11.5T280-320q0 17 11.5 28.5T320-280ZM200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h407q16 0 30.5 6t25.5 17l154 154q11 11 17 25.5t6 30.5v407q0 33-23.5 56.5T760-120H200Zm0-80h560v-400H640q-17 0-28.5-11.5T600-640v-120H200v560Zm0-560v160-160 560-560Z" />
                            </svg>
                            <span class="ml-3 flex-1 whitespace-nowrap">Laporan</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('admin.payment.list') }}"
                            class="text-base text-gray-900 font-normal rounded-lg hover:bg-primarybase hover:text-white flex items-center p-2 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="currentColor" class="text-gray-500 group-hover:text-white">
                                <path
                                d="M560-440q-50 0-85-35t-35-85q0-50 35-85t85-35q50 0 85 35t35 85q0 50-35 85t-85 35ZM280-320q-33 0-56.5-23.5T200-400v-320q0-33 23.5-56.5T280-800h560q33 0 56.5 23.5T920-720v320q0 33-23.5 56.5T840-320H280Zm80-80h400q0-33 23.5-56.5T840-480v-160q-33 0-56.5-23.5T760-720H360q0 33-23.5 56.5T280-640v160q33 0 56.5 23.5T360-400Zm440 240H120q-33 0-56.5-23.5T40-240v-440h80v440h680v80ZM280-400v-320 320Z" />
                            </svg>
                            <span class="ml-3 flex-1 whitespace-nowrap">Pembayaran</span>
                        </a>
                    </li> --}}
                </ul>
                <div class="space-y-2 pt-2">
                    <a href="{{ route('admin.logout') }}"
                        class="text-base text-gray-900 font-normal rounded-lg hover:bg-primarybase hover:text-white flex items-center p-2 group ">
                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-white transition duration-75"
                            xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                            fill="currentColor" width="24">
                            <path
                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                        </svg>
                        <button type="submit" class="ml-3">Logout</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</aside>

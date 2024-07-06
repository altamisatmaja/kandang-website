<div class=" fixed top-[8rem] md:top-36 z-30">
    <div class="p-4 md:p-4 md:w-60 hidden md:flex h-auto z-30" id="sideNav">
        <div class="bg-primarybase rounded-xl">
            <div class="flex flex-wrap mx-auto justify-center md:flex-col md:justify-start p-3">
                <div class="hidden md:visible md:flex relative border-b border-white/20">
                    <div class="flex flex-col items-center my-4">
                        <div class="flex flex-wrap px-3">
                            <div>
                                <p class="text-lg font-bold text-white">
                                    {{ auth()->user()->nama }}
                                </p>
                                <div class="text-white font-medium text-md">
                                    Selamat datang 👋
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md:px-0 md:py-1 flex flex-wrap relative">
                    <a href="{{ route('customer.dashboard') }}"
                        class="md:mt-3 text-white px-2 md:w-full pr-4  hover:bg-sekunderbase rounded-lg hover:text-textbase cursor-pointer md:px-3 md:py-2 md:font-semibold md:text-lg flex flex-wrap md:items-center"><svg
                            class="hidden md:flex md:visible md:w-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 -960 960 960" fill="currentColor">
                            <path
                                d="M200-520q-33 0-56.5-23.5T120-600v-160q0-33 23.5-56.5T200-840h160q33 0 56.5 23.5T440-760v160q0 33-23.5 56.5T360-520H200Zm0 400q-33 0-56.5-23.5T120-200v-160q0-33 23.5-56.5T200-440h160q33 0 56.5 23.5T440-360v160q0 33-23.5 56.5T360-120H200Zm400-400q-33 0-56.5-23.5T520-600v-160q0-33 23.5-56.5T600-840h160q33 0 56.5 23.5T840-760v160q0 33-23.5 56.5T760-520H600Zm0 400q-33 0-56.5-23.5T520-200v-160q0-33 23.5-56.5T600-440h160q33 0 56.5 23.5T840-360v160q0 33-23.5 56.5T760-120H600ZM200-600h160v-160H200v160Zm400 0h160v-160H600v160Zm0 400h160v-160H600v160Zm-400 0h160v-160H200v160Zm400-400Zm0 240Zm-240 0Zm0-240Z" />
                        </svg><span class="mx-1"></span>Dashboard</a>
                    <a href="{{ route('customer.order.list') }}"
                        class="text-white px-2 md:w-full pr-4   hover:bg-sekunderbase rounded-lg hover:text-textbase cursor-pointer md:px-3 md:py-2 md:font-semibold md:text-lg flex flex-wrap md:items-center"><svg
                            class="hidden md:flex md:visible md:w-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 -960 960 960" fill="currentColor">
                            <path
                                d="M240-160q-50 0-85-35t-35-85H80q-17 0-28.5-11.5T40-320v-400q0-33 23.5-56.5T120-800h480q33 0 56.5 23.5T680-720v80h80q19 0 36 8.5t28 23.5l88 117q4 5 6 11t2 13v147q0 17-11.5 28.5T880-280h-40q0 50-35 85t-85 35q-50 0-85-35t-35-85H360q0 50-35 85t-85 35Zm0-80q17 0 28.5-11.5T280-280q0-17-11.5-28.5T240-320q-17 0-28.5 11.5T200-280q0 17 11.5 28.5T240-240ZM120-360h32q17-18 39-29t49-11q27 0 49 11t39 29h272v-360H120v360Zm600 120q17 0 28.5-11.5T760-280q0-17-11.5-28.5T720-320q-17 0-28.5 11.5T680-280q0 17 11.5 28.5T720-240Zm-40-200h170l-90-120h-80v120ZM360-540Z" />
                        </svg><span class="mx-1 "></span>Pesanan</a>
                    <a href="{{ route('customer.cart') }}"
                        class="text-white px-2 md:w-full pr-4   hover:bg-sekunderbase rounded-lg hover:text-textbase cursor-pointer md:px-3 md:py-2 md:font-semibold md:text-lg flex flex-wrap md:items-center"><svg
                            class="hidden md:flex md:visible md:w-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 -960 960 960" fill="currentColor">
                            <path
                                d="M280-80q-33 0-56.5-23.5T200-160q0-33 23.5-56.5T280-240q33 0 56.5 23.5T360-160q0 33-23.5 56.5T280-80Zm400 0q-33 0-56.5-23.5T600-160q0-33 23.5-56.5T680-240q33 0 56.5 23.5T760-160q0 33-23.5 56.5T680-80ZM246-720l96 200h280l110-200H246Zm-38-80h590q23 0 35 20.5t1 41.5L692-482q-11 20-29.5 31T622-440H324l-44 80h440q17 0 28.5 11.5T760-320q0 17-11.5 28.5T720-280H280q-45 0-68-39.5t-2-78.5l54-98-144-304H80q-17 0-28.5-11.5T40-840q0-17 11.5-28.5T80-880h65q11 0 21 6t15 17l27 57Zm134 280h280-280Z" />
                        </svg><span class="mx-1 "></span>Keranjang</a>
                    <a href="{{ route('customer.lacak') }}"
                        class="text-white px-2 md:w-full pr-4   hover:bg-sekunderbase rounded-lg hover:text-textbase cursor-pointer md:px-3 md:py-2 md:font-semibold md:text-lg flex flex-wrap md:items-center"><svg
                            class="hidden md:flex md:visible md:w-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 -960 960 960" fill="currentColor">
                            <path
                                d="M660-120q-75 0-127.5-52.5T480-300q0-75 52.5-127.5T660-480q75 0 127.5 52.5T840-300q0 26-7.5 50T812-204l80 80q11 11 11 28t-11 28q-11 11-28 11t-28-11l-80-80q-22 13-46 20.5t-50 7.5Zm0-80q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Zm-460 80q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h167q11-35 43-57.5t70-22.5q40 0 71.5 22.5T594-840h166q33 0 56.5 23.5T840-760v160q0 17-11.5 28.5T800-560q-17 0-28.5-11.5T760-600v-160h-80v80q0 17-11.5 28.5T640-640H320q-17 0-28.5-11.5T280-680v-80h-80v560h160q17 0 28.5 11.5T400-160q0 17-11.5 28.5T360-120H200Zm280-640q17 0 28.5-11.5T520-800q0-17-11.5-28.5T480-840q-17 0-28.5 11.5T440-800q0 17 11.5 28.5T480-760Z" />
                        </svg><span class="mx-1 "></span>Lacak</a>
                    <a href="{{ route('customer.account.detail') }}"
                        class="text-white px-2 md:w-full pr-4   hover:bg-sekunderbase rounded-lg hover:text-textbase cursor-pointer md:px-3 md:py-2 md:font-semibold md:text-lg flex flex-wrap md:items-center"><svg
                            class="hidden md:flex md:visible md:w-6" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 -960 960 960" fill="currentColor">
                            <path
                                d="M234-276q51-39 114-61.5T480-360q69 0 132 22.5T726-276q35-41 54.5-93T800-480q0-133-93.5-226.5T480-800q-133 0-226.5 93.5T160-480q0 59 19.5 111t54.5 93Zm246-164q-59 0-99.5-40.5T340-580q0-59 40.5-99.5T480-720q59 0 99.5 40.5T620-580q0 59-40.5 99.5T480-440Zm0 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q53 0 100-15.5t86-44.5q-39-29-86-44.5T480-280q-53 0-100 15.5T294-220q39 29 86 44.5T480-160Zm0-360q26 0 43-17t17-43q0-26-17-43t-43-17q-26 0-43 17t-17 43q0 26 17 43t43 17Zm0-60Zm0 360Z" />
                        </svg><span class="mx-1"></span>Akun</a>
                </div>
                {{-- <div class="hidden md:visible md:flex relative border-t border-white/20">
                    <a href="{{ route('password.request') }}"
                        class="text-white px-2 md:w-full pr-4 mt-3 hover:bg-sekunderbase rounded-lg hover:text-textbase cursor-pointer md:px-3 md:py-2 md:font-semibold md:text-lg flex flex-wrap md:items-center"><svg
                            xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                            width="24px" fill="currentColor">
                            <path
                                d="M240-80q-33 0-56.5-23.5T160-160v-400q0-33 23.5-56.5T240-640h360v-80q0-50-35-85t-85-35q-42 0-73.5 25.5T364-751q-4 14-16.5 22.5T320-720q-17 0-28.5-11t-8.5-26q14-69 69-116t128-47q83 0 141.5 58.5T680-720v80h40q33 0 56.5 23.5T800-560v400q0 33-23.5 56.5T720-80H240Zm0-80h480v-400H240v400Zm240-120q33 0 56.5-23.5T560-360q0-33-23.5-56.5T480-440q-33 0-56.5 23.5T400-360q0 33 23.5 56.5T480-280ZM240-160v-400 400Z" />
                        </svg><span class="mx-1"></span>Lupa sandi</a>
                </div> --}}
            </div>
        </div>
    </div>
</div>

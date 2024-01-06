<header>
    <nav class="container flex items-center justify-between p-4 mx-auto">
        <!-- Mobile Navigation -->
        <div class="flex items-center ml-5 lg:hidden">
            <button class="text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="stroke-0 bi bi-list text-primary h-7 w-7" viewBox="0 0 16 16" type="button"
                    data-drawer-target="nav-drawer" data-drawer-show="nav-drawer">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>
            <span class="ml-2 text-xl text-black">Navigation</span>
        </div>

        <!-- Logo -->
        <a href="/" class="flex items-center ml-5 mr-5 lg:ml-10 lg:mr-0">
            <img class="h-8 md:hidden lg:hidden" src="{{ asset('assets/logo/icon.png') }}" alt="">
            <img class="hidden h-8 md:block lg:block" src="{{ asset('assets/logo/logo_blk.png') }}" alt="">
        </a>

        <!-- Desktop Navigation -->
        <div class="items-center justify-center flex-grow hidden text-center lg:flex">
            <a class="p-3 px-5 transition duration-300 ease-in-out active:bg-primary active:text-white rounded-3xl hover:bg-secondary hover:text-black"
                href="/">Beranda</a>
            <a class="p-3 px-5 transition duration-300 ease-in-out active:bg-primary active:text-white rounded-3xl hover:bg-secondary hover:text-black"
                href="/about">Tentang Kami</a>
            <a class="p-3 px-5 transition duration-300 ease-in-out active:bg-primary active:text-white rounded-3xl hover:bg-secondary hover:text-black"
                href="/contact">Kontak</a>
        </div>

        <!-- Action buttons -->
        <div class="items-center hidden mr-10 lg:flex">
            <button class="px-5 py-3 text-white bg-primary rounded-xl active:bg-red-800">Daftarkan Tempat</button>
            <a href="/login" class="px-4">Admin <span><i class="bi bi-arrow-right-circle"></i></span></a>
        </div>
    </nav>

    <!-- Nav Drawer -->
    <div id="nav-drawer"
        class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
        tabindex="-1">
        <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center">
                <button type="button" data-drawer-hide="nav-drawer"><svg xmlns="http://www.w3.org/2000/svg"
                        width="10" height="10" fill="currentColor" class="w-5 h-5 bi bi-x-lg stroke-primary"
                        viewBox="0 0 16 16">
                        <path
                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg>
                </button>
                <span class="ml-2 text-black">Navigation</span>
            </div>
            <div class="justify-items-end">
                <img class="float-right h-8" src="{{ asset('assets/logo/icon.png') }}" alt="">
            </div>
            <div class="col-span-2">
                <div class="flex-auto">
                    <form>
                        <div class="relative flex">
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-2 text-sm text-gray-900 border border-gray-300 ps-10 rounded-xl bg-gray-50 focus:ring-blue-200 focus:border-blue-200">
                            <button type="reset" class="absolute end-14 bottom-3 pr-7">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                </svg>
                            </button>
                            <button type="submit"
                                class="text-white absolute end-1.5 bottom-1.5 bg-primary hover:bg-primary focus:bg-red-800 rounded-lg text-sm px-3 py-1">Cari
                                <i class="bi bi-arrow-right-circle"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-span-2">
                <hr>
            </div>
            <div class="col-span-2">
                <a class="p-2 px-2 text-sm transition duration-300 ease-in-out active:bg-primary active:text-white rounded-3xl hover:bg-secondary hover:text-black"
                    href="/">Beranda</a>
            </div>
            <div class="col-span-2">
                <a class="p-2 px-2 text-sm transition duration-300 ease-in-out active:bg-primary active:text-white rounded-3xl hover:bg-secondary hover:text-black"
                    href="/about">Tentang Kami</a>
            </div>
            <div class="col-span-2">
                <a class="p-2 px-2 text-sm transition duration-300 ease-in-out active:bg-primary active:text-white rounded-3xl hover:bg-secondary hover:text-black"
                    href="/contact">Kontak</a>
            </div>
            <div class="col-span-2">
                <hr>
            </div>
            <div class="flex items-center col-span-2">
                <button class="px-4 py-2 text-sm text-white rounded-lg bg-primary active:bg-red-800">Daftarkan
                    Tempat</button>
                <a href="/login" class="px-4 text-sm">Admin <span><i class="bi bi-arrow-right-circle"></i></span></a>
            </div>
        </div>
    </div>
</header>

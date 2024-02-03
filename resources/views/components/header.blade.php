<header>
    <nav class="container mx-auto flex items-center justify-between p-4">
        <!-- Mobile Navigation -->
        <div class="ml-5 flex items-center lg:hidden">
            <button class="text-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-list text-primary h-7 w-7 stroke-0" viewBox="0 0 16 16" type="button"
                    data-drawer-target="nav-drawer" data-drawer-show="nav-drawer">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
            </button>
            <span class="ml-2 text-xl text-black">Navigation</span>
        </div>

        <!-- Logo -->
        <a href="/" class="ml-5 mr-5 flex items-center lg:ml-10 lg:mr-0">
            <img class="h-8 md:hidden lg:hidden" src="{{ asset('assets/logo/icon.png') }}" alt="">
            <img class="hidden h-8 md:block lg:block" src="{{ asset('assets/logo/logo_blk.png') }}" alt="">
        </a>

        <!-- Desktop Navigation -->
        <div class="hidden flex-grow items-center justify-center text-center lg:flex">
            <a class="active:bg-primary hover:bg-secondary me-2 rounded-3xl p-3 px-5 transition duration-300 ease-in-out hover:text-black active:text-white"
                href="/">Beranda</a>
            <a class="active:bg-primary hover:bg-secondary me-2 rounded-3xl p-3 px-5 transition duration-300 ease-in-out hover:text-black active:text-white"
                href="/about">Tentang Kami</a>
            <a class="active:bg-primary hover:bg-secondary rounded-3xl p-3 px-5 transition duration-300 ease-in-out hover:text-black active:text-white"
                href="/contact">Kontak</a>
        </div>

        <!-- Action buttons -->
        <div class="mr-10 hidden items-center lg:flex">
            <button
                class="ring-inset-1 me-3 rounded-lg px-4 py-2 text-sm text-black ring-1 ring-black transition duration-500 ease-in-out hover:bg-black hover:text-white active:bg-black active:text-white">Daftarkan
                Tempat</button>
            <a href="/login" class="bg-primary rounded-xl px-5 py-1.5 text-white active:bg-red-800"><span
                    class="align-middle">Masuk </span><span class="align-middle text-xl"><i
                        class="bi bi-box-arrow-in-right"></i></span></a>
        </div>
    </nav>

    <!-- Nav Drawer -->
    <div id="nav-drawer"
        class="fixed left-0 top-0 z-40 h-screen w-80 -translate-x-full overflow-y-auto bg-white p-4 transition-transform dark:bg-gray-800"
        tabindex="-1">
        <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center">
                <button type="button" data-drawer-hide="nav-drawer"><svg xmlns="http://www.w3.org/2000/svg"
                        width="10" height="10" fill="currentColor" class="bi bi-x-lg stroke-primary h-5 w-5"
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
                        <div class="relative flex" x-data="{ searchInput: '' }">
                            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search" x-model="searchInput"
                                class="block w-full rounded-xl border border-gray-300 bg-gray-50 p-2 ps-10 text-sm text-gray-900 focus:border-blue-200 focus:ring-blue-200">
                            <button x-show="searchInput.trim() !== ''" type="reset"
                                class="absolute bottom-3 end-14 pr-7">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                </svg>
                            </button>
                            <button type="submit"
                                class="bg-primary hover:bg-primary absolute bottom-1.5 end-1.5 rounded-lg px-3 py-1 text-sm text-white focus:bg-red-800">Cari
                                <i class="bi bi-arrow-right-circle"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-span-2">
                <hr>
            </div>
            <div class="col-span-2">
                <a class="active:bg-primary hover:bg-secondary rounded-3xl p-2 px-2 text-sm transition duration-300 ease-in-out hover:text-black active:text-white"
                    href="/">Beranda</a>
            </div>
            <div class="col-span-2">
                <a class="active:bg-primary hover:bg-secondary rounded-3xl p-2 px-2 text-sm transition duration-300 ease-in-out hover:text-black active:text-white"
                    href="/about">Tentang Kami</a>
            </div>
            <div class="col-span-2">
                <a class="active:bg-primary hover:bg-secondary rounded-3xl p-2 px-2 text-sm transition duration-300 ease-in-out hover:text-black active:text-white"
                    href="/contact">Kontak</a>
            </div>
            <div class="col-span-2">
                <hr>
            </div>
            <div class="col-span-2 flex items-center">
                <button
                    class="ring-inset-1 me-3 rounded-lg px-4 py-2 text-sm text-black ring-1 ring-black transition duration-500 ease-in-out hover:bg-black hover:text-white active:bg-black active:text-white">Daftarkan
                    Tempat</button>
                <a href="/login" class="bg-primary rounded-lg px-4 py-2 text-sm text-white active:bg-red-800">Masuk
                    <span><i class="bi bi-box-arrow-in-right"></i></span></a>

            </div>
        </div>
    </div>
</header>

<header>
    <nav class="flex p-10 sm:ml-64">
        <h1 class="pr-5 text-xl"><span class="align-middle">Welcome, Admin!</span></h1>
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
                        class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-3xl bg-gray-50 ps-10 focus:border-blue-200 focus:ring-blue-200">
                    <button type="reset" class="absolute bottom-3 end-14 pr-7">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </button>
                    <button type="submit"
                        class="bg-primary hover:bg-primary absolute bottom-1.5 end-1.5 rounded-3xl px-3 py-1 text-sm text-white focus:bg-red-800">Cari
                        <i class="bi bi-arrow-right-circle"></i></button>
                </div>
            </form>
        </div>
        </div>
        <div class="flex items-center justify-center pl-5 space-x-3">
            <a href=""><span><i class="bi bi-person"></i></span> Account</a>
            <a href=""><span><i class="bi bi-box-arrow-right"></i></span> Logout</a>
        </div>
    </nav>
</header>
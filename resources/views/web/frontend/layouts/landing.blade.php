<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body>
    @include('components.header')
    <div class="flex content-start justify-center">
        <div class="bg-peach flex flex-col h-screen w-11/12 rounded-3xl">
            <div class="w-auto pt-8 md:pt-10 text-center">
                {{-- Text Jumbotron --}}
                <div class="md:mt-8 px-10">
                    <span class="text-3xl md:text-4xl font-bold">Temukan
                        <span
                            class="inline-block rotate-[-6deg] transform rounded-xl bg-black px-3 py-1 text-white">Kuliner</span>
                        Lokal<br>Sekarang Juga
                    </span>
                </div>
            </div>
            {{-- End Text Jumbotron --}}

            {{-- Form Search & GPS Button --}}
            <div class="w-auto pt-6">
                {{-- Search Form --}}
                <div class="flex flex-nowrap justify-center pt-5 px-52">
                    <form class="w-11/12 grow me-3">
                        <div class="relative flex" x-data="{ searchInput: '' }">
                            {{-- Search Icon Form --}}
                            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                                <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            {{-- Input Field --}}
                            <input type="search" id="default-search" x-model="searchInput"
                                class="block w-full rounded-xl border border-gray-300 bg-gray-50 p-3 ps-10 text-sm text-gray-900 focus:border-blue-200 focus:ring-blue-200">
                            {{-- Reset Button --}}
                            <button x-show="searchInput.trim() !== ''" type="reset"
                                class="absolute bottom-4 end-16 pr-7">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                                    <path
                                        d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708" />
                                </svg>
                            </button>
                            {{-- Search Button --}}
                            <button type="submit"
                                class="bg-primary hover:bg-primary absolute bottom-1.5 end-1.5 rounded-lg px-2 py-1 text-lg text-white focus:bg-red-800">Cari
                                <i class="bi bi-arrow-right-circle"></i></button>
                        </div>
                    </form>
                    <button class="bg-white transition-all duration-150 ease-out flex group hover:pr-14 text-3xl rounded-3xl overflow-hidden">
                        <span class="py-1.5 px-2.5 bg-primary rounded-full text-white"><i class="bi bi-crosshair"></span></i><span class="bg-white hidden transition-all ease-out ms-3 mt-2 group-hover:block text-xl whitespace-nowrap">Lokasi Saya</span>
                    </button>
                </div>
            </div>
            {{-- End Form Search & GPS Button --}}

            
        </div>
    </div>
</body>

</html>

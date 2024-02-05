<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body>
    @include('components.header')
    <div class="flex content-start justify-center">
        <div class="flex flex-col w-11/12 h-screen bg-peach overflow-clip rounded-3xl">
            {{-- Text Jumbotron --}}
            <div class="w-auto pt-8 text-center md:pt-10">
                {{-- Text Jumbotron --}}
                <div class="px-10 md:mt-8">
                    <span class="text-3xl font-bold md:text-4xl">Temukan
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
                <div class="flex justify-center pt-5 flex-nowrap px-52">
                    <form class="w-11/12 grow me-3">
                        <div class="relative flex" x-data="{ searchInput: '' }">
                            {{-- Search Icon Form --}}
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            {{-- Input Field --}}
                            <input type="search" id="default-search" x-model="searchInput"
                                class="block w-full p-3 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 ps-10 focus:border-blue-200 focus:ring-blue-200">
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
                    <button class="flex overflow-hidden text-3xl transition-all duration-150 ease-out bg-white group hover:pr-14 rounded-3xl">
                        <span class="py-1.5 px-2.5 bg-primary rounded-full text-white"><i class="bi bi-crosshair"></span></i><span class="hidden mt-2 text-xl transition-all ease-out bg-white ms-3 group-hover:block whitespace-nowrap">Lokasi Saya</span>
                    </button>
                </div>
            </div>
            {{-- End Form Search & GPS Button --}}

            {{-- 3 Card --}}
            <div class="flex items-center justify-center w-auto">
                <div class="z-10 w-1/4 mt-40 -rotate-[15deg] bg-black h-96 rounded-3xl"></div>
                <div class="z-0 w-1/4 bg-primary h-96 rounded-3xl"></div>
                <div class="z-10 w-1/4 mt-40 rotate-[15deg] bg-black h-96 rounded-3xl"></div>
            </div>
        </div>
    </div>
    <div class="flex content-start justify-center pt-10">
        <div class="relative w-11/12 py-10 bg-black px-14 rounded-3xl h-96">
            <span class="text-2xl font-medium text-white">Rekomendasi kuliner dari kami <br><span class="text-base font-normal">Kuliner - kuliner berikut merupakan kuliner yang paling banyak dicari di Lokalezat!</span></span>
            <div class="z-0 w-full mt-24 h-1/2 rounded-3xl bg-primary">
                <div class="w-10 h-10 bg-white"></div>
            </div>
            <button class="absolute z-10 p-3 bg-white rounded-full top-60 left-5"><span class="text-4xl"><i class="bi bi-chevron-left"></i></span></button>
            <button class="absolute z-10 p-3 bg-white rounded-full top-60 right-5"><span class="text-4xl"><i class="bi bi-chevron-right"></i></span></button>
        </div>
    </div>
</body>

</html>

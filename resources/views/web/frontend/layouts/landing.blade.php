<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body>
    @include('components.header')
    <div class="flex content-center justify-center">
        <div class="flex justify-center w-11/12 h-screen bg-peach rounded-3xl">
            <div class="w-auto pt-12 text-center">
                {{-- Text Jumbotron --}}
                <span class="text-3xl font-bold">Temukan 
                    <span class="transform rotate-[-6deg] inline-block bg-black px-3 py-1 text-white rounded-xl">Kuliner</span> 
                    Lokal<br>Sekarang Juga
                </span>
                {{-- End Text Jumbotron --}}
                
                {{-- Search Form --}}
                <div class="flex justify-center pt-5">
                    <form>
                        <div class="relative flex">
                            {{-- Search Icon Form --}}
                            <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            {{-- Input Field --}}
                            <input type="search" id="default-search"
                                class="block w-full p-3 text-sm text-gray-900 border border-gray-300 ps-10 rounded-xl bg-gray-50 focus:ring-blue-200 focus:border-blue-200">
                            {{-- Search Button --}}
                            <button type="submit"
                                class="text-white absolute end-1.5 bottom-1.5 bg-primary hover:bg-primary focus:bg-red-800 rounded-lg text-lg px-2 py-1">Cari
                                <i class="bi bi-arrow-right-circle"></i></button>
                        </div>
                    </form>
                </div>        
            </div>
        </div>
    </div>
</body>

</html>

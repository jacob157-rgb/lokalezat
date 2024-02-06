<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body>
    @include('components.header')
    <div class="flex content-start justify-center">
        {{-- Jumbotron --}}
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
                    <form class="w-11/12 me-3 grow">
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
                    <button
                        class="flex overflow-hidden text-3xl transition-all duration-150 ease-out bg-white group rounded-3xl hover:pr-14">
                        <span class="bg-primary rounded-full px-2.5 py-1.5 text-white"><i
                                class="bi bi-crosshair"></span></i><span
                            class="hidden mt-2 text-xl transition-all ease-out bg-white ms-3 whitespace-nowrap group-hover:block">Lokasi
                            Saya</span>
                    </button>
                </div>
            </div>
            {{-- End Form Search & GPS Button --}}

            {{-- 3 Card --}}
            <div class="flex items-center justify-center w-auto">
                <div class="z-10 mt-40 h-96 w-1/4 -rotate-[15deg] rounded-3xl drop-shadow-2xl"><img
                        class="object-cover w-full h-full rounded-3xl" src="{{ asset('assets/image/hero/tahu.png') }}"
                        alt=""></div>
                <div class="z-0 w-1/4 h-96 rounded-3xl drop-shadow-2xl"><img
                        class="object-cover w-full h-full rounded-3xl" src="{{ asset('assets/image/hero/soto.png') }}"
                        alt=""></div>
                <div class="z-10 mt-40 h-96 w-1/4 rotate-[15deg] rounded-3xl drop-shadow-2xl"><img
                        class="object-cover w-full h-full rounded-3xl" src="{{ asset('assets/image/hero/sate.png') }}"
                        alt=""></div>
            </div>
            {{-- End 3 Card --}}
        </div>
    </div>
    {{-- End Jumbotron --}}

    {{-- Kuliner --}}
    <div class="flex content-start justify-center pt-10" x-data="{
        activeSlide: 1,
        loop() {
            setInterval(() => { this.activeSlide = this.activeSlide === 3 ? 1 : this.activeSlide + 1 }, 3000)
        },
    }" x-init="loop">
        <div class="relative h-[30rem] w-11/12 rounded-3xl bg-black px-14 py-10">
            <span class="text-2xl font-medium text-white">Rekomendasi Kuliner dari kami <br><span
                    class="text-base font-normal">Kuliner - kuliner berikut merupakan kuliner yang paling banyak dicari
                    di Lokalezat!</span></span>

            {{-- Red Decoration --}}
            <div class="bg-primary z-0 mt-24 flex h-[15rem] w-full rounded-3xl"></div>
            {{-- End Red Decoration --}}

            {{-- Kuliner Item --}}
            <div class="absolute flex w-11/12 px-8 left-12 top-36 justify-evenly" x-show="activeSlide === 1"
                x-transition.duration.1000ms>
                <div class="w-64 h-64 bg-blue-600 rounded-3xl"></div>
                <div class="w-64 h-64 bg-white rounded-3xl"></div>
                <div class="w-64 h-64 bg-white rounded-3xl"></div>
                <div class="w-64 h-64 bg-red-300 rounded-3xl"></div>
            </div>
            <div class="absolute flex w-11/12 px-8 left-12 top-36 justify-evenly" x-show="activeSlide === 2"
                x-transition.duration.1000ms>
                <div class="w-64 h-64 bg-white rounded-3xl"></div>
                <div class="w-64 h-64 bg-blue-600 rounded-3xl"></div>
                <div class="w-64 h-64 bg-red-300 rounded-3xl"></div>
                <div class="w-64 h-64 bg-white rounded-3xl"></div>
            </div>
            <div class="absolute flex w-11/12 px-8 left-12 top-36 justify-evenly" x-show="activeSlide === 3"
                x-transition.duration.1000ms>
                <div class="w-64 h-64 bg-blue-600 rounded-3xl"></div>
                <div class="w-64 h-64 bg-red-300 rounded-3xl"></div>
                <div class="w-64 h-64 bg-white rounded-3xl"></div>
                <div class="w-64 h-64 bg-white rounded-3xl"></div>
            </div>
            {{-- End Kuliner Item --}}

            {{-- Prev Button --}}
            <button @click="activeSlide = (activeSlide - 1 + 3) % 3 + 1" type="button"
                class="absolute z-10 p-3 bg-white rounded-full left-5 top-64"><span class="text-4xl"><i
                        class="bi bi-chevron-left"></i></span></button>
            {{-- End Prev Button --}}

            {{-- Next Button --}}
            <button @click="activeSlide = (activeSlide + 1) % 3 + 1" type="button"
                class="absolute z-10 p-3 bg-white rounded-full right-5 top-64"><span class="text-4xl"><i
                        class="bi bi-chevron-right"></i></span></button>
            {{-- End Next Button --}}
        </div>
    </div>
    {{-- End Kuliner --}}

    {{-- Tempat Kuliner --}}
    <div class="flex content-start justify-center pt-10">
        <div class="bg-peach relative h-[35rem] w-11/12 rounded-3xl px-10 py-10">
            <span class="px-4 text-2xl font-medium text-black">Rekomendasi Tempat dari kami <br><span
                    class="px-4 text-base font-normal">Banyak orang telah menikmati kuliner di tempat ini!</span></span>

            {{-- 3 Tempat --}}
            <div class="absolute left-[0.100rem] top-36 flex w-full justify-evenly">
                <div class="h-[23rem] w-[23rem] rounded-3xl bg-blue-600"></div>
                <div class="h-[23rem] w-[23rem] rounded-3xl bg-white"></div>
                <div class="h-[23rem] w-[23rem] rounded-3xl bg-red-300"></div>
            </div>
            {{-- End 3 Tempat --}}
        </div>
    </div>
    {{-- End Tempat Kuliner --}}

    {{-- About Us --}}
    <div class="flex content-start justify-center pt-10">
        <div class="relative h-[40rem] w-11/12 rounded-3xl bg-black py-10">
            {{-- Top Container --}}
            <div class="flex px-12 h-1/4">
                <div class="me-14">
                    <span class="text-2xl font-medium text-white">Tentang kami <br><span
                            class="text-base font-normal leading-snug">Kami membantu anda menemukan kuliner lokal yang
                            ada di berbagai
                            daerah di Indonesia dengan informasi yang spesifik, relevan, dan akurat sesuai kebutuhan
                            anda.</span></span>
                </div>
                <div class="w-4/5 h-full bg-primary rounded-3xl"><img class="object-contain w-full h-full p-9"
                        src="{{ asset('assets/logo/logo_wht.png') }}" alt=""></div>
            </div>
            {{-- End Top Container --}}

            {{-- Bottom Container --}}

            {{-- Red Decor --}}
            <div class="bg-primary z-0 mt-10 flex h-[27rem] w-full rounded-3xl"></div>
            {{-- End Red Decor --}}

            {{-- About Card --}}
            <div class="absolute flex justify-between w-11/12 left-12 top-80">
                <div class="w-64 h-64 border-2 rounded-3xl p-7">
                    <span class="text-4xl text-white"><i class="bi bi-lightbulb"></i><span
                            class="text-2xl align-middle"> Solusi</span></span><br><br>
                    <span class="text-white">Kami menjadi solusi bagi anda yang mengalami kesulitan dalam menemukan
                        informasi kuliner lokal.</span>
                </div>
                <div class="w-64 h-64 border-2 rounded-3xl p-7">
                    <span class="text-4xl text-white"><i class="bi bi-bullseye"></i><span
                            class="text-2xl align-middle"> Spesifik</span></span><br><br>
                    <span class="text-white">Kami menyediakan informasi dengan detail dan spesifik untuk kebutuhan anda
                        mencari kuliner lokal.</span>
                </div>
                <div class="w-64 h-64 border-2 rounded-3xl p-7">
                    <span class="text-4xl text-white"><i class="bi bi-check2-square"></i><span
                            class="text-2xl align-middle"> Relevan</span></span><br><br>
                    <span class="text-white">Kami berusaha sebisa mungkin menyediakan informasi yang relevan dengan
                        kebutuhan dan preferensi anda.</span>
                </div>
                <div class="w-64 h-64 border-2 rounded-3xl p-7">
                    <span class="text-4xl text-white"><i class="bi bi-crosshair"></i><span
                            class="text-2xl align-middle"> Akurat</span></span><br><br>
                    <span class="text-white">Kami selalu berusaha untuk memastikan keakuratan informasi yang kami
                        bawakan dalam konten kami.</span>
                </div>
            </div>
            {{-- End About Card --}}
        </div>
    </div>
    {{-- End About Us --}}


    <div class="flex content-start justify-center pt-10">
        <div class="bg-peach relative flex h-[33rem] w-11/12 rounded-3xl px-16 py-10">
            <div class="h-full w-[32rem] rounded-3xl bg-black"></div>
            <div class="w-1/2 h-full py-14 px-14 ms-10">
                <img class="object-contain w-1/3 h-auto mb-4" src="{{ asset('assets/logo/logo_blk.png') }}"
                    alt="">
                <div><span class="text-3xl font-medium">Hubungi Kami</span></div>
                <div class="pt-5"><span class="text-3xl"><i class="bi bi-telephone pe-5"></i><span
                            class="text-2xl"> +(62) 887 1414 2828</span></span></div>
                <div class="pt-5"><span class="text-3xl"><i class="bi bi-envelope pe-5"></i><span
                            class="text-2xl"> lokalezat@mail.com</span></span></div>
                <div class="pt-10"><span class="text-2xl font-medium">Atau Ketikan email anda disini</span></div>
                <form class="w-full me-3 grow">
                    <div class="relative flex" x-data="{ searchInput: '' }">
                        {{-- Search Icon Form --}}
                        <div class="absolute inset-y-0 flex items-center pointer-events-none start-0 ps-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-gray-500 dark:text-gray-400"
                                fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path stroke-width="2"
                                    d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
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
                            class="bg-primary hover:bg-primary absolute bottom-1.5 end-1.5 rounded-lg px-4 py-1 text-lg text-white focus:bg-red-800">Kirim
                            <i class="bi bi-arrow-right-circle"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="pt-20"></div>
</body>

</html>

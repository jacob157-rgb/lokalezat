<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body class="bg-primary">
    <div class="flex flex-col h-screen lg:flex lg:flex-row-reverse">
        <div class="flex flex-col items-center justify-center basis-1/2">
            <div class="flex flex-col items-center justify-center p-10 md:p-20">
                <img class="w-3/4" src="{{ asset('assets/logo/logo_wht.png') }}" alt="">
                <span class="w-full mt-4 text-center text-white">Temukan Informasi Kuliner lokal dengan Tepat &
                    Akurat.</span>
            </div>
        </div>
        <div x-data="{ tab: 1 }"
            class="flex flex-col justify-center w-full p-10 bg-white md:overflow-y-auto basis-1/2 rounded-t-2xl lg:rounded-l-none lg:rounded-r-2xl scroll-smooth">
            <div class="flex justify-center">
                <span class="pt-1 text-3xl md:mt-16">Daftar Sebagai</span>
            </div>

            <div class="text-sm font-medium text-center border-b">
                <ul class="flex flex-wrap -mb-px">
                    <li class="me-2" @click="tab = 1">
                        <a class="inline-block p-4 text-gray-500 border-b"
                            :class="tab === 1 ? 'border-primary text-primary border-b-2' : 'border-gray-200 rounded-t-lg'"
                            aria-current="page">Pengguna</a>
                    </li>
                    <li class="me-2" @click="tab = 2">
                        <a class="inline-block p-4 text-gray-500 border-b"
                            :class="tab === 2 ? 'border-primary text-primary border-b-2' : 'border-gray-200 rounded-t-lg'"
                            aria-current="page">Toko</a>
                    </li>
                </ul>
            </div>

            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf

                <div class="flex justify-center pt-5">
                    <div class="w-full">
                        <label for="name" class="block text-sm font-medium text-gray-900">Nama</label>
                        <input type="text" id="name" name="name"
                            class="s:border-primary-500 focus:ring-primary-500 block w-full rounded-xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                            value="{{ old('name') }}" required autocomplete="name">
                        @error('name')
                            <span class="text-xs font-medium text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-center pt-5">
                    <div class="w-full">
                        <label for="email" class="block text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email" name="email"
                            class="us:border-primary-500 focus:ring-primary-500 block w-full rounded-xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                            value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="text-xs font-medium text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-center pt-5">
                    <div class="w-full">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" id="password" name="password"
                            class="focus:border-primary-500 focus:ring-primary-500 block w-full rounded-xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                            value="{{ old('password') }}" required autocomplete="new-password">
                        @error('password')
                            <span class="text-xs font-medium text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex justify-center pt-5">
                    <div class="w-full">
                        <label for="passwordConfirm" class="block mb-2 text-sm font-medium text-gray-900">Ulangi
                            Password</label>
                        <input type="password" id="passwordConfirm" name="password_confirmation"
                            class="focus:border-primary-500 focus:ring-primary-500 block w-full rounded-xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                            value="{{ old('password_confirmation') }}" required autocomplete="new-password">
                        @error('password_confirmation')
                            <span class="text-xs font-medium text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <input type="hidden" name="roles" x-model="tab === 1 ? 3 : 2">

                <div class="flex justify-center pt-10">
                    <button type="submit" id="submitButton"
                        class="w-full py-2 text-lg text-white bg-primary rounded-xl">Daftar
                        <span class="align-middle"><i class="bi bi-plus-circle"></i></span></button>
                </div>
                <div class="flex justify-center">
                    <div class="w-full">
                        <div class="relative flex items-center py-5">
                            <div class="flex-grow border-t border-gray-500"></div>
                            <span class="flex-shrink mx-4 text-gray-600">Atau daftar dengan</span>
                            <div class="flex-grow border-t border-gray-500"></div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <button
                        class="flex items-center justify-center w-full py-2 text-lg text-center border border-black rounded-xl"><svg
                            class="w-6 h-6 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 326667 333333"
                            shape-rendering="geometricPrecision" text-rendering="geometricPrecision"
                            image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                d="M326667 170370c0-13704-1112-23704-3518-34074H166667v61851h91851c-1851 15371-11851 38519-34074 54074l-311 2071 49476 38329 3428 342c31481-29074 49630-71852 49630-122593m0 0z"
                                fill="#4285f4" />
                            <path
                                d="M166667 333333c44999 0 82776-14815 110370-40370l-52593-40742c-14074 9815-32963 16667-57777 16667-44074 0-81481-29073-94816-69258l-1954 166-51447 39815-673 1870c27407 54444 83704 91852 148890 91852z"
                                fill="#34a853" />
                            <path
                                d="M71851 199630c-3518-10370-5555-21482-5555-32963 0-11482 2036-22593 5370-32963l-93-2209-52091-40455-1704 811C6482 114444 1 139814 1 166666s6482 52221 17777 74814l54074-41851m0 0z"
                                fill="#fbbc04" />
                            <path
                                d="M166667 64444c31296 0 52406 13519 64444 24816l47037-45926C249260 16482 211666 1 166667 1 101481 1 45185 37408 17777 91852l53889 41853c13520-40185 50927-69260 95001-69260m0 0z"
                                fill="#ea4335" />
                        </svg> Google
                    </button>
                </div>
                <div class="flex justify-center">
                    <div class="w-full">
                        <div class="relative flex items-center py-5">
                            <div class="flex-grow border-t border-gray-500"></div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <span>Sudah mempunyai akun? <a href="{{ route('login') }}"
                            class="w-full py-3 font-semibold text-primary rounded-xl hover:underline">Masuk</a></span>
                </div>
            </form>
        </div>
    </div>

</body>

</html>

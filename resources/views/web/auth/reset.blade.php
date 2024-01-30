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
            <div
                class="flex flex-col justify-center w-full p-10 bg-white basis-1/2 rounded-t-2xl lg:rounded-l-none lg:rounded-r-2xl">
                <div class="flex justify-center">
                    <span class="pt-1 text-3xl">Reset Password</span>
                </div>

                <form action="{{ route('password.update') }}" method="POST" novalidate>
                    @csrf
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
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Masukan Password Baru</label>
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
                            <label for="passwordConfirm" class="block mb-2 text-sm font-medium text-gray-900">
                                Ulangi Password Baru</label>
                            <input type="password" id="passwordConfirm" name="password_confirmation"
                                class="focus:border-primary-500 focus:ring-primary-500 block w-full rounded-xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900"
                                value="{{ old('password_confirmation') }}" required autocomplete="new-password">
                            @error('password_confirmation')
                                <span class="text-xs font-medium text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-center pt-8">
                        <button type="submit" class="w-full py-2 text-lg text-white bg-primary rounded-xl">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                    <div class="flex justify-center">
                        <span>Belum mempunyai akun? <a href="{{ route('register') }}"
                                class="w-full py-3 font-semibold text-primary rounded-xl hover:underline">Daftar 
                                disini</a></span>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>

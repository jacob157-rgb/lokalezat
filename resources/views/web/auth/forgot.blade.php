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
            <div class="flex flex-col justify-center w-full p-10 bg-white basis-1/2 rounded-t-2xl lg:rounded-l-none lg:rounded-r-2xl">
                <div class="flex justify-center">
                    <span class="pt-1 text-3xl">Lupa Password</span>
                </div>

                <div class="flex justify-center text-center">
                    <span class="pt-4 text-gray-900">Masukan email akun Anda, kami akan mengirimkan link reset
                        password.</span>
                </div>
                <div class="flex justify-center">
                    <span class="pt-4 text-sm text-gray-600">Belum menerima email?, Cek Folder Spam atau <a href="{{ route('password.email') }}" class="font-semibold text-primary hover:underline">klik disini</a></span>
                </div>
                <form action="{{ route('password.email') }}" method="POST" novalidate>
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

                    <div class="flex justify-center pt-10">
                        <button type="submit" class="w-full py-2 text-lg text-white bg-primary rounded-xl">
                            Kirim Email
                        </button>
                    </div>
                    <div class="flex pt-5 text-center">
                        <a href="/login"
                                class="w-full py-3 text-lg font-semibold text-primary hover:underline">Masuk</a></span>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>

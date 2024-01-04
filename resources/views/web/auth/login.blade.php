    <!DOCTYPE html>
    <html lang="en">

    <head>
        @include('components.head')
    </head>

    <body class="bg-primary">
        <div class="lg:flex lg:flex-row">
            <!-- Kolom 1 (Kiri) -->
            <div class="lg:w-1/2">
                <!-- Konten untuk mode desktop -->
                <div class="hidden lg:block">
                    <!-- Isi untuk mode desktop -->
                </div>

                <!-- Konten untuk mode mobile -->
                <div class="flex flex-col justify-center items-center min-h-[30vh] lg:hidden">
                    <div>
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/logo/logo_wht.png') }}" class="w-3/5 pt-5" alt="">
                        </div>
                        <div class="flex justify-center">
                            <span class="w-2/3 text-center text-white">Temukan Informasi Kuliner lokal dengan Tepat &
                                Akurat.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom 2 (Kanan) -->
            <div class="lg:w-1/2">
                <!-- Konten untuk mode desktop -->
                <div class="hidden lg:block">
                    <!-- Isi untuk mode desktop -->
                </div>

                <!-- Konten untuk mode mobile -->
                <div class="fixed bottom-0 w-full bg-white rounded-t-3xl lg:hidden">
                    <div class="p-5">
                        <div class="flex justify-center">
                            <span class="text-xl pt-7">Sign In</span>
                        </div>
                        <form action="" method="POST">
                            @csrf
                            <div class="flex justify-center pt-5">
                                <div class="w-full">
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="email" id="email"
                                        class="focus:border-primary-500 focus:ring-primary-500 dark:focus:border-primary-500 dark:focus:ring-primary-500 block w-full rounded-xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                        required>
                                </div>
                            </div>

                            <div class="flex justify-center pt-5">
                                <div class="w-full">
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                    <input type="password" id="password"
                                        class="focus:border-primary-500 focus:ring-primary-500 dark:focus:border-primary-500 dark:focus:ring-primary-500 block w-full rounded-xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                        required>
                                </div>
                            </div>

                            <div class="flex justify-center pt-10">
                                <button type="submit"
                                    class="w-full py-2 text-lg text-white bg-primary rounded-xl">Masuk
                                    <span class="align-middle"><i class="bi bi-arrow-right-circle"></i></span></button>
                            </div>
                            <div class="flex justify-center pt-5">
                                <span>Belum Memiliki Akun? <a href="/register"
                                        class="w-full py-3 text-lg font-semibold rounded-xl">Daftar</a></span>
                            </div>
                            <div class="flex justify-center pt-5">
                                <button class="w-full py-3 text-lg rounded-xl">Lupa Password?</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </body>

    </html>

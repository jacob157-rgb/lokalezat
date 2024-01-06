<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body class="bg-primary">
    <div class="flex flex-col h-screen">
        <div class="flex flex-col items-center justify-center basis-1/2">
            <div class="flex flex-col items-center justify-center p-10 md:p-20">
                <img class="w-3/4" src="{{ asset('assets/logo/logo_wht.png') }}" alt="">
                <span class="w-full mt-4 text-center text-white">Temukan Informasi Kuliner lokal dengan Tepat &
                    Akurat.</span>
            </div>
        </div>
        <div class="flex flex-col justify-center w-full p-10 bg-white basis-1/2 rounded-t-2xl">
            <div class="flex justify-center">
                <span class="text-xl pt-7">Sign Up</span>
            </div>
            <form action="" method="POST">
                @csrf
                <div class="flex justify-center pt-5">
                    <div class="w-full">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="name"
                            class="focus:border-primary-500 focus:ring-primary-500 dark:focus:border-primary-500 dark:focus:ring-primary-500 block w-full rounded-xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                            required>
                    </div>
                </div>
                
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
                
                <div class="flex justify-center pt-5">
                    <div class="w-full">
                        <label for="passwordConfirm"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ulangi Password</label>
                        <input type="password" id="passwordConfirm"
                            class="focus:border-primary-500 focus:ring-primary-500 dark:focus:border-primary-500 dark:focus:ring-primary-500 block w-full rounded-xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                            required>
                    </div>
                </div>

                <div class="flex justify-center pt-10">
                    <button type="submit" class="w-full py-2 text-lg text-white bg-primary rounded-xl">Daftar
                        <span class="align-middle"><i class="bi bi-plus-circle"></i></span></button>
                </div>
                <div class="flex justify-center pt-5">
                    <span>Sudah Memiliki Akun? <a href="/login"
                            class="w-full py-3 text-lg font-semibold rounded-xl">Masuk</a></span>
                </div>
            </form>
        </div>
    </div>
</body>

</html>

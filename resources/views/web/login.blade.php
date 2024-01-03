<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body class="bg-primary">
    <div class="grid grid-cols-2 grid-rows-2">
        <div
            class="flex items-center justify-center order-last w-full col-span-2 bg-white h-dvh md:row-span-2 rounded-t-3xl md:order-1 md:col-span-1 md:h-screen md:rounded-l-none md:rounded-r-3xl">
            <div class="w-3/4 mx-auto lg:w-3/4">
                <div class="flex justify-center">
                    <span class="text-lg md:text-4xl pt-7 md:pt-0">Admin Login</span>
                </div>
                <form action="">
                    <div class="flex justify-center pt-5">
                        <div class="w-full">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" id="email"
                                class="focus:border-primary-500 focus:ring-primary-500 dark:focus:border-primary-500 dark:focus:ring-primary-500 block w-full rounded-3xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                required>
                        </div>
                    </div>

                    <div class="flex justify-center pt-5">
                        <div class="w-full">
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" id="password"
                                class="focus:border-primary-500 focus:ring-primary-500 dark:focus:border-primary-500 dark:focus:ring-primary-500 block w-full rounded-3xl border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                                required>
                        </div>
                    </div>

                    <div class="flex justify-center pt-5">
                        <button type="submit" class="w-full py-3 text-lg text-white bg-primary rounded-xl">Masuk <span
                                class="align-middle"><i class="bi bi-arrow-right-circle"></i></span></button>
                    </div>
                    <div class="flex justify-center pt-5">
                        <button class="w-full py-3 text-lg rounded-xl">Lupa Password?</button>
                    </div>
                </form>
            </div>
        </div>

        <div
            class="flex items-center justify-center order-2 w-full col-span-2 md:row-span-2 rounded-t-3xl md:col-span-1 md:h-screen md:rounded-l-none md:rounded-r-3xl">
            <div class="w-3/4 mx-auto lg:w-3/4">
                <div class="flex justify-center">
                    <img src="{{ asset('assets/logo/logo_wht.png') }}" class="w-9/12" alt="">
                </div>
                <div class="flex justify-center pt-5">
                    <span class="w-9/12 text-center text-white">Temukan Informasi Kuliner lokal dengan Tepat &
                        Akurat.</span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>

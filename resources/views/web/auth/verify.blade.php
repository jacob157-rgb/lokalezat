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
                <span class="pt-3 text-3xl">Verifikasi Akun</span>
            </div>

            <form action="{{ route('verification.send') }}" method="POST">
                @csrf
                <div class="flex justify-center pt-5 text-center">
                    <div class="w-full">
                        <span>Link verifikasi telah terkirim ke email “{{ auth()->user()->email }}”, Silahkan Periksa email anda Termasuk Folder Spam.</span>
                    </div>
                </div>
                
                <div class="flex justify-center pt-5 text-center">
                    <div class="w-full">
                        <span class="text-6xl text-primary"><i class="bi bi-envelope"></i></span>
                    </div>
                </div>
                
                <div class="flex justify-center pt-5 text-center">
                    <div class="w-full">
                        <span>Belum menerima email?, Cek Folder Spam atau klik tombol dibawah</span>
                    </div>
                </div>

                <div class="flex justify-center pt-10">
                    <button type="submit" id="submitButton"
                        class="w-full py-2 text-lg text-white bg-primary rounded-xl">Kirim Ulang link verifikasi
                        <span class="align-middle"><i class="bi bi-arrow-right-circle"></i></span></button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>

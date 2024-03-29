<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="shortcut icon" href="{{ asset('assets/logo/icon.png') }}" type="image/x-icon">
<title>Lokalezat</title>
{{-- Font --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
{{-- End Font --}}
{{-- Tailwind CSS --}}
@vite('resources/css/app.css')
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
{{-- End Tailwind CSS --}}
{{-- AlpineJS --}}
@vite('resources/js/app.js')
<script src="{{ asset('assets/js/scripts.js') }}"></script>
{{-- End AlpineJS --}}
{{-- Flowbite JS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
{{-- End Flowbite JS --}}
{{-- Bootstrap Icons --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
{{-- End Bootstrap Icons --}}

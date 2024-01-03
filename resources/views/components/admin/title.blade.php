@props([
    'title' => '',
])

@php
    $firstWord = explode(' ', $title)[0];
@endphp

<div class="flex content-center justify-between p-8">
    <span class="pt-1 text-xl">{{ $title }}</span>
    <button class="p-2 px-3 text-white bg-primary rounded-3xl">Tambahkan {{ $firstWord }}<i
            class="bi bi-plus-circle-fill"></i></button>
</div>

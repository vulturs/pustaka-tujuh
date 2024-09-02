<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @component('components.klasifikasi.edit-klasifikasi', ['klasifikasi' => $klasifikasi, 'title' => $title])
        {{-- <x-klasifikasi.edit-klasifikasi :$klasifikasi>

    </x-klasifikasi.edit-klasifikasi> --}}
    @endcomponent
</x-layout>

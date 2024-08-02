<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @component('components.klasifikasi.create-klasifikasii', ['title' => $title])
    @endcomponent
</x-layout>

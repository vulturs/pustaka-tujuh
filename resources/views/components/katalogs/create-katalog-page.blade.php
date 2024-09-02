<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @component('components.katalogs.create-katalog', [
        'title' => $title,
        'koleksi' => $koleksi,
    ])
    @endcomponent
</x-layout>

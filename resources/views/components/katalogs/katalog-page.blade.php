<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @component('components.katalogs.katalog', [
        'title' => $title,
        'katalog' => $katalog,
    ])
    @endcomponent
</x-layout>

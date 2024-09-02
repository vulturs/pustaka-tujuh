<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @component('components.pengembalian.pengembalian', [
        'title' => $title,
        'pengembalian' => $pengembalian,
    ])
    @endcomponent
</x-layout>

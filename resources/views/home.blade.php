<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-dashboard kunjungan="{{ $kunjungan }}" title="{{ $title }}" users="{{ $users }}"
        anggota="{{ $anggota }}" koleksi="{{ $koleksi }}">
        {{-- {{ $users }} --}}
    </x-dashboard>
</x-layout>

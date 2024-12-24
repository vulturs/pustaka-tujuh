<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @component('components.kunjungan.edit-kunjungan', [
        'kunjungan' => $kunjungan,
        'anggota' => $anggota,
        'title' => $title,
    ])
    @endcomponent
    
</x-layout>

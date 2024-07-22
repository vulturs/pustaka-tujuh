<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @component('components/kunjungan/create-kunjungan', [
        'anggota' => $anggota,
        'anggotaAll' => $anggotaAll,
        'title' => $title,
    ])
    @endcomponent
    {{-- <x-kunjungan.create-kunjungan>
    </x-kunjungan.create-kunjungan> --}}
</x-layout>

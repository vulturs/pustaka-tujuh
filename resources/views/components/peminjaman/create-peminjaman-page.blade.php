<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @component('components/peminjaman/create-peminjaman', [
        'anggotaAll' => $anggotaAll,
        'koleksiAll' => $koleksiAll,
        'title' => $title,
    ])
    @endcomponent
    {{-- <x-kunjungan.create-kunjungan>
    </x-kunjungan.create-kunjungan> --}}
</x-layout>

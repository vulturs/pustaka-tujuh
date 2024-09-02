<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @component('components.peminjaman.proses-kembali', [
        'pinjam' => $pinjam,
        'title' => $title,
        'pelanggaran' => $pelanggaran,
    ])
    @endcomponent
</x-layout>

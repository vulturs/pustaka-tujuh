<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- <x-dashboard total_kunjungan="{{ $total_kunjungan }}" bulan="{{ $bulan }}" title="{{ $title }}"
        users="{{ $users }}" anggota="{{ $anggota }}" koleksi="{{ $koleksi }}">

    </x-dashboard> --}}
    @component('components.dashboard', [
        'total_kunjungan' => $total_kunjungan,
        'kun' => $kun,
        'bulan' => $bulan,
        'title' => $title,
        'users' => $users,
        'anggota' => $anggota,
        'koleksi' => $koleksi,
        'pinjam' => $pinjam,
        'kunjung' => $kunjung,
        'katalog' => $katalog,
        'pinjamCount' => $pinjamCount,
        'data_peminjaman' => $data_peminjaman,
        'bulan_pinjam' => $bulan_pinjam,
        'seriesData' => $seriesData,
        'categories' => $categories,
    ])
    @endcomponent
</x-layout>

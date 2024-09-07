<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- <x-dashboard total_kunjungan="{{ $total_kunjungan }}" bulan="{{ $bulan }}" title="{{ $title }}"
        users="{{ $users }}" anggota="{{ $anggota }}" koleksi="{{ $koleksi }}">

    </x-dashboard> --}}
    @component('components.dashboard', [
        'kun' => $kun,
        'title' => $title,
        'users' => $users,
        'anggota' => $anggota,
        'koleksi' => $koleksi,
        'pinjam' => $pinjam,
        'kunjung' => $kunjung,
        'katalog' => $katalog,
        'pinjamCount' => $pinjamCount,
        'seriesDataPinjam' => $seriesDataPinjam,
        'categoriesPinjam' => $categoriesPinjam,
        'seriesData' => $seriesData,
        'categories' => $categories,
        'dataPinjamDdc' => $dataPinjamDdc,
        'topBooks' => $topBooks,
        'dataPinjamTop' => $dataPinjamTop,
        'availableYears' => $availableYears,
        'currentYear' => $currentYear,
    ])
    @endcomponent
</x-layout>

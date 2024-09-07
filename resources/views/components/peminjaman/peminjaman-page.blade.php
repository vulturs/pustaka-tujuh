<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <x-kunjungan.kunjungan :$kunjungan> --}}
    @component('components.peminjaman.peminjaman', ['peminjaman' => $peminjaman, 'title' => $title])
        @forelse ($peminjaman as $pinjam)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $pinjam->id_peminjaman }}
                </th>
                <td class="px-6 py-4">
                    {{ $pinjam->nama_anggota }}
                </td>
                <td class="px-6 py-4">
                    {{ $pinjam->judul_buku }}
                </td>
                <td class="px-6 py-4">
                    {{ $pinjam->pengarang }}
                </td>
                <td class="px-6 py-4">
                    {{ $pinjam->kode_ddc }}
                </td>
                <td class="px-6 py-4">
                    {{ $pinjam->tanggal_peminjaman }}
                </td>
                <td class="px-6 py-4">
                    {{ $pinjam->tanggal_pengembalian }}
                </td>
                <td class="px-6 py-4">
                    {{ $pinjam->nama }}
                </td>


                <td class="text-center">
                    <a href="{{ route('proses-pengembalian', $pinjam->id_peminjaman) }}"
                        class="text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Proses Pengembalian</a>
                </td>
            </tr>
        @empty
            <tr>
                <td class="text-center text-mute" colspan="10">Data peminjaman tidak tersedia</td>
            </tr>
        @endforelse
        {{-- </x-kunjungan.kunjungan> --}}
    @endcomponent
</x-layout>

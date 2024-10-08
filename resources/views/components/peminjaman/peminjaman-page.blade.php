<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- <x-kunjungan.kunjungan :$kunjungan> --}}
    @component('components.peminjaman.peminjaman', ['peminjaman' => $peminjaman, 'title' => $title])
        @forelse ($peminjaman as $pinjam)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>

                </td>
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


                <td>
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

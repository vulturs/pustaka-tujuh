<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @component('components/koleksi/koleksi', ['title' => $title, 'koleksi' => $koleksi])
        {{-- <x-koleksi.koleksi :$title> --}}
        @foreach ($koleksi as $collect)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $collect->kode_buku_induk }}
                </th>
                <td class="px-6 py-4">
                    {{ $collect->no_barcode }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->pengarang }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->judul_buku }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->kode_ddc }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->tahun }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->bahasa }}
                </td>

                <td class="px-6 py-4">
                    {{ $collect->nama_penerbit }}
                </td>

                <td class="px-6 text-center py-4">
                    {{ $collect->jumlah_total }}
                </td>

                <td class="px-6 text-center py-4">
                    {{ $collect->stok_tersedia }}
                </td>

                <td class="px-6 text-center py-4">
                    {{ $collect->satuan }}
                </td>

                <td class="px-6 py-4">
                    {{ $collect->nama_sumber }}
                </td>
                <td class="px-6 py-4">
                    Rp.{{ $collect->harga }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->tipe_harga }}
                </td>
                <td class="px-6 py-4">
                    @if ($collect->ketersediaan == 'Tersedia')
                        @if ($collect->stok_tersedia < $collect->jumlah_total && $collect->stok_tersedia > 0)
                            <button
                                class="text-white bg-purple-700 dark:bg-purple-700 w-full cursor-not-allowed rounded-t-md text-xs px-3 py-1.5 text-center"
                                disabled>{{ $collect->ketersediaan }}</button>
                            <button
                                class="text-black bg-purple-300 dark:bg-purple-300 w-full cursor-not-allowed rounded-b-md text-xs px-3 py-1.5 text-center"
                                disabled>Dipinjam {{ $collect->jumlah_total - $collect->stok_tersedia }}</button>
                        @elseif($collect->stok_tersedia == $collect->jumlah_total)
                            <button
                                class="text-white bg-purple-700 dark:bg-purple-700 w-full cursor-not-allowed rounded-md text-xs px-3 py-1.5 text-center"
                                disabled>{{ $collect->ketersediaan }}</button>
                        @else
                            <button
                                class="text-white bg-red-600 dark:bg-red-600 w-full cursor-not-allowed rounded-t-md text-xs px-3 py-1.5 text-center"
                                disabled>Tidak Tersedia</button>
                            <button
                                class="text-black bg-purple-300 dark:bg-purple-300 w-full cursor-not-allowed rounded-b-md text-xs px-3 py-1.5 text-center"
                                disabled>Dipinjam {{ $collect->jumlah_total - $collect->stok_tersedia }}</button>
                        @endif
                        {{-- @if ($collect->stok_tersedia != 0)
                            @if ($collect->stok_tersedia < $collect->jumlah_total)
                            @endif
                        @endif --}}
                    @else
                        <button
                            class="text-white bg-red-600 dark:bg-red-600 cursor-not-allowed w-full rounded-md text-xs px-3 py-1.5 text-center"
                            disabled>{{ $collect->ketersediaan }}</button>
                    @endif
                </td>
                <td class="px-6 py-4">
                    {{ $collect->nama }}
                </td>
                <td class="px-6 text-center py-4">
                    {{ $collect->created_at->format('d M Y') }}
                </td>
                <td class="px-6 flex py-4 justify-center">
                    <a href="{{ route('edit-koleksi', $collect->kode_buku_induk) }}" button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                    <!-- Form untuk penghapusan -->
                    <form action="{{ route('delete-koleksi', $collect->kode_buku_induk) }}" method="POST"
                        style="display:inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                    </form>
                    {{-- <button type="button" onclick="return confirm('Apakah Anda Yakin untuk menghapus?')" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button> --}}
                </td>
            </tr>
            <!-- Other table rows omitted for brevity -->
        @endforeach
        {{-- </x-koleksi.koleksi> --}}
    @endcomponent
</x-layout>

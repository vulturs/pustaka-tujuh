<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-koleksi.koleksi>
        @foreach ($koleksi as $collect)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                    </div>
                </td>
                <th scope="row"
                    class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
                {{-- <td class="px-6 py-4">
                    {{ $collect->kategori }}
                </td> --}}
                <td class="px-6 py-4">
                    {{ $collect->id_penerbit }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->jml_eks }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->jml_jld }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->nama_sumber }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->harga }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->tipe_harga }}
                </td>
                <td class="px-6 py-4">
                    {{ $collect->ketersediaan }}
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
                        style="display:inline;"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
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
    </x-koleksi.koleksi>
</x-layout>

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
                    {{ \Carbon\Carbon::parse($pinjam->tanggal_peminjaman)->format('d M Y') }}
                    {{-- {{ $pinjam->tanggal_peminjaman->format('d M Y') }} --}}
                </td>
                <td class="px-6 py-4">
                    {{ \Carbon\Carbon::parse($pinjam->batas_pengembalian)->format('d M Y') }}
                    {{-- {{ $pinjam->batas_pengembalian }} --}}
                </td>
                <td class="px-6 py-4">
                    {{ $pinjam->nama }}
                </td>


                <td class="text-center w-64">
                    <a href="{{ route('proses-pengembalian', $pinjam->id_peminjaman) }}"
                        class="text-violet-700 bg-violet-300 transition duration-300 ease-in-out hover:text-white hover:bg-violet-700 hover:shadow-xl hover:shadow-violet-500 focus:ring-violet-300 focus:shadow-violet-400 font-medium rounded-full text-xs px-4 py-3 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Proses Pengembalian</a>
                </td>
                <td class="text-center">
                    <div class="flex">
                        <a href="{{ route('edit-peminjaman', $pinjam->id_peminjaman) }}" button type="button"
                            class="text-white text-xs bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:ring-violet-300 font-medium rounded-lg px-5 py-2.5 me-2 mb-2 dark:bg-violet-600 dark:hover:bg-violet-700 focus:outline-none dark:focus:ring-violet-800">Edit</a>
                        <form action="{{ route('delete-peminjaman', $pinjam->id_peminjaman) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-xs px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus</button>
                        </form>
                    </div>
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

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-anggota.anggota :$anggota :$title>
        @forelse ($anggota as $anggotas)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $anggotas->id_anggota }}
                </th>
                <td class="px-6 py-4">
                    {{ $anggotas->nama_anggota }}
                </td>
                <td class="px-6 py-4">
                    {{ $anggotas->kelas }}
                </td>
                <td class="px-6 py-4">
                    {{ $anggotas->tanggal_masuk }}
                </td>
                <td class="px-6 py-4">
                    {{ $anggotas->keterangan }}
                </td>
                <td class="px-6 py-4">
                    {{ $anggotas->nama }}
                </td>

                <td class="px-6 flex py-4 justify-center">
                    <a href="{{ route('edit-anggota', $anggotas->id_anggota) }}" button type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Edit</a>
                    <!-- Form untuk penghapusan -->
                    <form action="{{ route('delete-anggota', $anggotas->id_anggota) }}" method="POST"
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
        @empty
            <tr>
                <td class="text-center text-mute" colspan="4">Data user tidak tersedia</td>
            </tr>
        @endforelse
    </x-anggota.anggota>
</x-layout>

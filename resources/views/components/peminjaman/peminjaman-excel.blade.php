<table border="1" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                ID Peminjaman
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Nama Anggota
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Judul Buku
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black; word-wrap: normal;" class="px-6 py-3">
                Pengarang
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Kode DDC
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Tanggal Peminjaman
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Batas Pengembalian
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Pendataan Oleh
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($peminjaman as $pinjam)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th width="20" valign="center" style="border: 1px solid black; font-size: 12px" align="center" height="24"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $pinjam->id_peminjaman }}
                </th>
                <td width="25" valign="center" style="border: 1px solid black; font-size: 12px" height="24" class="px-6 py-4">
                    {{ $pinjam->nama_anggota }}
                </td>
                <td width="30" valign="center" style="border: 1px solid black; font-size: 12px" height="24" class="px-6 py-4">
                    {{ $pinjam->judul_buku }}
                </td>
                <th width="20" scope="row" valign="center" style="border: 1px solid black; font-size: 12px"
                    align="center" height="24" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $pinjam->pengarang }}
                </th>
                <th width="20" scope="row" valign="center" style="border: 1px solid black; font-size: 12px"
                    align="center" height="24" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $pinjam->kode_ddc }}
                </th>
                <td width="20" align="center" valign="center" style="border: 1px solid black; font-size: 12px" height="24" class="px-6 py-4">
                    {{ \Carbon\Carbon::parse($pinjam->tanggal_peminjaman)->format('d M Y') }}
                </td>
                <td width="20" align="center" valign="center" style="border: 1px solid black; font-size: 12px" height="24" class="px-6 py-4">
                    {{ \Carbon\Carbon::parse($pinjam->tanggal_pengembalian)->format('d M Y') }}
                </td>
                <td width="20" align="center" valign="center" style="border: 1px solid black; font-size: 12px" height="24" class="px-6 py-4">
                    {{ $pinjam->nama }}
                </td>
            </tr>
        @empty
            <tr>
                <td class="text-center text-mute" colspan="11">Data peminjaman tidak tersedia</td>
            </tr>
        @endforelse
    </tbody>
</table>

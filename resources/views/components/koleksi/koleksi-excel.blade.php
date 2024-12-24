<table border="1" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black; word-wrap: normal;" class="px-6 py-3">
                Kode Buku Induk
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                No Barcode
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Pengarang
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Judul Buku
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Kode DDC
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Tahun
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Bahasa
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Penerbit
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Jumlah Total
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Stok Tersedia
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Satuan
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Perolehan
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Harga
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Harga Per/
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Ketersediaan
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Pendataan Oleh
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Waktu Pendataan
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $collect)
            <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" width="15" valign="center" style="border: 1px solid black; font-size: 12px"
                    align="center" height="24"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $collect->kode_buku_induk }}
                </th>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    align="center" class="px-6 py-4">
                    {{ $collect->no_barcode }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $collect->pengarang }}
                </td>
                <td width="40" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $collect->judul_buku }}
                </td>
                <td width="30" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $collect->kode_ddc }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $collect->tahun }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $collect->bahasa }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $collect->nama_penerbit }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    align="center" class="px-6 py-4">
                    {{ $collect->jumlah_total }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    align="center" class="px-6 py-4">
                    {{ $collect->stok_tersedia }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    align="center" class="px-6 py-4">
                    {{ $collect->satuan }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $collect->nama_sumber }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $collect->harga }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $collect->tipe_harga }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $collect->ketersediaan }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $collect->nama }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{-- {{ $collect->created_at }} --}}
                    {{ \Carbon\Carbon::parse($collect->created_at)->format('d M Y, H:i') }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<table border="1" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black; word-wrap: normal;" class="px-6 py-3">
                ID Anggota
            </th>
                <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Nama Anggota
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Kelas
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Tanggal Masuk
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Keterangan
            </th>
            <th align="center" bgcolor="lightblue" valign="center" scope="col" height="24"
                style="font-weight: 600; font-size:12px; border: 1px solid black" class="px-6 py-3">
                Pendataan Oleh
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($anggota as $anggotas)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" width="15" valign="center" style="border: 1px solid black; font-size: 12px"
                    align="center" height="24"
                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $anggotas->id_anggota }}
                </th>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $anggotas->nama_anggota }}
                </td>
                <td width="40" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $anggotas->kelas }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    align="center" class="px-6 py-4">
                    {{ \Carbon\Carbon::parse($anggotas->tanggal_masuk)->format('d M Y') }}
                </td>
                <td width="30" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $anggotas->keterangan }}
                </td>
                <td width="20" valign="center" style="border: 1px solid black; font-size: 12px" height="24"
                    class="px-6 py-4">
                    {{ $anggotas->nama }}
                </td>
            </tr>
        @empty
            <tr>
                <td class="text-center text-mute" colspan="10">Data kunjungan tidak tersedia</td>
            </tr>
        @endforelse
    </tbody>
</table>

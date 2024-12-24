<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    {{-- <link rel="stylesheet" href="{{ asset('css/flowbite.min.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="css/select2.min.css"> --}}
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body class="font-body">
    <h1 align="center">Data Koleksi<br><span style="font-size: 1.2rem">({{ now()->format('d F Y') }})</span></h1>
    <table border="1" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-0 text-center py-3">
                    Kode Buku Induk
                </th>
                <th scope="col" class="px-6 py-3">
                    No Barcode
                </th>
                <th scope="col" class="px-6 py-3">
                    Pengarang
                </th>
                <th scope="col" class="px-6 py-3">
                    Judul Buku
                </th>
                <th scope="col" class="px-6 py-3">
                    Kode DDC
                </th>
                <th scope="col" class="px-6 py-3">
                    Tahun
                </th>
                <th scope="col" class="px-6 text-center py-3">
                    Bahasa
                </th>
                {{-- <th scope="col" class="px-6 text-center py-3">
                        Kategori
                    </th> --}}
                <th scope="col" class="px-6 py-3">
                    Penerbit
                </th>
                <th scope="col" class="px-6 text-center py-3">
                    Jumlah Total
                </th>
                <th scope="col" class="px-6 text-center py-3">
                    Stok Tersedia
                </th>
                <th scope="col" class="px-6 text-center py-3">
                    Satuan
                </th>
                <th scope="col" class="px-6 text-center py-3">
                    Perolehan
                </th>
                <th scope="col" class="px-6 text-center py-3">
                    Harga
                </th>
                <th scope="col" class="px-6 text-center py-3">
                    Harga Per/
                </th>
                <th scope="col" class="px-6 text-center py-3">
                    Ketersediaan
                </th>
                <th scope="col" class="px-6 text-center py-3">
                    pendataan Oleh
                </th>
                <th scope="col" class="px-6 text-center py-3">
                    Waktu Pendataan
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $datas)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row"
                        class="px-6 py-4 text-center font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $datas->kode_buku_induk }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $datas->no_barcode }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $datas->pengarang }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $datas->judul_buku }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $datas->kode_ddc }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $datas->tahun }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $datas->bahasa }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $datas->nama_penerbit }}
                    </td>

                    <td class="px-6 text-center py-4">
                        {{ $datas->jumlah_total }}
                    </td>

                    <td class="px-6 text-center py-4">
                        {{ $datas->stok_tersedia }}
                    </td>

                    <td class="px-6 text-center py-4">
                        {{ $datas->satuan }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $datas->nama_sumber }}
                    </td>
                    <td class="px-6 py-4">
                        Rp.{{ $datas->harga }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $datas->tipe_harga }}
                    </td>
                    <td align="center" class="px-6 py-4">
                        @if ($datas->ketersediaan == 'Tersedia')
                            @if ($datas->stok_tersedia < $datas->jumlah_total && $datas->stok_tersedia > 0)
                                <button
                                    class="text-white bg-purple-700 dark:bg-purple-700 w-full cursor-not-allowed rounded-t-md text-xs px-3 py-1.5 text-center"
                                    disabled>{{ $datas->ketersediaan }}</button>
                                <button
                                    class="text-black bg-purple-300 dark:bg-purple-300 w-full cursor-not-allowed rounded-b-md text-xs px-3 py-1.5 text-center"
                                    disabled>Dipinjam {{ $datas->jumlah_total - $datas->stok_tersedia }}</button>
                            @elseif($datas->stok_tersedia == $datas->jumlah_total)
                                <button
                                    class="text-white bg-purple-700 dark:bg-purple-700 w-full cursor-not-allowed rounded-md text-xs px-3 py-1.5 text-center"
                                    disabled>{{ $datas->ketersediaan }}</button>
                            @else
                                <button
                                    class="text-white bg-red-600 dark:bg-red-600 w-full cursor-not-allowed rounded-t-md text-xs px-3 py-1.5 text-center"
                                    disabled>Tidak Tersedia</button>
                                <button
                                    class="text-black bg-purple-300 dark:bg-purple-300 w-full cursor-not-allowed rounded-b-md text-xs px-3 py-1.5 text-center"
                                    disabled>Dipinjam {{ $datas->jumlah_total - $datas->stok_tersedia }}</button>
                            @endif
                            {{-- @if ($datas->stok_tersedia != 0)
                            @if ($datas->stok_tersedia < $datas->jumlah_total)
                            @endif
                        @endif --}}
                        @else
                            <button
                                class="text-white bg-red-600 dark:bg-red-600 cursor-not-allowed w-full rounded-md text-xs px-3 py-1.5 text-center"
                                disabled>{{ $datas->ketersediaan }}</button>
                        @endif
                    </td>
                    <td class="px-6 py-4">
                        {{ $datas->nama }}
                    </td>
                    <td class="px-6 text-center py-4">
                        {{ $datas->created_at->format('d M Y') }}
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center text-mute" colspan="10">Data kunjungan tidak tersedia</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>

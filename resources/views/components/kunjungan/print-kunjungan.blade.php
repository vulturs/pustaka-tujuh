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
    <h1 align="center">Data Kunjungan<br><span style="font-size: 1.2rem">({{ now()->format('d F Y') }})</span></h1>
    <table border="1" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID Kunjungan
                </th>
                <th scope="col" class="px-6 py-3">
                    Tanggal Kunjungan
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Anggota
                </th>
                <th scope="col" class="px-6 py-3">
                    Kelas
                </th>
                <th scope="col" class="px-6 py-3">
                    Keterangan
                </th>
                <th scope="col" class="px-6 py-3">
                    Pendataan Oleh
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $datas)
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $datas->id_kunjungan }}
                    </th>
                    <td align="center" class="px-6 py-4">
                        {{ \Carbon\Carbon::parse($datas->kunjungan_created_at)->format('d M Y, H:i') }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $datas->nama_anggota }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $datas->kelas }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $datas->tujuan_kunjungan }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $datas->nama }}
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

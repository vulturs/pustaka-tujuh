<x-topbar :$title></x-topbar>

<?php date_default_timezone_set('Asia/Jakarta'); ?>
{{-- @if (session('success'))
    <div class="w-full">
        <div id="alert-3"
            class="bg-green-100 dark:bg-green-900 border-l-4 border-green-500 dark:border-green-700 text-green-900 dark:text-green-100 p-2 py-3 rounded-lg flex items-center transition duration-300 ease-in-out hover:bg-green-200 dark:hover:bg-green-800"
            role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    </div>
@endif --}}

<div class="rounded-2xl bg-slate-100 p-5 mb-4">
    <div class="grid row-span-2 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 mb-4">

        <div class="card-cust work">
            <div class="card-cust2-purple rounded-xl bg-deep-purple-600 shadow-fit" style=":after:background:#4527A0;">
                <div class="p-5">
                    <div class="flex w-full justify-between">
                        <div class="bg-deep-purple-800 w-fit rounded-xl my-2 mb-3 ms-1 p-3 py-2 pt-3">
                            <span class="material-symbols-rounded text-white">
                                assignment_ind
                            </span>
                        </div>
                        <span class="material-symbols-rounded z-40 mt-2 text-white">
                            <a href="{{ route('koleksi') }}"
                                class="bg-deep-purple-500 hover:bg-purple-600 transition-all ease-linear p-2 rounded-lg">
                                double_arrow
                            </a>
                        </span>

                    </div>
                    <span class="text-3xl font-semibold text-white ps-2">{{ $koleksi }} Koleksi</span>
                    <p class="ps-2 py-1 text-blue-200">Data Koleksi</p>
                </div>
            </div>
        </div>

        <div class="card-cust work">
            <div class="card-cust2 rounded-xl shadow-fit bg-blue-500 before:bg-blue-600 after:bg-blue-700">
                <div class="p-5">
                    <div class="flex w-full justify-between">
                        <div class="bg-blue-700 w-fit rounded-xl my-2 mb-3 ms-1 p-3 py-2 pt-3">
                            <span class="material-symbols-rounded text-white">
                                collections_bookmark
                            </span>
                        </div>
                        <span class="material-symbols-rounded z-40 mt-2 text-white">
                            <a href="{{ route('anggota') }}"
                                class="bg-blue-500 p-2 hover:bg-blue-400 transition-all ease-linear rounded-lg">
                                double_arrow
                            </a>
                        </span>

                    </div>
                    <span class="text-3xl font-semibold text-white ps-2">{{ $anggota }} Anggota</span>
                    <p class="ps-2 py-1 text-deep-purple-200">Data Anggota</p>
                </div>
            </div>
        </div>

        <div class="grid rows-span-2 gap-3">
            <div class="card-cust work">
                <div class="card-cust2 cursor-default rounded-xl bg-blue-300 before:bg-blue-300 after:bg-orange-200">
                    <div class="p-1 px-3">
                        <div class="flex w-full items-center justify-between">
                            <div class="flex items-center justify-between w-full">
                                <div class="bg-blue-400 w-fit rounded-xl my-2 mb-3 ms-1 p-3 py-2 pt-3">
                                    <span class="material-symbols-rounded text-white">
                                        calendar_month
                                    </span>
                                </div>
                                <span class="text-3xl ms-2 z-40 font-semibold text-blue-900 ps-2">
                                    {{ date_format(now(), 'H:i') }}
                                    {{-- <i class="text-sm">.WIB</i> --}}
                                </span>
                                {{-- <span>{{ date_format(now(), 'l') }}</span> --}}
                                <span class="z-40 text-blue-900 font-medium">{{ date_format(now(), 'l, F d Y') }}</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card-cust work">
                <div class="card-cust2 rounded-xl shadow-fit bg-white before:bg-blue-100 after:bg-blue-200">
                    <div class="p-1 px-3">
                        <div class="flex w-full items-center justify-between">
                            <div class="flex items-center">
                                <div class="bg-blue-400 w-fit rounded-xl my-2 mb-3 ms-1 p-3 py-2 pt-3">
                                    <span class="material-symbols-rounded z-40 text-white">
                                        manage_accounts
                                    </span>
                                </div>
                                <div class="flex flex-col">
                                    <span
                                        class="text-2xl ms-2 z-40 font-semibold text-blue-900 ps-2">{{ $katalog }}
                                        Katalog</span>
                                    <span class="ms-4 text-sm text-blue-300">Data Katalog</span>
                                </div>
                            </div>
                            <span class="material-symbols-rounded z-40 text-white">
                                <a href="/katalog"
                                    class="bg-blue-500 hover:bg-blue-300 transition-all ease-linear p-2 rounded-lg">
                                    double_arrow
                                </a>
                            </span>

                        </div>
                        {{-- <p class="ps-2 text-blue-200">Data Koleksi</p> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-3 gap-5 mb-4">

        {{-- Grafik --}}
        <div class="w-full col-span-2 bg-white drop-shadow-lg rounded-3xl dark:bg-gray-800 p-4 md:p-6">
            <h3 class="text-xl font-semibold mb-2">Data Kunjungan</h3>
            <div class="flex">
                <h5 id="kun-value" class="leading-none text-3xl font-bold text-gray-900 dark:text-white pe-2">
                    {{ $kun }}</h5>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">pengunjung</p>
            </div>

            {{-- Charts --}}
            <div id="chart"></div>

            <div class="grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                <div class="flex justify-between items-center pt-5">
                    <!-- Button -->
                    <button id="dropdownPengunjung" data-dropdown-toggle="lastDaysdropdownPengunjung"
                        data-dropdown-placement="top"
                        class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                        type="button">
                        1 Bulan Lalu
                        <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="lastDaysdropdownPengunjung"
                        class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg drop-shadow-md dark:bg-gray-700">
                        <ul class="py-2 w-full text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownPengunjung">
                            <li>
                                <button onclick="filterData('7-days', '1 Minggu Lalu')"
                                    class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    1 Minggu Lalu</button>
                            </li>
                            <li>
                                <button onclick="filterData('30-days', '1 Bulan Lalu')"
                                    class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    1 Bulan Lalu</button>
                            </li>
                            <li>
                                <button onclick="filterData('180-days', '6 Bulan Lalu')"
                                    class="block w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    6 Bulan Lalu</button>
                            </li>
                        </ul>
                    </div>
                    <a href="#"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500 hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                        Report
                        <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
        {{-- End Grafik --}}

        {{-- Pengunjung --}}

        <div class="grid-cols-1">
            <div class="e-card bg-blue-200 playing drop-shadow-lg rounded-3xl">
                <div class="image"></div>

                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>


                <div class="relative font-semibold text-white text-xl w-full">
                    <div class="pl-6 p-6 pt-6">
                        Daftar Pengunjung
                        <div class="text-sm font-extralight">Klik lihat detail untuk melihat data lengkap</div>
                    </div>
                    <div class="bg-white max-h-96 overflow-y-auto rounded-2xl shadow-sm">
                        <table style="font-size: .8rem; line-height:1rem;"
                            class="mx-4 mt-2 mb-7 text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead style="font-size: .7rem;"
                                class="sticky top-0 border-b bg-white border-slate-300 text-center text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Anggota
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kelas
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal Kunjungan
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kunjung as $kunjungs)
                                    <tr
                                        class="border-b border-slate-200 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="px-6 py-3">
                                            {{ $kunjungs->nama_anggota }}
                                        </td>
                                        <td class="px-6 py-3">
                                            {{ $kunjungs->kelas }}
                                        </td>
                                        <td class="px-6 py-3">
                                            {{ $kunjungs->created_at->format('d M Y') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center text-mute" colspan="4">Data peminjaman tidak
                                            tersedia</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="bg-transparent fixed z-20 w-full bottom-0">
                            <div class="bg-gradient-to-b text-transparent from-transparent to-white py-2 w-full">
                                a
                            </div>
                            <a href="/kunjungan"
                                class="flex bg-white py-3 border border-t-slate-200 items-center text-sm text-purple-600 hover:text-purple-400 w-full justify-center">Lihat
                                Detail
                                <span class="material-symbols-rounded p-0 m-0">
                                    double_arrow
                                </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Pengunjung --}}
    </div>

    <div class="grid lg:grid-cols-3 sm:grid-cols-2 gap-5 mb-4">

        <div class="grid grid-cols-3 col-span-2 gap-4 bg-white p-6 drop-shadow-lg rounded-3xl">
            <!-- Grafik -->
            <div
                class="w-full col-span-2 border border-purple-500 drop-shadow-xl bg-gradient-to-tr from-purple-900 to-slate-800 rounded-2xl p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-2xl font-bold text-white">Grafik Peminjaman</h3>
                    <button id="dropdownPeminjaman" data-dropdown-toggle="lastDaysdropdownPeminjaman"
                        data-dropdown-placement="bottom"
                        class="text-sm font-medium text-purple-300 hover:text-purple-100 inline-flex items-center transition-all duration-300"
                        type="button">
                        1 Bulan Lalu
                        <span class="material-symbols-rounded text-purple-200">keyboard_arrow_down</span>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="lastDaysdropdownPeminjaman"
                        class="z-20 hidden bg-purple-50 divide-y divide-purple-100 rounded-lg shadow-xl">
                        <ul class="py-2 w-full text-sm text-gray-700">
                            <li>
                                <button onclick="filterDataPinjam('7-days-pinjam', '1 Minggu Lalu')"
                                    class="block w-full px-4 py-2 hover:bg-purple-100 text-purple-700">
                                    1 Minggu Lalu</button>
                            </li>
                            <li>
                                <button onclick="filterDataPinjam('30-days-pinjam', '1 Bulan Lalu')"
                                    class="block w-full px-4 py-2 hover:bg-purple-100 text-purple-700">
                                    1 Bulan Lalu</button>
                            </li>
                            <li>
                                <button onclick="filterDataPinjam('180-days-pinjam', '6 Bulan Lalu')"
                                    class="block w-full px-4 py-2 hover:bg-purple-100 text-purple-700">
                                    6 Bulan Lalu</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="chart-peminjam"></div>
            </div>
            <!-- End Grafik -->
            <div class="p-2 col-span-1 bg-white dark:bg-gray-800 rounded-2xl shadow-lg">
                <h3 class="text-2xl font-bold text-purple-900 dark:text-purple-400 mb-4">
                    Data Peminjaman
                </h3>
                <span id="filterLabel" class="block text-sm text-gray-600 dark:text-gray-400 mb-2">
                    1 Bulan Lalu
                </span>
                <ul class="mt-4 space-y-3" id="dataPeminjamanList">
                    <?php if (!empty($seriesDataPinjam)): ?>
                    <?php foreach ($seriesDataPinjam as $jurusan => $data): ?>
                    <li
                        class="flex justify-between items-center p-2 bg-gray-50 dark:bg-gray-700 rounded-lg shadow-md hover:bg-gray-100 dark:hover:bg-gray-600 transition-all duration-200">
                        <span class="text-md font-medium text-gray-800 dark:text-gray-300">
                            <?= htmlspecialchars($jurusan) ?>
                        </span>
                        <span class="text-lg font-semibold text-purple-900 dark:text-purple-300">
                            <?= htmlspecialchars(array_sum($data)) ?>
                        </span>
                    </li>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <li class="text-center text-gray-600 dark:text-gray-400">
                        Data peminjaman tidak tersedia.
                    </li>
                    <?php endif; ?>
                </ul>
            </div>

        </div>

        <div class="bg-white rounded-3xl shadow-lg p-6">
            <div class="text-center mb-4">
                <h3
                    class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-purple-900 to-purple-500 uppercase tracking-widest">
                    Top 5 Buku
                </h3>
                <p class="text-gray-600 text-sm">Tahun {{ $currentYear }}</p>
            </div>

            <form method="GET" action="{{ route('home') }}" class="flex justify-center my-2">
                <select name="year" id="year" onchange="this.form.submit()"
                    class="bg-purple-50 text-gray-700 text-md rounded-lg px-4 py-2 border border-purple-300 focus:ring-2 focus:ring-purple-500 transition ease-in-out duration-200">
                    @foreach ($availableYears as $year)
                        <option value="{{ $year }}" {{ $year == $currentYear ? 'selected' : '' }}>
                            {{ $year }}
                        </option>
                    @endforeach
                </select>
            </form>

            <div class="space-y-3">
                @foreach ($topBooks as $book)
                    <div
                        class="flex items-center justify-between bg-purple-50 p-3 rounded-xl shadow hover:shadow-md transition-shadow duration-300">
                        <div class="flex items-center space-x-4">
                            <span
                                class="material-symbols-rounded text-3xl text-white bg-gradient-to-tr from-purple-700 to-purple-500 p-3 rounded-full">
                                collections_bookmark
                            </span>
                            <div class="text-md font-medium text-purple-800">
                                {{ $book->judul_buku }}
                            </div>
                        </div>
                        <span class="text-lg font-bold text-purple-600">{{ $book->total_peminjaman }}</span>
                    </div>
                @endforeach
            </div>
        </div>


    </div>
    <div class="grid lg:grid-cols-3 gap-5">
        <div class="bg-white col-span-1  rounded-2xl p-5 drop-shadow-lg">

        </div>
        <div class="bg-white col-span-2 rounded-2xl p-5 drop-shadow-lg">
            <div class="items-center">
                <!-- Dropdown untuk filter tahun -->
                <label for="filterTahun" class="font-medium">Pilih Tahun :</label>
                <select id="filterTahun" class="form-select">
                    @foreach (range(date('Y'), date('Y') - 10) as $tahun)
                        <option value="{{ $tahun }}" {{ $tahun == date('Y') ? 'selected' : '' }}>
                            {{ $tahun }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Elemen untuk menampilkan grafik -->
            <div id="chart-ddc"></div>
        </div>

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="https://code.highcharts.com/highcharts.js"></script> --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle visibility for Data Peminjaman dropdown
        document.querySelector('[data-dropdown-toggle="lastDaysdropdownPeminjaman"]').addEventListener('click',
            function() {
                var dropdown = document.getElementById('lastDaysdropdownPeminjaman');
                dropdown.classList.toggle('hidden');
            });

        // Toggle visibility for Pengunjung dropdown
        document.querySelector('[data-dropdown-toggle="lastDaysdropdownPengunjung"]').addEventListener('click',
            function() {
                var dropdown = document.getElementById('lastDaysdropdownPengunjung');
                dropdown.classList.toggle('hidden');
            });

        // Close dropdowns if clicking outside
        document.addEventListener('click', function(event) {
            var isClickInsidePeminjaman = document.getElementById('dropdownPeminjaman').contains(event
                .target);
            var isClickInsidePengunjung = document.getElementById('dropdownPengunjung').contains(event
                .target);

            if (!isClickInsidePeminjaman) {
                document.getElementById('lastDaysdropdownPeminjaman').classList.add('hidden');
            }
            if (!isClickInsidePengunjung) {
                document.getElementById('lastDaysdropdownPengunjung').classList.add('hidden');
            }
        });

        // Data yang dikirim dari controller
        var dataPinjamDdc = @json($dataPinjamDdc);

        var optionsDdc = {
            chart: {
                type: 'bar', // Ubah sesuai dengan jenis grafik yang diinginkan
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: true
            },
            xaxis: {
                type: 'categories',
                categories: dataPinjamDdc.xaxis,
                title: {
                    text: 'Jurusan'
                }
            },
            yaxis: {
                title: {
                    text: 'Jumlah Peminjaman'
                }
            },
            series: dataPinjamDdc.series,
            fill: {
                opacity: 1
            },
            legend: {
                position: 'top',
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart-ddc"), optionsDdc);
        chart.render();
    });



    //JS pengunjung
    var seriesData = <?= json_encode($seriesData) ?>;
    var categories = <?= json_encode($categories) ?>;

    var colors = ['#673AB7', '#FF5722', '#4CAF50', '#FFC107', '#009688'];

    function formatTanggal(tanggal) {
        var dateObj = new Date(tanggal);
        var options = {
            day: '2-digit',
            month: 'short',
            year: 'numeric'
        };
        return dateObj.toLocaleDateString('id-ID', options);
    }

    var formattedBulan = categories.map(formatTanggal);

    var chart;

    function filterData(period, label) {
        var now = new Date();
        var filteredSeries = {};
        var filteredBulan = [];

        if (period === '7-days') {
            var sevenDaysAgo = new Date(now.setDate(now.getDate() - 7));
            filteredBulan = categories.filter(function(date) {
                return new Date(date) >= sevenDaysAgo;
            });
        } else if (period === '30-days') {
            var thirtyDaysAgo = new Date(now.setMonth(now.getMonth() - 1));
            filteredBulan = categories.filter(function(date) {
                return new Date(date) >= thirtyDaysAgo;
            });
        } else if (period === '180-days') {
            var sixMonthsAgo = new Date(now.setMonth(now.getMonth() - 6));
            filteredBulan = categories.filter(function(date) {
                return new Date(date) >= sixMonthsAgo;
            });
        }

        // Filter data untuk setiap jurusan berdasarkan tanggal yang difilter
        Object.keys(seriesData).forEach(function(jurusan) {
            filteredSeries[jurusan] = seriesData[jurusan].slice(-filteredBulan.length);
        });

        // Hitung nilai maksimum dan minimum dari data yang difilter
        var allData = Object.values(filteredSeries).flat();
        var minValue = Math.min(...allData);
        var maxValue = Math.max(...allData);

        var tickAmount = Math.ceil((maxValue - minValue) / 10);
        var adjustedMax = Math.ceil(maxValue / tickAmount) * tickAmount;

        // Update chart dengan data yang telah difilter
        var chartSeries = Object.keys(filteredSeries).map(function(jurusan, index) {
            return {
                name: jurusan,
                data: filteredSeries[jurusan],
                color: colors[index % colors.length]
            };
        });

        chart.updateOptions({
            series: chartSeries,
            xaxis: {
                categories: filteredBulan.map(formatTanggal)
            },
            yaxis: {
                min: Math.floor(minValue / tickAmount) * tickAmount,
                max: adjustedMax,
                tickAmount: (adjustedMax - Math.floor(minValue / tickAmount) * tickAmount) / tickAmount,
                labels: {
                    formatter: function(value) {
                        return Math.round(value);
                    }
                }
            }
        });

        document.getElementById('dropdownPengunjung').innerHTML = label +
            `<svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
    </svg>`;
    }

    function initChart() {
        var thirtyDaysAgo = new Date();
        thirtyDaysAgo.setMonth(thirtyDaysAgo.getMonth() - 1);

        var filteredBulan = categories.filter(function(date) {
            return new Date(date) >= thirtyDaysAgo;
        });

        // Filter data untuk setiap jurusan berdasarkan tanggal yang difilter
        var filteredSeries = {};
        Object.keys(seriesData).forEach(function(jurusan) {
            filteredSeries[jurusan] = seriesData[jurusan].slice(-filteredBulan.length);
        });

        // Hitung nilai maksimum dan minimum dari data yang difilter
        var allData = Object.values(filteredSeries).flat();
        var minValue = Math.min(...allData);
        var maxValue = Math.max(...allData);

        // Tentukan interval tick yang sesuai
        var tickAmount = Math.ceil((maxValue - minValue) / 10);
        var adjustedMax = Math.ceil(maxValue / tickAmount) * tickAmount;

        var chartSeries = Object.keys(filteredSeries).map(function(jurusan, index) {
            return {
                name: jurusan,
                data: filteredSeries[jurusan],
                color: colors[index % colors.length]
            };
        });

        var optionsPengunjung = {
            chart: {
                height: 300,
                type: "bar",
                events: {
                    mounted: function(chartContext, config) {
                        let bars = document.querySelectorAll(
                            '.apexcharts-bar-area .apexcharts-bar-series .apexcharts-bar');
                        bars.forEach(function(bar) {
                            bar.style.filter =
                                "drop-shadow(0 0 10px rgba(103, 58, 183, 0.5))"; // Efek glow purple
                        });
                    }
                }
            },
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    columnWidth: '90%'
                }
            },
            dataLabels: {
                enabled: false
            },
            series: chartSeries,
            xaxis: {
                type: 'categories',
                categories: filteredBulan.map(formatTanggal),
                labels: {
                    formatter: function(value) {
                        return value;
                    }
                }
            },
            yaxis: {
                min: Math.floor(minValue / tickAmount) * tickAmount,
                max: adjustedMax,
                tickAmount: (adjustedMax - Math.floor(minValue / tickAmount) * tickAmount) / tickAmount,
                labels: {
                    formatter: function(value) {
                        return Math.round(value);
                    }
                }
            }
        };

        chart = new ApexCharts(document.querySelector("#chart"), optionsPengunjung);
        chart.render();
    }

    // Inisialisasi chart
    initChart();


    //Grafik Peminjaman
    var seriesDataPinjam = <?= json_encode($seriesDataPinjam) ?>;
    var bulanPinjam = <?= json_encode($categoriesPinjam) ?>;

    var colorsPinjam = ['#f71e99', '#FF5722', '#4CAF50', '#FFC107', '#009688'];

    function formatTanggal(tanggal) {
        var dateObj = new Date(tanggal);
        var options = {
            day: '2-digit',
            month: 'short',
            year: 'numeric'
        };
        return dateObj.toLocaleDateString('id-ID', options);
    }

    var formattedBulanPinjam = bulanPinjam.map(formatTanggal);

    var chartPinjam;

    function filterDataPinjam(period, label) {
        var now = new Date();
        var filteredSeriesPinjam = {};
        var filteredBulanPinjam = [];

        if (period === '7-days-pinjam') {
            var sevenDaysAgo = new Date(now.setDate(now.getDate() - 7));
            filteredBulanPinjam = bulanPinjam.filter(function(date) {
                return new Date(date) >= sevenDaysAgo;
            });
        } else if (period === '30-days-pinjam') {
            var thirtyDaysAgo = new Date(now.setMonth(now.getMonth() - 1));
            filteredBulanPinjam = bulanPinjam.filter(function(date) {
                return new Date(date) >= thirtyDaysAgo;
            });
        } else if (period === '180-days-pinjam') {
            var sixMonthsAgo = new Date(now.setMonth(now.getMonth() - 6));
            filteredBulanPinjam = bulanPinjam.filter(function(date) {
                return new Date(date) >= sixMonthsAgo;
            });
        }

        // Filter data untuk setiap jurusan berdasarkan tanggal yang difilter
        Object.keys(seriesDataPinjam).forEach(function(jurusan) {
            filteredSeriesPinjam[jurusan] = seriesDataPinjam[jurusan].slice(-filteredBulanPinjam.length);
        });

        // Hitung nilai maksimum dan minimum dari data yang difilter
        var allData = Object.values(filteredSeriesPinjam).flat();
        var minValue = Math.min(...allData);
        var maxValue = Math.max(...allData);

        var tickAmount = Math.ceil((maxValue - minValue) / 10);
        var adjustedMax = Math.ceil(maxValue / tickAmount) * tickAmount;

        // Update chartPinjam dengan data yang telah difilter
        var chartPinjamSeries = Object.keys(filteredSeriesPinjam).map(function(jurusan, index) {
            return {
                name: jurusan,
                data: filteredSeriesPinjam[jurusan],
                color: colorsPinjam[index % colorsPinjam.length]
            };
        });

        chartPinjam.updateOptions({
            series: chartPinjamSeries,
            xaxis: {
                type: 'categories',
                categories: filteredBulanPinjam.map(formatTanggal),
                labels: {
                    style: {
                        colors: '#FFFFFF' // Warna putih untuk label x-axis
                    },
                    formatter: function(value) {
                        return value;
                    }
                },
            },
            yaxis: {
                min: Math.floor(minValue / tickAmount) * tickAmount,
                max: adjustedMax,
                tickAmount: (adjustedMax - Math.floor(minValue / tickAmount) * tickAmount) / tickAmount,
                labels: {
                    style: {
                        colors: '#FFFFFF' // Warna putih untuk label y-axis
                    },
                    formatter: function(value) {
                        return Math.round(value);
                    }
                },
            },
        });

        // Update label filter di bawah <h3>
        document.getElementById('filterLabel').innerText = `${label}`;

        // Update data peminjaman berdasarkan filter
        var dataPeminjamanList = document.getElementById('dataPeminjamanList');
        dataPeminjamanList.innerHTML = ''; // Clear existing list

        if (Object.keys(filteredSeriesPinjam).length > 0) {
            Object.keys(filteredSeriesPinjam).forEach(function(jurusan) {
                var totalPeminjaman = filteredSeriesPinjam[jurusan].reduce((a, b) => a + b, 0);
                var listItem = `
            <li class="flex justify-between items-center p-2 bg-gray-50 dark:bg-gray-700 rounded-lg shadow-md hover:bg-gray-100 dark:hover:bg-gray-600 transition-all duration-200">
                <span class="text-md font-medium text-gray-800 dark:text-gray-300">
                    ${jurusan}
                </span>
                <span class="text-lg font-semibold text-purple-900 dark:text-purple-300">
                    ${totalPeminjaman}
                </span>
            </li>`;
                dataPeminjamanList.innerHTML += listItem;
            });
        } else {
            dataPeminjamanList.innerHTML =
                '<li class="text-center text-gray-600 dark:text-gray-400">Data peminjaman tidak tersedia.</li>';
        }

        document.getElementById('dropdownPeminjam').innerHTML = label +
            `<svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
</svg>`;
    }

    function initChartPeminjaman() {
        var thirtyDaysAgo = new Date();
        thirtyDaysAgo.setMonth(thirtyDaysAgo.getMonth() - 1);

        var filteredBulanPinjam = bulanPinjam.filter(function(date) {
            return new Date(date) >= thirtyDaysAgo;
        });

        var filteredSeriesPinjam = {};
        Object.keys(seriesDataPinjam).forEach(function(jurusan) {
            filteredSeriesPinjam[jurusan] = seriesDataPinjam[jurusan].slice(-filteredBulanPinjam.length);
        });

        var allData = Object.values(filteredSeriesPinjam).flat();
        var minValue = Math.min(...allData);
        var maxValue = Math.max(...allData);

        var tickAmount = Math.ceil((maxValue - minValue) / 10);
        var adjustedMax = Math.ceil(maxValue / tickAmount) * tickAmount;

        var chartPinjamSeries = Object.keys(filteredSeriesPinjam).map(function(jurusan, index) {
            return {
                name: jurusan,
                data: filteredSeriesPinjam[jurusan],
                color: colorsPinjam[index % colorsPinjam.length]
            };
        });

        var optionsPinjam = {
            chart: {
                height: 350,
                type: "area", // Ubah tipe chart menjadi area
                events: {
                    mounted: function(chartContext, config) {
                        let areas = document.querySelectorAll('.apexcharts-area');
                        areas.forEach(function(area) {
                            area.style.filter =
                                "drop-shadow(0 0 10px rgba(103, 58, 183, 0.7))"; // Efek glow purple
                        });
                    }
                },
            },
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    columnWidth: '85%'
                }
            },
            dataLabels: {
                enabled: false
            },
            series: chartPinjamSeries,
            grid: {
                borderColor: '#554670', // Warna grid
                strokeDashArray: 4 // Tambahkan jika ingin garis grid terputus-putus
            },
            xaxis: {
                type: 'categories',
                categories: filteredBulanPinjam.map(formatTanggal),
                labels: {
                    style: {
                        colors: '#FFFFFF' // Warna putih untuk label x-axis
                    },
                    formatter: function(value) {
                        return value;
                    }
                },
                axisBorder: {
                    show: true,
                    color: '#FFFFFF' // Warna putih untuk garis border x-axis
                },
                axisTicks: {
                    show: true,
                    color: '#FFFFFF' // Warna putih untuk ticks x-axis
                }
            },
            yaxis: {
                min: Math.floor(minValue / tickAmount) * tickAmount,
                max: adjustedMax,
                tickAmount: (adjustedMax - Math.floor(minValue / tickAmount) * tickAmount) / tickAmount,
                labels: {
                    style: {
                        colors: '#FFFFFF' // Warna putih untuk label y-axis
                    },
                    formatter: function(value) {
                        return Math.round(value);
                    }
                },
                axisBorder: {
                    show: false,
                    color: '#FFFFFF' // Warna putih untuk garis border y-axis
                },
                axisTicks: {
                    show: true,
                    color: '#FFFFFF' // Warna putih untuk ticks y-axis
                }
            },
            legend: {
                position: 'bottom',
                horizontalAlign: 'center',
                labels: {
                    colors: '#FFFFFF' // Warna putih untuk teks legend
                }
            }
        };

        chartPinjam = new ApexCharts(document.querySelector("#chart-peminjam"), optionsPinjam);
        chartPinjam.render();
    }

    initChartPeminjaman();


    function loadChartData(tahun) {
        axios.get(`/data-peminjaman?tahun=${tahun}`)
            .then(response => {
                const chartDataDdc = response.data;

                var optionsDdc = {
                    chart: {
                        type: 'bar'
                    },
                    series: chartDataDdc.series,
                    xaxis: {
                        categories: chartDataDdc.xaxis
                    }
                };

                // Ensure only one chart is rendered
                if (window.chartInstance) {
                    window.chartInstance.destroy();
                }

                window.chartInstance = new ApexCharts(document.querySelector("#chartDdc"), optionsDdc);
                window.chartInstance.render();
            });
    }

    // Load chart initially with current year
    loadChartData(new Date().getFullYear());

    // Event listener for year filter
    document.querySelector("#filterTahun").addEventListener("change", function() {
        const tahun = this.value;
        loadChartData(tahun);
    });


    // var chart = new ApexCharts(document.querySelector("#chart"), options);

    // chart.render();

    //message with sweetalert
    @if (session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @elseif (session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @endif
</script>

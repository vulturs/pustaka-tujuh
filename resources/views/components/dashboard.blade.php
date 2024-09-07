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
    <div class="grid row-span-2 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-5 mb-5">

        <div class="card-cust work">
            <div class="card-cust2-purple rounded-xl bg-deep-purple-600" style=":after:background:#4527A0;">
                <div class="p-5">
                    <div class="flex w-full justify-between">
                        <div class="bg-deep-purple-800 w-fit rounded-xl my-2 mb-3 ms-1 p-3 py-2 pt-3">
                            <span class="material-symbols-rounded text-white">
                                assignment_ind
                            </span>
                        </div>
                        <span class="material-symbols-rounded z-40 mt-2 text-white">
                            <a href="/anggota"
                                class="bg-deep-purple-500 hover:bg-purple-600 transition-all ease-linear p-2 rounded-lg">
                                double_arrow
                            </a>
                        </span>

                    </div>
                    <span class="text-3xl font-semibold text-white ps-2">{{ $anggota }} Anggota</span>
                    <p class="ps-2 py-1 text-deep-purple-200">Data Anggota</p>
                </div>
            </div>
        </div>

        <div class="card-cust work">
            <div class="card-cust2 rounded-xl bg-blue-500 before:bg-blue-600 after:bg-blue-700">
                <div class="p-5">
                    <div class="flex w-full justify-between">
                        <div class="bg-blue-700 w-fit rounded-xl my-2 mb-3 ms-1 p-3 py-2 pt-3">
                            <span class="material-symbols-rounded text-white">
                                collections_bookmark
                            </span>
                        </div>
                        <span class="material-symbols-rounded z-40 mt-2 text-white">
                            <a href="/koleksi"
                                class="bg-blue-500 p-2 hover:bg-blue-400 transition-all ease-linear rounded-lg">
                                double_arrow
                            </a>
                        </span>

                    </div>
                    <span class="text-3xl font-semibold text-white ps-2">{{ $koleksi }} Koleksi</span>
                    <p class="ps-2 py-1 text-blue-200">Data Koleksi</p>
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
                <div class="card-cust2 rounded-xl border-2 bg-white before:bg-blue-100 after:bg-blue-200">
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
        <div
            class="w-full col-span-2 border border-slate-200 shadow-medium bg-white rounded-2xl shadow-lg dark:bg-gray-800 p-4 mb-4 md:p-6">
            <h3 class="text-xl font-semibold mb-2">Data Kunjungan</h3>
            <div class="flex">
                <h5 id="kun-value" class="leading-none text-3xl font-bold text-gray-900 dark:text-white pe-2">
                    {{ $kun }}</h5>
                <p class="text-base font-normal text-gray-500 dark:text-gray-400">pengunjung</p>
            </div>

            {{-- Charts --}}
            <div id="chart"></div>

            <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
                <div class="flex justify-between items-center pt-5">
                    <!-- Button -->
                    <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                        data-dropdown-placement="bottom"
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
                    <div id="lastDaysdropdown"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" onclick="filterData('7-days', '1 Minggu Lalu')"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    1 Minggu Lalu</a>
                            </li>
                            <li>
                                <a href="#" onclick="filterData('30-days', '1 Bulan Lalu')"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    1 Bulan Lalu</a>
                            </li>
                            <li>
                                <a href="#" onclick="filterData('180-days', '6 Bulan Lalu')"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    6 Bulan Lalu</a>
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

        <div class="mb-4">
            <div class="e-card playing rounded-xl shadow-medium">
                <div class="image"></div>

                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>


                <div class="absolute font-semibold text-white text-xl w-full">
                    <div class="pl-6 p-6 pt-6">
                        Daftar Pengunjung
                        <div class="text-sm font-extralight">Klik lihat detail untuk melihat data lengkap</div>
                    </div>
                    <div class="bg-white rounded-2xl shadow-sm py-2">
                        <table style="font-size: .8rem; line-height:1rem;"
                            class="mx-4 text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead style="font-size: .7rem;"
                                class="border-b border-slate-300 text-center text-gray-700 uppercase dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        ID Peminjaman
                                    </th> --}}
                                    <th scope="col" class="px-6 py-3">
                                        Nama Anggota
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kelas
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Pengarang
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Kode DDC
                                    </th> --}}
                                    <th scope="col" class="px-6 py-3">
                                        Tanggal Kunjungan
                                    </th>
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Tanggal Pengembalian
                                    </th> --}}
                                    {{-- <th scope="col" class="px-6 py-3">
                                        Pendataan Oleh
                                    </th> --}}
                                    {{-- <th scope="col" class="px-6 text-center py-3">
                                        Action
                                    </th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kunjung as $kunjungs)
                                    <tr
                                        class="border-b border-slate-200 dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        {{-- <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $kunjungs->id_peminjaman }}
                                        </th> --}}
                                        <td class="px-6 py-3">
                                            {{ $kunjungs->nama_anggota }}
                                        </td>
                                        <td class="px-6 py-3">
                                            {{ $kunjungs->kelas }}
                                        </td>
                                        {{-- <td class="px-6 py-3">
                                            {{ $kunjungs->pengarang }}
                                        </td>
                                        <td class="px-6 py-3">
                                            {{ $kunjungs->kode_ddc }}
                                        </td> --}}
                                        <td class="px-6 py-3">
                                            {{ $kunjungs->created_at->format('d M Y') }}
                                        </td>
                                        {{-- <td class="px-6 py-3">
                                            {{ $kunjungs->tanggal_pengembalian }}
                                        </td> --}}
                                        {{-- <td class="px-6 py-4">
                                            {{ $pinjams->nama }}
                                        </td> --}}
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center text-mute" colspan="4">Data peminjaman tidak
                                            tersedia</td>
                                    </tr>
                                @endforelse
                                <tr class="border-none">
                                    <td class="text-center text-sm p-4" colspan="4">
                                        <a href="/kunjungan"
                                            class="flex items-center text-purple-600 hover:text-purple-400 w-full justify-center">Lihat
                                            Detail
                                            <span class="material-symbols-rounded p-0 m-0">
                                                double_arrow
                                            </span></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Pengunjung --}}

        <div class="grid grid-cols-2 gap-4 mb-4">
            {{-- Grafik --}}
            
            {{-- End Grafik --}}
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="https://code.highcharts.com/highcharts.js"></script> --}}

<script>
    var pengunjungAsli = <?= json_encode($total_kunjungan) ?>;
    var bulanAsli = <?= json_encode($bulan) ?>;

    function formatTanggal(tanggal) {
        var dateObj = new Date(tanggal);
        var options = {
            day: '2-digit',
            month: 'long',
            year: 'numeric'
        };
        return dateObj.toLocaleDateString('id-ID', options);
    }

    var formattedBulan = bulanAsli.map(formatTanggal);

    var chart;

    function filterData(period, label) {
        var now = new Date();
        var filteredPengunjung = [];
        var filteredBulan = [];
        var totalPengunjung = 0;

        if (period === '7-days') {
            var sevenDaysAgo = new Date(now.setDate(now.getDate() - 7));
            filteredPengunjung = pengunjungAsli.filter(function(_, index) {
                return new Date(bulanAsli[index]) >= sevenDaysAgo;
            });
            filteredBulan = bulanAsli.filter(function(date) {
                return new Date(date) >= sevenDaysAgo;
            });
        } else if (period === '30-days') {
            var thirtyDaysAgo = new Date(now.setMonth(now.getMonth() - 1));
            filteredPengunjung = pengunjungAsli.filter(function(_, index) {
                return new Date(bulanAsli[index]) >= thirtyDaysAgo;
            });
            filteredBulan = bulanAsli.filter(function(date) {
                return new Date(date) >= thirtyDaysAgo;
            });
        } else if (period === '180-days') {
            var sixMonthsAgo = new Date(now.setMonth(now.getMonth() - 6));
            filteredPengunjung = pengunjungAsli.filter(function(_, index) {
                return new Date(bulanAsli[index]) >= sixMonthsAgo;
            });
            filteredBulan = bulanAsli.filter(function(date) {
                return new Date(date) >= sixMonthsAgo;
            });
        }

        // Update total kunjungan
        totalPengunjung = filteredPengunjung.reduce((a, b) => a + b, 0);
        document.getElementById('kun-value').innerText = totalPengunjung;

        // Update chart dengan data yang telah difilter
        chart.updateOptions({
            series: [{
                name: "Pengunjung",
                data: filteredPengunjung
            }],
            xaxis: {
                categories: filteredBulan.map(formatTanggal)
            },
            yaxis: {
                tickAmount: Math.max(...filteredPengunjung) - Math.min(...filteredPengunjung),
                min: Math.min(...filteredPengunjung),
                max: Math.max(...filteredPengunjung),
            }
        });

        // Update label dropdown untuk menampilkan filter yang dipilih
        document.getElementById('dropdownDefaultButton').innerHTML = label +
            `<svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
        </svg>`;
    }

    function initChart() {
        var thirtyDaysAgo = new Date();
        thirtyDaysAgo.setMonth(thirtyDaysAgo.getMonth() - 1);

        var filteredPengunjung = pengunjungAsli.filter(function(_, index) {
            return new Date(bulanAsli[index]) >= thirtyDaysAgo;
        });
        var filteredBulan = bulanAsli.filter(function(date) {
            return new Date(date) >= thirtyDaysAgo;
        });

        var options = {
            chart: {
                height: 370,
                type: "bar"
            },
            dataLabels: {
                enabled: false
            },
            colors: ['#b39ddb'],
            series: [{
                name: "Pengunjung",
                data: filteredPengunjung
            }],
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.9,
                    stops: [0, 90, 100],
                    colorStops: [{
                            offset: 0,
                            color: "#b39ddb",
                            opacity: 1
                        },
                        {
                            offset: 100,
                            color: "#b39ddb",
                            opacity: 0.4
                        }
                    ]
                }
            },
            xaxis: {
                type: 'categories',
                categories: filteredBulan.map(formatTanggal),
                labels: {
                    formatter: function(value) {
                        return value;
                    },
                }
            },
            yaxis: {
                tickAmount: Math.max(...filteredPengunjung) - Math.min(...filteredPengunjung),
                min: Math.min(...filteredPengunjung),
                max: Math.max(...filteredPengunjung),
                labels: {
                    formatter: function(value) {
                        return Math.round(value);
                    }
                }
            }
        };

        chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    }

    initChart();

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

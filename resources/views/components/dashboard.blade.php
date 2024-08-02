<x-topbar :$title></x-topbar>

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

<div class="p-5 bg-slate-200 rounded-2xl mb-4">
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
                                    {{ date_format(now(), 'h:i') }}
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
                <div class="card-cust2 rounded-xl bg-white before:bg-blue-300 after:bg-blue-400">
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
                                        class="text-2xl ms-2 z-40 font-semibold text-blue-900 ps-2">{{ $users }}
                                        Katalog</span>
                                    <span class="ms-4 text-sm text-blue-300">Data Katalog</span>
                                </div>
                            </div>
                            <span class="material-symbols-rounded z-40 text-white">
                                <a href="/anggota"
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

    {{-- Grafik --}}
    <div class="grid grid-cols-3 gap-5 mb-4">
        <div class="w-full col-span-2 bg-white rounded-2xl shadow-lg dark:bg-gray-800 p-4 mb-4 md:p-6">
            <div class="flex justify-between">
                <div>
                    <h3 class="text-xl font-semibold mb-2">Data Kunjungan</h3>
                    <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">
                        {{ $kun }}</h5>
                    <p class="text-base font-normal text-gray-500 dark:text-gray-400">Minggu ini</p>
                </div>
                <div
                    class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
                    12%
                    <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13V1m0 0L1 5m4-4 4 4" />
                    </svg>
                </div>
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
                        Last 7 days
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
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                    7 days</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                    30 days</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last
                                    90 days</a>
                            </li>
                        </ul>
                    </div>
                    <a href="#"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-600 hover:text-blue-700 dark:hover:text-blue-500  hover:bg-gray-100 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                        Report
                        <svg class="w-2.5 h-2.5 ms-1.5 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- peminjam --}}



        <div id="default-carousel" class="relative w-full" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-lg md:h-52">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    {{-- <img src="/docs/images/carousel/carousel-1.svg"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..."> --}}
                    <div class="absolute block w-full px-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="card-cust2">
                            <div class="title-card-cust2">
                                <span class="text-2xl font-medium ps-3 py-2">Data Peminjaman</span>
                                <p class="ps-4">Vivamus nisi purus</p>
                            </div>
                            <div class="icons-card-cust2">
                                <a class="btn-card-cust2 font-medium p-3" href="#">
                                    Lihat Data
                                    <span class="material-symbols-rounded">
                                        double_arrow
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute block w-full px-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                        <div class="card-cust2">
                            <div class="title-card-cust2">
                                <span class="text-2xl font-medium ps-3 py-2">Data Pengembalian</span>
                                <p class="ps-4">Vivamus nisi purus</p>
                            </div>
                            <div class="icons-card-cust2">
                                <a class="btn-card-cust2 font-medium p-3" href="#">
                                    Lihat Data
                                    <span class="material-symbols-rounded">
                                        double_arrow
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

        {{-- <div class="card-cust2">
            <div class="title-card-cust2">
                <span class="text-2xl font-medium ps-3 py-2">Data Peminjaman</span>
                <p class="ps-4">Vivamus nisi purus</p>
            </div>
            <div class="icons-card-cust2">
                <a class="btn-card-cust2 font-medium p-3" href="#">
                    Lihat Data
                    <span class="material-symbols-rounded">
                        double_arrow
                    </span>
                </a>
            </div>
        </div> --}}

        {{-- pengembalian --}}

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
        </div>
        <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 18 18">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 1v16M1 9h16" />
                </svg>
            </p>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
            <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </p>
            </div>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="https://code.highcharts.com/highcharts.js"></script> --}}

<script>
    var pengunjung = <?= json_encode($total_kunjungan) ?>;
    var bulan = <?= json_encode($bulan) ?>;

    var options = {
        chart: {
            height: 300,
            type: "area"
        },
        dataLabels: {
            enabled: false
        },
        series: [{
            name: "Pengunjung",
            data: pengunjung
        }],
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.7,
                opacityTo: 0.9,
                stops: [0, 90, 100]
            }
        },
        xaxis: {
            type: 'categories',
            categories: bulan, // Menggunakan kategori yang telah diformat dari controller
            labels: {
                formatter: function(value) {
                    return value; // Menampilkan nilai kategori yang telah diformat
                },
            }
        },
        yaxis: {
            tickAmount: Math.max(...pengunjung) - Math.min(...
                pengunjung), // Menentukan jumlah tick berdasarkan range data
            min: Math.min(...pengunjung), // Nilai minimum y-axis
            max: Math.max(...pengunjung), // Nilai maksimum y-axis
            labels: {
                formatter: function(value) {
                    return Math.round(value); // Menghilangkan nilai desimal
                }
            }
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);

    chart.render();

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

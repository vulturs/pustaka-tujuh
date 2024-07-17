<x-topbar></x-topbar>

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


<div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10 mb-5">

    <div class="card-cust work">
        <div class="img-section bg-sky-400">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" height="77" width="76">
                <path fill-rule="nonzero" fill="#3F9CBB"
                    d="m60.91 71.846 12.314-19.892c3.317-5.36 3.78-13.818-2.31-19.908l-26.36-26.36c-4.457-4.457-12.586-6.843-19.908-2.31L4.753 15.69c-5.4 3.343-6.275 10.854-1.779 15.35a7.773 7.773 0 0 0 7.346 2.035l7.783-1.945a3.947 3.947 0 0 1 3.731 1.033l22.602 22.602c.97.97 1.367 2.4 1.033 3.732l-1.945 7.782a7.775 7.775 0 0 0 2.037 7.349c4.49 4.49 12.003 3.624 15.349-1.782Zm-24.227-46.12-1.891-1.892-1.892 1.892a2.342 2.342 0 0 1-3.312-3.312l1.892-1.892-1.892-1.891a2.342 2.342 0 0 1 3.312-3.312l1.892 1.891 1.891-1.891a2.342 2.342 0 0 1 3.312 3.312l-1.891 1.891 1.891 1.892a2.342 2.342 0 0 1-3.312 3.312Zm14.19 14.19a2.343 2.343 0 1 1 3.315-3.312 2.343 2.343 0 0 1-3.314 3.312Zm0 7.096a2.343 2.343 0 0 1 3.313-3.312 2.343 2.343 0 0 1-3.312 3.312Zm7.096-7.095a2.343 2.343 0 1 1 3.312 0 2.343 2.343 0 0 1-3.312 0Zm0 7.095a2.343 2.343 0 0 1 3.312-3.312 2.343 2.343 0 0 1-3.312 3.312Z">
                </path>
            </svg> --}}

            <svg class="pe-3" id="Layer_1" data-name="Layer 1" height="77" width="76"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 105.38">
                <title>name-id</title>
                <path fill-rule="nonzero" fill="#3F9CBB"
                    d="M68.75,62c-1,0-1.79-1.07-1.79-2.38s.8-2.38,1.79-2.38h35.91c1,0,1.78,1.07,1.78,2.38s-.8,2.38-1.78,2.38ZM25.66,0H97.22a3.75,3.75,0,0,1,3.66,3h8.79a13.25,13.25,0,0,1,13.21,13.2v52A13.19,13.19,0,0,1,119,77.49l0,0a13.18,13.18,0,0,1-9.31,3.87H13.21A13.25,13.25,0,0,1,0,68.18v-52A13.13,13.13,0,0,1,3.88,6.89l0,0A13.15,13.15,0,0,1,13.21,3H22a3.74,3.74,0,0,1,3.66-3ZM101,9.17v.49a3.74,3.74,0,0,1-3.73,3.73H25.66a3.74,3.74,0,0,1-3.73-3.73V9.17H13.21a7,7,0,0,0-5,2.06h0a7,7,0,0,0-2.05,5v52a7.05,7.05,0,0,0,7,7h96.46a7,7,0,0,0,5-2.06h0a7,7,0,0,0,2.06-5v-52a7.07,7.07,0,0,0-7-7Zm-56.19,39C51.89,54.37,56.53,45.44,60,60a2.23,2.23,0,0,1-2.34,2.19H19.52a2.25,2.25,0,0,1-2.34-2.19c3.38-14.34,7.45-5.67,15.1-11.74a27.69,27.69,0,0,0,1-2.85c.25-.78-1.3-2.32-1.82-3.15l-1.93-3.08a5.56,5.56,0,0,1-1.1-2.81,2.22,2.22,0,0,1,.19-1,2,2,0,0,1,.67-.77,2.07,2.07,0,0,1,.47-.24,48.09,48.09,0,0,1-.1-5.52A7.78,7.78,0,0,1,30,27.62a8.14,8.14,0,0,1,5.36-5.21c1.21-.41.74-1.41,2-1.34,2.88.15,7.33,2,9,4,2.4,2.76,1.78,6.16,1.7,9.54h0a1.37,1.37,0,0,1,1,1,4.34,4.34,0,0,1-.52,2.64h0l0,.07L46.27,42a18,18,0,0,1-2.86,3.88c-.33.27,1.13,2.06,1.35,2.35Zm24-15c-1,0-1.79-1.07-1.79-2.38s.8-2.38,1.79-2.38H90.21c1,0,1.79,1.07,1.79,2.38s-.8,2.38-1.79,2.38Zm0,14.37c-1,0-1.79-1.07-1.79-2.38s.8-2.38,1.79-2.38h34c1,0,1.79,1.07,1.79,2.38s-.8,2.38-1.79,2.38Z" />
            </svg>

        </div>
        <div class="card-cust-desc shadow-lg">
            <div class="card-cust-header">
                <div class="font-bold text-lg w-full">Anggota</div>
                <a href="/anggota" class="card-cust-menu hover:text-sky-600">
                    <span class="font-medium">Details</span>
                    <span class="material-symbols-rounded">
                        double_arrow
                    </span>
                </a>
            </div>
            <div class="card-cust-time">{{ $anggota }}
                <span class="text-sm">
                    Anggota
                </span>
            </div>
            {{-- <p class="recent">Pengguna</p> --}}
        </div>
    </div>

    <div class="card-cust work">
        <div class="img-section bg-sky-400">

            <?xml version="1.0" encoding="utf-8"?><svg class="p-2" height="77" width="76" version="1.1"
                id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 111.26 122.88" style="enable-background:new 0 0 111.26 122.88"
                xml:space="preserve">
                <g>
                    <path fill-rule="nonzero" fill="#3F9CBB"
                        d="M93.37,19.34h10.43c2.05,0,3.92,0.84,5.27,2.19c1.35,1.35,2.19,3.22,2.19,5.27v88.62 c0,2.06-0.84,3.92-2.19,5.27c-1.35,1.35-3.22,2.19-5.27,2.19H25.35c-2.05,0-3.92-0.84-5.27-2.19c-1.35-1.35-2.19-3.21-2.19-5.27 v-11.88H7.46c-2.05,0-3.92-0.84-5.27-2.19C0.84,100,0,98.13,0,96.08V7.46C0,5.4,0.84,3.54,2.19,2.19C3.54,0.84,5.4,0,7.46,0h78.45 c2.05,0,3.92,0.84,5.27,2.19c1.35,1.35,2.19,3.22,2.19,5.27V19.34L93.37,19.34L93.37,19.34z M48.45,44.5h-5.31 c-1.87,0-3.4-1.53-3.4-3.4c0-6.99-1.79-14.67,6.78-16.86c3.88-0.99,4.89,3.28,0.77,3.58c-2.52,0.18-3.01,1.81-3.09,4.27l4.35,0 c1.87,0,3.4,1.53,3.4,3.4v5.52C51.95,42.92,50.37,44.5,48.45,44.5L48.45,44.5L48.45,44.5z M32.42,44.5h-5.31 c-1.87,0-3.4-1.53-3.4-3.4c0-6.99-1.79-14.67,6.78-16.86c3.88-0.99,4.9,3.28,0.77,3.58c-2.52,0.18-3.01,1.81-3.09,4.27l4.35,0 c1.87,0,3.4,1.53,3.4,3.4v5.52C35.92,42.92,34.34,44.5,32.42,44.5L32.42,44.5L32.42,44.5z M60.47,41.35 c-1.72,0-3.11-1.39-3.11-3.11c0-1.72,1.39-3.11,3.11-3.11h6.94c1.72,0,3.11,1.39,3.11,3.11c0,1.72-1.4,3.11-3.11,3.11H60.47 L60.47,41.35z M24.59,61.06c-1.72,0-3.11-1.39-3.11-3.11c0-1.72,1.39-3.11,3.11-3.11h44.19c1.72,0,3.11,1.4,3.11,3.11 c0,1.72-1.39,3.11-3.11,3.11H24.59L24.59,61.06z M24.59,79.46c-1.72,0-3.11-1.4-3.11-3.11c0-1.72,1.39-3.11,3.11-3.11h44.19 c1.72,0,3.11,1.4,3.11,3.11c0,1.72-1.39,3.11-3.11,3.11H24.59L24.59,79.46z M24.28,103.54v11.88c0,0.29,0.12,0.56,0.32,0.75 c0.2,0.2,0.46,0.32,0.75,0.32h78.45c0.29,0,0.56-0.12,0.75-0.32c0.2-0.2,0.32-0.46,0.32-0.75V26.8c0-0.29-0.12-0.56-0.32-0.75 c-0.2-0.2-0.46-0.32-0.75-0.32H93.37v70.34c0,2.05-0.84,3.92-2.19,5.27c-1.35,1.35-3.22,2.19-5.27,2.19L24.28,103.54L24.28,103.54 L24.28,103.54z M85.91,6.39H7.46c-0.29,0-0.56,0.12-0.75,0.32c-0.2,0.2-0.32,0.46-0.32,0.75v88.62c0,0.29,0.12,0.56,0.32,0.75 c0.2,0.2,0.46,0.32,0.75,0.32h78.45c0.29,0,0.56-0.12,0.75-0.32c0.2-0.2,0.32-0.46,0.32-0.75V7.46c0-0.29-0.12-0.56-0.32-0.75 C86.47,6.51,86.2,6.39,85.91,6.39L85.91,6.39L85.91,6.39z" />
                </g>
            </svg>
        </div>

        <div class="card-cust-desc shadow-lg">
            <div class="card-cust-header">
                <div class="w-full font-bold text-lg">Koleksi</div>
                <a href="/koleksi" class="card-cust-menu hover:text-sky-600">
                    <span class="font-medium">Details</span>
                    <span class="material-symbols-rounded">
                        double_arrow
                    </span>
                </a>
            </div>
            <div class="card-cust-time">{{ $koleksi }}
                <span class="text-sm">
                    Koleksi
                </span>
            </div>
            {{-- <p class="recent">Pengguna</p> --}}
        </div>
    </div>

    <div class="card-cust work">
        <div class="img-section bg-sky-400">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" height="77" width="76">
                <path fill-rule="nonzero" fill="#3F9CBB"
                    d="m60.91 71.846 12.314-19.892c3.317-5.36 3.78-13.818-2.31-19.908l-26.36-26.36c-4.457-4.457-12.586-6.843-19.908-2.31L4.753 15.69c-5.4 3.343-6.275 10.854-1.779 15.35a7.773 7.773 0 0 0 7.346 2.035l7.783-1.945a3.947 3.947 0 0 1 3.731 1.033l22.602 22.602c.97.97 1.367 2.4 1.033 3.732l-1.945 7.782a7.775 7.775 0 0 0 2.037 7.349c4.49 4.49 12.003 3.624 15.349-1.782Zm-24.227-46.12-1.891-1.892-1.892 1.892a2.342 2.342 0 0 1-3.312-3.312l1.892-1.892-1.892-1.891a2.342 2.342 0 0 1 3.312-3.312l1.892 1.891 1.891-1.891a2.342 2.342 0 0 1 3.312 3.312l-1.891 1.891 1.891 1.892a2.342 2.342 0 0 1-3.312 3.312Zm14.19 14.19a2.343 2.343 0 1 1 3.315-3.312 2.343 2.343 0 0 1-3.314 3.312Zm0 7.096a2.343 2.343 0 0 1 3.313-3.312 2.343 2.343 0 0 1-3.312 3.312Zm7.096-7.095a2.343 2.343 0 1 1 3.312 0 2.343 2.343 0 0 1-3.312 0Zm0 7.095a2.343 2.343 0 0 1 3.312-3.312 2.343 2.343 0 0 1-3.312 3.312Z">
                </path>
            </svg> --}}

            <?xml version="1.0" encoding="utf-8"?>
            <svg class="p-1 pe-3" version="1.1" height="77" width="76" id="Layer_1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 122.88 107.91" style="enable-background:new 0 0 122.88 107.91" xml:space="preserve">
                <g>
                    <path fill-rule="nonzero" fill="#3F9CBB"
                        d="M67.9,7.73c7.53-12.42,33.37-9.87,33.37,7.65v5.46c0,2.45-0.09,2.52,0.8,3.8c0.67,0.98,0.83,1.09,1.06,2.29 c0.3,1.56,0.32,3.16,0.34,4.8c0.04,2.55-0.93,3.28-2.23,5.35l-5.51,8.79c-1.71,2.74-1.98,4.42-1.3,7.88 c1.52,7.71,22.29,12.05,28.46,14.79v14.6l-14.54,0v-5.03l-4.01-1.78c-1.86-0.83-4.41-1.65-7.35-2.59 c-6.96-2.24-16.85-5.42-17.23-7.35c-0.19-0.96-0.27-1.55-0.22-1.84c0.03-0.19,0.24-0.57,0.62-1.19l-0.01,0l5.49-8.76l0.62-0.92 c1.61-2.35,2.69-3.93,2.64-8.09c-0.01-1-0.03-1.99-0.07-2.71c-0.06-1.07-0.17-2.15-0.38-3.24V39.6c-0.44-2.29-0.75-2.85-1.75-4.28 l0-0.54h0.03v-5.46c0-10.72-6.57-17.56-14.97-20.52l0-0.01C70.5,8.34,69.21,7.99,67.9,7.73L67.9,7.73z M0,107.91l0-12.89 c6.17-2.74,29-8.8,30.52-16.51c0.68-3.47,0.41-5.14-1.3-7.88l-5.51-8.79c-1.29-2.06-2.26-2.8-2.23-5.35 c0.02-1.43,0.04-2.85,0.25-4.23c0.26-1.76,0.48-1.82,1.4-3.23c0.62-0.95,0.55-1.24,0.55-3.43v-5.46 c0-11.04,10.26-16.14,19.73-15.29c8.13,0.72,15.68,5.82,15.68,15.29v5.46c0,2.45-0.09,2.52,0.8,3.8c0.67,0.98,0.83,1.09,1.06,2.29 c0.3,1.56,0.32,3.16,0.34,4.8c0.04,2.55-0.93,3.28-2.23,5.35l-5.51,8.79c-1.71,2.74-1.98,4.42-1.3,7.88 c1.52,7.71,22.29,12.05,28.46,14.79v14.6L0,107.91L0,107.91z M48.73,18.98c9.35-9.24,31.25-5.8,31.25,10.33v5.46 c0,2.46-0.09,2.52,0.8,3.8c0.67,0.98,0.83,1.09,1.06,2.29c0.3,1.56,0.32,3.16,0.34,4.8c0.04,2.55-0.93,3.28-2.23,5.35l-5.51,8.79 c-1.71,2.74-1.98,4.42-1.3,7.88c1.52,7.71,22.29,12.05,28.46,14.79v14.6l-14.15,0v-8.13l-4.01-1.78c-1.86-0.83-4.41-1.65-7.35-2.59 c-6.96-2.24-16.85-5.42-17.23-7.35c-0.19-0.97-0.27-1.55-0.22-1.84c0.03-0.19,0.24-0.57,0.62-1.19l-0.01,0l5.49-8.76l0.62-0.92 c1.61-2.35,2.69-3.93,2.64-8.09c-0.01-1.01-0.03-2-0.07-2.71c-0.06-1.07-0.17-2.15-0.38-3.24v-0.03c-0.44-2.29-0.75-2.85-1.75-4.28 l0-0.54h0.03v-5.46c0-6.4-2.45-11.49-6.28-15.22C56.59,22.03,52.8,20.05,48.73,18.98L48.73,18.98z" />
                </g>
            </svg>
        </div>

        <div class="card-cust-desc shadow-lg">
            <div class="card-cust-header">
                <div class="font-bold text-lg w-full">Pengguna</div>
                <a href="/users" class="card-cust-menu hover:text-sky-600">
                    <span class="font-medium">Details</span>
                    <span class="material-symbols-rounded">
                        double_arrow
                    </span>
                </a>
            </div>
            <div class="card-cust-time">{{ $users }}
                <span class="text-sm">
                    Pengguna
                </span>
            </div>
            {{-- <p class="recent">Pengguna</p> --}}
        </div>
    </div>

</div>

{{-- Grafik --}}
<div class="grid grid-cols-3 gap-10 mb-4">
    <div class="w-full col-span-2 row-span-2 bg-white rounded-2xl shadow-lg dark:bg-gray-800 p-4 mb-4 md:p-6">
        <div class="flex justify-between">
            <div>
                <h3 class="text-xl font-semibold mb-2">Data Kunjungan</h3>
                <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">10</h5>
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
        <div id="area-chart"></div>
        <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
            <div class="flex justify-between items-center pt-5">
                <!-- Button -->
                <button id="dropdownDefaultButton" data-dropdown-toggle="lastDaysdropdown"
                    data-dropdown-placement="bottom"
                    class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 text-center inline-flex items-center dark:hover:text-white"
                    type="button">
                    Last 7 days
                    <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="lastDaysdropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
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
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
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

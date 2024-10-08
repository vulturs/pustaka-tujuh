<x-topbar :$title></x-topbar>

<div class="rounded-2xl bg-slate-100 p-5 overflow-y-auto">
    <div class="shadow-md rounded-xl p-4 bg-white dark:bg-gray-900">
        <div class="flex items-center justify-between mb-5">
            <div class="flex items-baseline">
                <form action="/kunjungan" class="max-w-xs ml-0 mb-4 flex items-center justify-between">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative flex items-center">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="default-search"
                            class="block w-full p-2 pl-10 pr-16 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search..." name="search">
                        <button type="submit"
                            class="absolute right-2 top-1/2 transform -translate-y-1/2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
                <a href="{{ route('kunjungan-print') }}?export=pdf" target="_blank"
                    class="flex ms-5 hover:bg-red-500 bg-red-600 text-white py-2 align-items-center px-5 rounded-md">
                    <span class="me-2">
                        Print (PDF)
                    </span>
                    <span class="material-symbols-rounded">
                        print
                    </span>
                </a>
                <a href="{{ route('kunjungan-to-excel') }}?export=pdf" target="_blank"
                    class="flex ms-5 hover:bg-green-500 bg-green-600 text-white py-2 align-items-center px-5 rounded-md">
                    <span class="me-2">
                        Export to Excel (.xlsx)
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" height="1.5rem" width="1.5rem">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <g transform="scale(.4)">
                                <path
                                    d="M28.8125,0.03125l-28,5.3125c-0.47266,0.08984 -0.8125,0.51953 -0.8125,1v37.3125c0,0.48047 0.33984,0.91016 0.8125,1l28,5.3125c0.0625,0.01172 0.125,0.03125 0.1875,0.03125c0.23047,0 0.44531,-0.07031 0.625,-0.21875c0.23047,-0.19141 0.375,-0.48437 0.375,-0.78125v-48c0,-0.29687 -0.14453,-0.58984 -0.375,-0.78125c-0.23047,-0.19141 -0.51953,-0.24219 -0.8125,-0.1875zM32,6v7h2v2h-2v5h2v2h-2v5h2v2h-2v6h2v2h-2v7h15c1.10156,0 2,-0.89844 2,-2v-34c0,-1.10156 -0.89844,-2 -2,-2zM36,13h8v2h-8zM6.6875,15.6875h5.125l2.6875,5.59375c0.21094,0.44141 0.39844,0.98438 0.5625,1.59375h0.03125c0.10547,-0.36328 0.30859,-0.93359 0.59375,-1.65625l2.96875,-5.53125h4.6875l-5.59375,9.25l5.75,9.4375h-4.96875l-3.25,-6.09375c-0.12109,-0.22656 -0.24609,-0.64453 -0.375,-1.25h-0.03125c-0.0625,0.28516 -0.21094,0.73047 -0.4375,1.3125l-3.25,6.03125h-5l5.96875,-9.34375zM36,20h8v2h-8zM36,27h8v2h-8zM36,35h8v2h-8z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="text-right mb-3">
                <a href="{{ route('tambah-kunjungan') }}"
                    class="overflow-hidden relative flex p-2 px-4 bg-slate-800 text-white border-none rounded-md font-medium cursor-pointer relative z-10 group">
                    Kunjungan Baru <span class="material-symbols-rounded ps-2 text-sm text-white">
                        add
                    </span>
                    <span
                        class="absolute w-36 h-32 -top-12 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-150 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-12 -left-2 bg-purple-400 rotate-12 transform scale-x-0 group-hover:scale-x-150 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                    <span
                        class="absolute w-36 h-32 -top-12 -left-2 bg-purple-800 rotate-12 transform scale-x-0 group-hover:scale-x-150 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                    <span
                        class="flex group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-8 z-10">
                        <span class="material-symbols-rounded pe-2 text-sm text-white">
                            add
                        </span> Kunjungan
                    </span>
                </a>
            </div>
        </div>

        <div class="overflow-y-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                {{-- <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="checkbox-all-search" class="sr-only">checkbox</label> --}}
                            </div>
                        </th>
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
                        <th scope="col" class="px-6 text-center py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    {{ $slot }}
                </tbody>
            </table>
        </div>
        {{ $kunjungan->links() }}
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

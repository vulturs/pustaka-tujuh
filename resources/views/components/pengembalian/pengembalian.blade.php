<x-topbar :$title></x-topbar>

<div class="rounded-2xl bg-slate-100 p-5 mb-4" style="height:87vh;">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4 bg-white dark:bg-gray-900">
        <div class="flex items-center justify-between mb-5">
            <div class="flex items-baseline">
                <form action="/pengembalian" class="w-80 ml-0 mb-4 flex items-center justify-between">
                    <div class="w-full">
                        <div
                            class="relative rounded-full border border-slate-200 overflow-hidden bg-white drop-shadow-lg w-full">
                            <input type="text" name="search" placeholder="Cari pengembalian"
                                class="input bg-transparent outline-none border-none pl-8 pr-10 py-3 w-full font-sans text-lg font-semibold" />
                            <div class="absolute right-0 top-0">
                                <button type="submit"
                                    class="p-3.5 px-4 rounded-full bg-black group shadow-xl flex items-center justify-center relative overflow-hidden">
                                    <span class="material-symbols-rounded text-white">
                                        search
                                    </span>
                                </button>
                            </div>
                        </div>
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
            {{-- <div class="text-right mb-3">
                <a href="{{ route('tambah-peminjaman') }}"
                    class="rounded-lg relative w-40 h-10 cursor-pointer flex items-center border border-green-500 bg-green-500 group hover:bg-green-500 active:bg-green-500 active:border-green-500">
                    <span
                        class="text-gray-200 font-medium ml-8 transform group-hover:translate-x-20 transition-all duration-300">
                        Peminjaman</span>
                    <span
                        class="absolute right-0 h-full w-10 rounded-lg bg-green-500 flex items-center justify-center transform group-hover:translate-x-0 group-hover:w-full transition-all duration-300">
                        <span class="material-symbols-rounded text-white">
                            add
                        </span>
                    </span>
                </a>
            </div> --}}
        </div>

        <div class="mx-8">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            ID Pengembalian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            ID Peminjaman
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Anggota
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Judul Buku
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Peminjaman
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Batas Pengembalian
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Dikembalikan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pelanggaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Denda
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pendataan Oleh
                        </th>
                        {{-- <th scope="col" class="px-6 text-center py-3">
                            Action
                        </th> --}}
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pengembalian as $kembali)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-95000 whitespace-nowrap dark:text-white">
                                {{ $kembali->id_pengembalian }}
                            </th>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-95000 whitespace-nowrap dark:text-white">
                                {{ $kembali->id_peminjaman }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $kembali->nama_anggota }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $kembali->judul_buku }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $kembali->tanggal_peminjaman }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $kembali->tanggal_pengembalian }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $kembali->tanggal_dikembalikan }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $kembali->jenis_pelanggaran }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $kembali->denda }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $kembali->nama }}
                            </td>


                            {{-- <td>
                                <a href="{{ route('proses-pengembalian', $kembali->id_pengembalian) }}"
                                    class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                    Proses Pengembalian</a>
                            </td> --}}
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center text-mute" colspan="10">Data peminjaman tidak tersedia</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $pengembalian->links() }}
        </div>
        {{-- {{ $katalog->links() }} --}}
        {{-- </div> --}}
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

<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
    class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-full sm:hidden hover:bg-blue-100 hover:text-blue-950 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd"
            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
        </path>
    </svg>
</button>

<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">

    <div class="block max-w-sm px-4 ps-5 h-full bg-white dark:bg-gray-800 dark:border-gray-700">
        <div class="h-full py-4 overflow-x-hidden overflow-y-auto dark:bg-gray-800">
            <a href="#" class="flex justify-center w-full items-center mb-5">
                <img src="logo-perpus.png" class="w-32" alt="Flowbite Logo" />
                <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
            </a>
            <ul class="space-y-2">
                <li>
                    <a href="/"
                        class="{{ request()->is('/') ? 'active-nav text-blue-950 font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-2 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            dashboard
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/koleksi"
                        class="{{ request()->is('koleksi') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-2 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            collections_bookmark
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Koleksi</span>
                        {{-- <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                    </a>
                </li>
                <li>
                    <a href="/peminjaman"
                        class="{{ request()->is('data-pinjam') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-2 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            share_windows
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Peminjaman</span>
                        {{-- <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="{{ request()->is('pengembalian') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-2 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            text_select_jump_to_beginning
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Pengembalian</span>
                        {{-- <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                    </a>
                </li>
                <li>
                    <a href="/penerbit"
                        class="{{ request()->is('penerbit') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-2 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            text_select_jump_to_beginning
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Penerbit</span>
                        {{-- <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                    </a>
                </li>
                <li>
                    <a href="/anggota"
                        class="{{ request()->is('anggota', 'tambah-anggota') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-2 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            assignment_ind
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Anggota</span>
                    </a>
                </li>
                <li>
                    <a href="/kunjungan"
                        class="{{ request()->is('kunjungan', 'tambah-kunjungan') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-2 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            assignment_ind
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Pengunjung</span>
                    </a>
                </li>
                <li>
                    <a href="/users"
                        class="{{ request()->is('users') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-2 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            manage_accounts
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Pengguna</span>
                    </a>
                </li>
                <li>
                    <a type="button"
                        class="{{ request()->is('administrasi/perolehan') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} cursor-pointer mx-2 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <span class="material-symbols-rounded">
                            folder_managed
                        </span>
                        <span class="flex-1 ms-3 text-left rtl:text-right text-md whitespace-nowrap">Administrasi</span>
                        <span class="material-symbols-rounded ">
                            arrow_drop_down
                        </span>
                    </a>
                    <ul id="dropdown-example" class="hidden ms-3 py-2 space-y-2">
                        <li>
                            <a href="/administrasi/perolehan"
                                class="{{ request()->is('administrasi/perolehan') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-4 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                                <span class="material-symbols-rounded">
                                    folder_supervised
                                </span>
                                <span class="flex-1 ms-3 text-sm whitespace-nowrap">Sumber Perelohan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/administrasi/klasifikasi"
                                class="{{ request()->is('klasifikasi') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-4 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                                <span class="material-symbols-rounded">
                                    barcode
                                </span>
                                <span class="flex-1 ms-3 text-sm whitespace-nowrap">Kode DDC</span>
                            </a>
                        </li>
                        <li>
                            <a href="/administrasi/kelas"
                                class="{{ request()->is('kelas') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-4 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                                <span class="material-symbols-rounded">
                                    folder_supervised
                                </span>
                                <span class="flex-1 ms-3 text-sm whitespace-nowrap">Data Kelas</span>
                            </a>
                        </li>
                        <li>
                            <a href="/administrasi/pelanggaran"
                                class="{{ request()->is('pelanggaran') ? 'active-nav font-medium hover:bg-blue-100 hover:text-blue-950' : 'text-blue-950 rounded-full dark:text-white hover:bg-blue-100 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-4 px-4 py-3 flex items-center p-2 hover:text-gray-900 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                                <span class="material-symbols-rounded">
                                    barcode
                                </span>
                                <span class="flex-1 ms-3 text-sm whitespace-nowrap">Jenis Pelanggaran</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>

</aside>

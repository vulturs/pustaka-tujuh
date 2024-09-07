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

    <div class="block max-w-sm h-full bg-white dark:bg-gray-800 dark:border-gray-700">
        <div class="h-full overflow-x-hidden overflow-y-auto dark:bg-gray-800">
            <a href="#" class="flex my-1 ms-14 w-full items-center">
                <img src={{ asset('logo-perpus.png') }} class="w-32" />
                <!-- <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
            </a>
            <ul class="space-y-2 mt-5">
                <li>
                    <a href="/"
                        class="{{ request()->is('/') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-e-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} ps-10 py-3 flex items-center p-2 rounded-e-full me-8 dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            dashboard
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/koleksi"
                        class="{{ request()->is('koleksi', 'tambah-koleksi', 'koleksi/2/edit') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-e-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} ps-10 py-3 flex items-center p-2 rounded-e-full me-8 dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            collections_bookmark
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Koleksi</span>
                        {{-- <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                    </a>
                </li>
                <li>
                    <a href="/katalog"
                        class="{{ request()->is('katalog', 'katalog/add') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-e-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} ps-10 py-3 flex items-center p-2 rounded-e-full me-8 dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            featured_play_list
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Katalog</span>
                        {{-- <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                    </a>
                </li>
                <li>
                    <a href="/peminjaman"
                        class="{{ request()->is('peminjaman', 'tambah-peminjaman') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-e-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} ps-10 py-3 flex items-center p-2 rounded-e-full me-8 dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            share_windows
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Peminjaman</span>
                        {{-- <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                    </a>
                </li>
                <li>
                    <a href="/pengembalian"
                        class="{{ request()->is('pengembalian') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-e-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} ps-10 py-3 flex items-center p-2 rounded-e-full me-8 dark:text-white dark:hover:bg-gray-700 group">
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
                        class="{{ request()->is('penerbit', 'penerbit/add') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-e-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} ps-10 py-3 flex items-center p-2 rounded-e-full me-8 dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            captive_portal
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Penerbit</span>
                        {{-- <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span> --}}
                    </a>
                </li>
                <li>
                    <a href="/anggota"
                        class="{{ request()->is('anggota', 'tambah-anggota') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-e-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} ps-10 py-3 flex items-center p-2 rounded-e-full me-8 dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            assignment_ind
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Anggota</span>
                    </a>
                </li>
                <li>
                    <a href="/kunjungan"
                        class="{{ request()->is('kunjungan', 'tambah-kunjungan') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-e-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} ps-10 py-3 flex items-center p-2 rounded-e-full me-8 dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            person_raised_hand
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Pengunjung</span>
                    </a>
                </li>
                <li>
                    <a href="/users"
                        class="{{ request()->is('users') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-e-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} ps-10 py-3 flex items-center p-2 rounded-e-full me-8 dark:text-white dark:hover:bg-gray-700 group">
                        <span class="material-symbols-rounded">
                            manage_accounts
                        </span>
                        <span class="flex-1 ms-3 text-md whitespace-nowrap">Pengguna</span>
                    </a>
                </li>
                <li>
                    <a type="button"
                        class="{{ request()->is('administrasi/perolehan', 'administrasi/klasifikasi', 'administrasi/kelas', 'administrasi/pelanggaran') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-e-full dark:text-rounded-e-full hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} cursor-pointer ps-10 py-3 flex items-center p-2 rounded-e-full me-8 dark:text-white dark:hover:bg-gray-700 group"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <span class="material-symbols-rounded">
                            folder_managed
                        </span>
                        <span class="flex-1 ms-3 text-left rtl:text-right text-md whitespace-nowrap">Administrasi</span>
                        <span class="material-symbols-rounded ">
                            arrow_drop_down
                        </span>
                    </a>
                    <ul id="dropdown-example" class="hidden ms-6 py-2 space-y-2">
                        <li>
                            <a href="/administrasi/perolehan"
                                class="{{ request()->is('administrasi/perolehan') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-4 px-4 py-3 flex items-center p-2 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                                <span class="material-symbols-rounded">
                                    folder_supervised
                                </span>
                                <span class="flex-1 ms-3 text-sm whitespace-nowrap">Sumber Perelohan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/administrasi/klasifikasi"
                                class="{{ request()->is('administrasi/klasifikasi') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-e-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-4 px-4 py-3 flex items-center p-2 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                                <span class="material-symbols-rounded">
                                    barcode
                                </span>
                                <span class="flex-1 ms-3 text-sm whitespace-nowrap">Kode DDC</span>
                            </a>
                        </li>
                        <li>
                            <a href="/administrasi/kelas"
                                class="{{ request()->is('administrasi/kelas') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-4 px-4 py-3 flex items-center p-2 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                                <span class="material-symbols-rounded">
                                    folder_supervised
                                </span>
                                <span class="flex-1 ms-3 text-sm whitespace-nowrap">Data Kelas</span>
                            </a>
                        </li>
                        <li>
                            <a href="/administrasi/pelanggaran"
                                class="{{ request()->is('administrasi/pelanggaran') ? 'active-nav text-white font-medium' : 'text-blue-950 rounded-full dark:text-white hover:bg-purple-200 hover:text-blue-950 dark:hover:bg-gray-700' }} mx-4 px-4 py-3 flex items-center p-2 rounded-full dark:text-white dark:hover:bg-gray-700 group">
                                <span class="material-symbols-rounded">
                                    warning
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

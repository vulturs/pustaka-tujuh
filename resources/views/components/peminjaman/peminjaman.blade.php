<x-topbar :$title></x-topbar>

<div class="rounded-2xl bg-slate-100 p-5 mb-4" style="height:87vh;">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4 bg-white dark:bg-gray-900">
        <div class="flex items-center justify-between mb-5">
            <form action="/kunjungan" class="max-w-xs ml-0 mb-4 flex items-center justify-between">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative flex items-center">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="default-search"
                        class="block w-full p-2 pl-10 pr-16 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." name="search">
                    <button type="submit"
                        class="absolute right-2 top-1/2 transform -translate-y-1/2 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-xs px-3 py-1.5 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>
            <div class="text-right mb-3">
                <a href="{{ route('tambah-peminjaman') }}"
                    class="overflow-hidden relative flex p-2 px-4 bg-slate-800 text-white border-none rounded-md font-medium cursor-pointer relative z-10 group">
                    Peminjaman Baru <span class="material-symbols-rounded ps-2 text-sm text-white">
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
                        </span> Peminjaman
                    </span>
                </a>
            </div>
        </div>

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
                        ID Peminjaman
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Anggota
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Judul Buku
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pengarang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kode DDC
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Peminjaman
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Batas Pengembalian
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
        {{ $peminjaman->links() }}
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

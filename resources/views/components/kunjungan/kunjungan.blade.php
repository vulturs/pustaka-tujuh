<x-topbar></x-topbar>

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
            <a href="{{ route('tambah-kunjungan') }}"
                class="rounded-lg relative w-40 h-10 cursor-pointer flex items-center border border-green-500 bg-green-500 group hover:bg-green-500 active:bg-green-500 active:border-green-500">
                <span
                    class="text-gray-200 font-medium ml-8 transform group-hover:translate-x-20 transition-all duration-300">
                    Kunjungan</span>
                <span
                    class="absolute right-0 h-full w-10 rounded-lg bg-green-500 flex items-center justify-center transform group-hover:translate-x-0 group-hover:w-full transition-all duration-300">
                    <span class="material-symbols-rounded text-white">
                        add
                    </span>
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
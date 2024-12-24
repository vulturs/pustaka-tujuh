<x-topbar :$title></x-topbar>

<div class="rounded-2xl bg-slate-100 p-5 mb-4">
    <div class="relative overflow-x-auto shadow-cust sm:rounded-lg p-4 bg-white dark:bg-gray-900">
        <div class="flex items-center justify-between mb-5">
            <div class="flex items-baseline">
                <form action="/penerbit" class="w-80 ml-0 mb-4 flex items-center justify-between">
                    <div class="w-full">
                        <div
                            class="relative rounded-full border border-slate-200 overflow-hidden bg-white drop-shadow-lg w-full">
                            <input type="text" name="search" placeholder="Cari penerbit"
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

            </div>
            <a href="{{ route('tambah-penerbit') }}"
                class="overflow-hidden flex p-2 px-4 bg-slate-800 text-white border-none rounded-md font-medium cursor-pointer relative z-10 group">
                Penerbit Baru <span class="material-symbols-rounded ps-2 text-sm text-white">
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
                    </span> Penerbit
                </span>
            </a>
        </div>


        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-0 text-center py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Penerbit
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 text-center py-3">
                        Created By
                    </th>
                    <th scope="col" class="px-6 text-center py-3">
                        Created At
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
        {{ $penerbit->links() }}
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

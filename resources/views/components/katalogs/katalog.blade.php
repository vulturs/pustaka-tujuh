<x-topbar :$title></x-topbar>

<div class="rounded-2xl bg-slate-100 overflow-y-auto">
    {{-- <div class="shadow-md rounded-xl p-4 bg-white dark:bg-gray-900"> --}}
    <div class="flex items-center p-6 pb-4 px-8 justify-between">
        <form action="/katalog" class="max-w-xs ml-0 mb-4 flex items-center justify-between">
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
            <a href="{{ route('tambah-katalog') }}"
                class="overflow-hidden relative flex p-2 px-4 bg-slate-800 text-white border-none rounded-md font-medium cursor-pointer relative z-10 group">
                Katalog Baru <span class="material-symbols-rounded ps-2 text-sm text-white">
                    add
                </span>
                <span
                    class="absolute w-36 h-32 -top-9 -left-2 bg-white rotate-12 transform scale-x-0 group-hover:scale-x-150 transition-transform group-hover:duration-500 duration-1000 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-9 -left-2 bg-purple-400 rotate-12 transform scale-x-0 group-hover:scale-x-150 transition-transform group-hover:duration-700 duration-700 origin-left"></span>
                <span
                    class="absolute w-36 h-32 -top-9 -left-2 bg-purple-800 rotate-12 transform scale-x-0 group-hover:scale-x-150 transition-transform group-hover:duration-1000 duration-500 origin-left"></span>
                <span
                    class="flex group-hover:opacity-100 group-hover:duration-1000 duration-100 opacity-0 absolute top-2 left-8 z-10">
                    <span class="material-symbols-rounded pe-2 text-sm text-white">
                        add
                    </span> Katalog
                </span>
            </a>
        </div>
    </div>


    <div class="mx-8">
        <div class="overflow-y-auto grid lg:grid-cols-3 md:grid-cols-1 sm:grid-cols-1 gap-2">
            @forelse ($katalog as $kat)
                @php
                    $call = $kat->callNumber;
                    $cn = explode(' ', $call);
                @endphp
                <div class="bg-white rounded-xl shadow-lg mb-6 relative group" style="width: 472px; height:283px;">
                    <div
                        class="absolute flex flex-col top-0 right-0 transform translate-x-full opacity-0 transition-all duration-200 group-hover:translate-x-0 group-hover:opacity-100">
                        <form action="{{ route('delete-katalog', $kat->id_katalog) }}" method="POST"
                            style="display:inline;"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                            @csrf
                            @method('DELETE')
                            <button>
                                <span
                                    class="material-symbols-rounded text-red-500 box-border border-2 p-1.5 cursor-pointer transition-all hover:bg-red-500 hover:text-white border-red-500 rounded-tr-xl">
                                    delete
                                </span>
                            </button>
                        </form>
                        <a href="{{ route('edit-katalog', $kat->id_katalog) }}">
                            <span
                                class="material-symbols-rounded text-orange-400 box-border border-x-2 p-1.5 cursor-pointer transition-all hover:bg-orange-400 hover:text-white border-orange-400">
                                edit_square
                            </span>
                        </a>
                        <a href="{{ route('katalog-detail', $kat->id_katalog) }}">
                            <span
                                class="material-symbols-rounded text-blue-400 box-border border-2 p-1.5 cursor-pointer transition-all hover:bg-blue-400 hover:text-white border-blue-400 rounded-bl-xl">
                                info
                            </span>
                        </a>
                    </div>
                    <table class="m-5">
                        <tr>
                            <td class="pe-4 font-bold pb-1">
                                {{ $cn[0] }}
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-4 font-bold pb-1">
                                {{ $cn[1] }}
                            </td>
                            <td colspan=2 class="pb-1">
                                {{ $kat->pengarang }}
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-4 font-bold pb-1">
                                {{ $cn[2] }}
                            </td>
                            <td colspan=2>
                                {{ $kat->judul_buku }}/{{ $kat->pengarang }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan=2>
                                {{ $kat->edisi }}. - {{ $kat->kotaTerbit }}:{{ $kat->nama_penerbit }},
                                {{ $kat->tahunTerbit }}.
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan=2>
                                {{ $kat->jumlah_hal }} hlm.; {{ $kat->dimensi }}cm.
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan=2><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan=2>
                                ISBN {{ $kat->ISBN }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="w-56">
                                1. {{ $kat->catatan }}
                            </td>
                            <td>I. Judul</td>
                        </tr>
                    </table>
                </div>
            @empty
                <table>
                    <tr>
                        <td>Kosong</td>
                    </tr>
                </table>
            @endforelse
        </div>
    </div>
    {{ $katalog->links() }}
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

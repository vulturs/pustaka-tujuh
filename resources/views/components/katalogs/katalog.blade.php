<x-topbar :$title></x-topbar>

<div class="rounded-2xl bg-slate-100 overflow-y-auto">
    {{-- <div class="shadow-md rounded-xl p-4 bg-white dark:bg-gray-900"> --}}
    <div class="flex items-center p-6 pb-4 px-8 justify-between">
        <form action="/katalog" class="w-1/4 ml-0 mb-4 flex items-center justify-between">
            <div class="w-full">
                <div class="relative rounded-full overflow-hidden bg-white drop-shadow-lg w-full">
                    <input type="text" name="search" placeholder="Cari Katalog"
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
        <div class="text-right mb-3">
            <a href="{{ route('tambah-katalog') }}"
                class="overflow-hidden flex p-2 px-4 bg-slate-800 text-white border-none rounded-md font-medium cursor-pointer relative z-10 group">
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
    <div class="px-8 mb-8">
        {{ $katalog->links() }}
    </div>
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

<x-topbar :$title></x-topbar>

<div class="rounded-2xl bg-slate-100 xl:h-[85vh] overflow-y-auto 2xl:h-[88vh]">
    {{-- <div class="shadow-md rounded-xl p-4 bg-white dark:bg-gray-900"> --}}
    <div class="flex items-center p-6 pb-4 lg:px-6 2xl:px-8 justify-between">
        <form action="/katalog" class="xl:w-2/4 2xl:w-1/4 ml-0 mb-4 flex items-center justify-between">
            <div class="w-full">
                <div class="relative rounded-full overflow-hidden bg-white drop-shadow-lg w-full">
                    <input type="text" name="search" placeholder="Cari Katalog"
                        class="input bg-transparent outline-none border-none pl-8 pr-10 py-3.5 2xl:py-3 w-full font-sans 2xl:text-lg font-semibold" />
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


    <div class="">
        <div
            class="overflow-y-auto pb-8 lg:px-6 2xl:px-8 overflow-x-hidden grid lg:grid-cols-2 2xl:grid-cols-3 sm:grid-cols-1 gap-6">
            @forelse ($katalog as $kat)
                @php
                    $call = $kat->callNumber;
                    $cn = explode(' ', $call);
                @endphp
                <div class="relative group">
                    <div id="card-kat"
                        class="bg-white h-[280px] z-20 py-1 lg:text-sm 2xl:text-base rounded-xl drop-shadow-xl relative group">
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
                                <td colspan=2 class="capitalize">
                                    {{ $kat->judul_buku }}/{{ $kat->pengarang }}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan=2>
                                    {{ $kat->edisi }}. - {{ $kat->kota_terbit }}:{{ $kat->nama_penerbit }},
                                    {{ $kat->tahun }}.
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan=2>
                                    {{ $kat->jum_hlm }} hlm.; {{ $kat->dimensi }}cm.
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan=2><br></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan=2>
                                    ISBN {{ $kat->isbn }}
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="w-56">
                                    1. {{ $kat->judul_buku }}
                                    {{-- 1. {{ $kat->subjek }} --}}
                                </td>
                                <td>I. Judul</td>
                            </tr>
                        </table>
                    </div>
                    {{-- <div
                        class="absolute top-1/2 right-0 transform -translate-y-1/2 transition-transform duration-300 group-hover:translate-x-3/4">
                        <img class="rounded-xl drop-shadow-lg h-[15rem]"
                            src="{{ asset('storage/cover-images/' . $kat->cover) }}" alt="">
                    </div> --}}
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
    <div class="">
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

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <style>
        @media print {
            @page {
                size: 12.5cm 7.5cm;
                /* Mengatur ukuran kertas */
                margin: 0.5cm;
                /* Mengatur margin */
            }

            /* Mengatur elemen agar tampil optimal saat cetak */
            body {
                margin: 0;
                padding: 0;
            }

            .print-container {
                width: 100%;
                height: 100%;
                transform: scale(1);
                /* Menyesuaikan ukuran elemen untuk cetak */
                box-shadow: none;
                /* Menghapus bayangan saat cetak */
                margin: 0;
                padding: 0;
            }

            /* Menyembunyikan elemen yang tidak perlu saat mencetak */
            .no-print {
                display: none;
            }
        }
    </style>
    <x-topbar :$title></x-topbar>

    <div
        class="p-5 grid 2xl:grid-cols-2 lg:grid-cols-1 md:grid-cols-1 sm:grid-cols-1 lg:gap-5 2xl:gap-2 overflow-y-auto bg-slate-100 xl:h-[85vh] 2xl:h-[88vh] rounded-2xl justify-start mb-4">
        <div class="w-fit h-fit px-3 py-5 rounded-lg bg-white text-gray-700 shadow-lg">
            <div class="flex flex-col mx-4">
                <h1 class="text-2xl font-semibold mb-2">
                    Detail Katalog
                </h1>
                <hr class="border-purple-400">
                <div class="py-3">
                    <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            Call Number
                        </h3>
                        <span class="font-semibold">{{ $katalog->callNumber }}</span>
                    </div>

                    <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            Judul
                        </h3>
                        <span class="font-semibold">{{ $katalog->judul_buku }}</span>
                    </div>

                    <div class="flex justify-between gap-5">
                        <div class="mb-2 w-52">
                            <h3 class="font-medium text-sm text-slate-400">
                                Pengarang
                            </h3>
                            <span class="font-semibold">{{ $katalog->pengarang }}</span>
                        </div>
                        <div class="mb-2 w-52">
                            <h3 class="font-medium text-sm text-slate-400">
                                Penerbit
                            </h3>
                            <span class="font-semibold">{{ $katalog->nama_penerbit }}</span>
                        </div>
                        <div class="mb-2">
                            <h3 class="font-medium text-sm text-slate-400">
                                Kode DDC
                            </h3>
                            <span class="font-semibold">{{ $katalog->kode_ddc }}</span>
                        </div>
                    </div>
                    <hr class="mb-2">
                    {{-- <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            Penanggung Jawab
                        </h3>
                        <span class="font-semibold">{{ $katalog->penanggung_jawab }}</span>
                    </div> --}}
                    <div class="flex justify-between w-fit">
                        <div class="mb-2 me-40">
                            <h3 class="font-medium text-sm text-slate-400">
                                Kota Terbit
                            </h3>
                            <span class="font-semibold">{{ $katalog->kota_terbit }}</span>
                        </div>
                        <div class="mb-2">
                            <h3 class="font-medium text-sm text-slate-400">
                                Tahun Terbit
                            </h3>
                            <span class="font-semibold">{{ $katalog->tahun }}</span>
                        </div>
                    </div>
                    <hr class="mb-2">
                    <div class="flex">
                        <div class="mb-2 me-32">
                            <h3 class="font-medium text-sm text-slate-400">
                                Halaman
                            </h3>
                            <span class="font-semibold">{{ $katalog->jum_hlm }}</span>
                        </div>
                        <div class="mb-2">
                            <h3 class="font-medium text-sm text-slate-400">
                                Dimensi
                            </h3>
                            <span class="font-semibold">{{ $katalog->dimensi }}</span>
                        </div>
                    </div>
                    <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            Edisi
                        </h3>
                        <span class="font-semibold">{{ $katalog->edisi }}</span>
                    </div>
                    <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            ISBN
                        </h3>
                        <span class="font-semibold">{{ $katalog->isbn }}</span>
                    </div>
                    <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            Subjek
                        </h3>
                        {{-- <span class="font-semibold">{{ $katalog->judul_buku }}</span> --}}
                        <span class="font-semibold">{{ $katalog->subjek ?? 'Belum di isi' }}</span>
                    </div>
                </div>
                {{-- <div class="w-full"> --}}
                <a href="/katalog"
                    class="border-2 mb-2 rounded-md transition-all ease-in-out duration-200 hover:bg-red-600 hover:text-white border-red-600 p-3 text-red-600 text-center font-semibold w-full">KEMBALI</a>
                {{-- </div> --}}
            </div>
        </div>


        <div class="relative items-center flex gap-6">
            <div class="relative">
                <div class="bg-white rounded-xl p-1 shadow-lg mb-2 w-[472px] h-[283px]">
                    @php
                        $call = $katalog->callNumber;
                        $cn = explode(' ', $call);
                    @endphp
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
                                {{ $katalog->pengarang }}
                            </td>
                        </tr>
                        <tr>
                            <td class="pe-4 font-bold pb-1">
                                {{ $cn[2] }}
                            </td>
                            <td colspan=2>
                                {{ $katalog->judul_buku }}/{{ $katalog->pengarang }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan=2>
                                {{ $katalog->edisi }}. - {{ $katalog->kota_terbit }}:{{ $katalog->nama_penerbit }},
                                {{ $katalog->tahun }}.
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan=2>
                                {{ $katalog->jum_hlm }} hlm.; {{ $katalog->dimensi }}cm.
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan=2><br></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan=2>
                                ISBN {{ $katalog->isbn }}
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="w-56">
                                {{-- 1. {{ $katalog->subjek }} --}}
                                1. {{ $katalog->judul }}
                            </td>
                            <td>I. Judul</td>
                        </tr>
                    </table>
                </div>
                <a href="{{ route('print-katalog', $katalog->id_katalog) }}" target="_blank"
                    class="cursor-pointer left-10 relative bg-violet-500 rounded-b-md text-white font-medium transition duration-300 ease-in-out hover:bg-violet-700 hover:shadow-xl hover:shadow-violet-500 focus:ring-violet-300 focus:shadow-violet-400 px-5 py-2">
                    Cetak Katalog
                </a>

            </div>
            <div class="rounded-2xl w-[12rem] bg-white p-2 h-[18.7rem] drop-shadow-2xl">
                <h1 class="text-center mb-1 font-semibold">Cover</h1>
                <img class="rounded-xl h-[16rem] w-[12rem]"
                    src="{{ asset('storage/cover-images/' . $katalog->cover) }}" alt="">
            </div>
        </div>

    </div>

</x-layout>

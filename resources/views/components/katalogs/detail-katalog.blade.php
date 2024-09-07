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
        class="p-5 grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-2 bg-slate-100 rounded-2xl items-center justify-start mb-4">
        <div class="w-fit px-3 py-5 rounded-lg bg-white text-gray-700 shadow-lg">
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

                    <div class="flex justify-between">
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
                    <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            Penanggung Jawab
                        </h3>
                        <span class="font-semibold">{{ $katalog->penanggung_jawab }}</span>
                    </div>
                    <div class="flex justify-between w-fit">
                        <div class="mb-2 me-40">
                            <h3 class="font-medium text-sm text-slate-400">
                                Kota Terbit
                            </h3>
                            <span class="font-semibold">{{ $katalog->kotaTerbit }}</span>
                        </div>
                        <div class="mb-2">
                            <h3 class="font-medium text-sm text-slate-400">
                                Tahun Terbit
                            </h3>
                            <span class="font-semibold">{{ $katalog->tahunTerbit }}</span>
                        </div>
                    </div>
                    <hr class="mb-2">
                    <div class="flex">
                        <div class="mb-2 me-32">
                            <h3 class="font-medium text-sm text-slate-400">
                                Halaman
                            </h3>
                            <span class="font-semibold">{{ $katalog->jumlah_hal }}</span>
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
                        <span class="font-semibold">{{ $katalog->ISBN }}</span>
                    </div>
                    <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            Subjek
                        </h3>
                        <span class="font-semibold">{{ $katalog->catatan }}</span>
                    </div>
                </div>
            </div>

        </div>


        <div>
            <div class="bg-white rounded-xl p-1 shadow-lg mb-6 group" style="width: 472px; height:283px; scale:1.2;">
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
                            {{ $katalog->edisi }}. - {{ $katalog->kotaTerbit }}:{{ $katalog->nama_penerbit }},
                            {{ $katalog->tahunTerbit }}.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan=2>
                            {{ $katalog->jumlah_hal }} hlm.; {{ $katalog->dimensi }}cm.
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan=2><br></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td colspan=2>
                            ISBN {{ $katalog->ISBN }}
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="w-56">
                            1. {{ $katalog->catatan }}
                        </td>
                        <td>I. Judul</td>
                    </tr>
                </table>
            </div>
            <a href="{{ route('print-katalog', $katalog->id_katalog) }}" target="_blank"
                class="cursor-pointer relative top-3 bg-violet-500 rounded-b-md text-white font-medium transition duration-300 ease-in-out hover:bg-violet-700 hover:shadow-xl hover:shadow-violet-500 focus:ring-violet-300 focus:shadow-violet-400 px-5 py-2">
                Cetak Katalog
            </a>

        </div>

    </div>

</x-layout>

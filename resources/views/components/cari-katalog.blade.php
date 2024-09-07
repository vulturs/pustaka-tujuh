<x-head>
    <x-slot:title>{{ $title }}</x-slot:title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #c9d6ff;
            background: linear-gradient(to right, #e2e2e2, #c9d6ff);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            height: 100vh;
        }

        .custom-container {
            /* background-color: #fff; */
            border-radius: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
            position: relative;
            overflow: hidden;
            /* width: 100%; */
            max-width: 120%;
            min-height: 480px;
        }

        /* Untuk browser berbasis WebKit seperti Chrome, Safari */
        #container::-webkit-scrollbar {
            width: 0;
            /* Menghilangkan scrollbar */
            height: 0;
        }

        /* Untuk Firefox */
        #container {
            scrollbar-width: none;
            /* Menghilangkan scrollbar */
            -ms-overflow-style: none;
            /* Untuk Internet Explorer dan Edge */
        }
    </style>
    <div class="h-screen w-full fixed overflow-x-hidden">
        <img class="h-screen w-full z-0 object-cover top-40" src="bg-login5.jpg" alt="">
    </div>

    <a href="{{ route('login') }}"
        class="absolute items-center flex top-8 left-0 z-20 p-3 px-5 bg-white font-semibold uppercase hover:drop-shadow-xl drop-shadow-lg">
        <span class="material-symbols-rounded me-3">
            arrow_back
        </span>
        Kembali</a>
    <div class="custom-container backdrop-blur-lg bg-white/30 my-10 p-10">


        <div class="mb-12 sm:w-2/3 lg:w-1/3">
            <div class="relative rounded-full overflow-hidden bg-white drop-shadow-lg w-full">
                <input type="text" name="text" placeholder="Cari Katalog"
                    class="input bg-transparent outline-none border-none pl-8 pr-10 py-3 w-full font-sans text-lg font-semibold" />
                <div class="absolute right-0 top-0">
                    <button
                        class="p-3.5 px-4 rounded-full bg-black group shadow-xl flex items-center justify-center relative overflow-hidden">
                        <span class="material-symbols-rounded text-white">
                            search
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="overflow-y-auto max-h-full grid md:grid-cols-1 lg:grid-cols-3 gap-5" id="container">
            @forelse ($katalog as $kat)
                @php
                    $call = $kat->callNumber;
                    $cn = explode(' ', $call);
                @endphp
                <div class="bg-white rounded-xl drop-shadow-lg relative group" style="width: 472px; height:283px;">

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
        <div class="mt-3">
            {{ $katalog->links() }}
        </div>
    </div>
</x-head>

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
            /* max-width: 120%; */
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

    <div class="custom-container backdrop-blur-lg bg-white/30 xl:my-6 xl:p-6 2xl:my-10 2xl:p-10 xl:w-[95%] 2xl:w-11/12">

        <div class="lg:mb-8 2xl:!mb-12 sm:w-2/3 lg:w-1/3">
            <div class="relative rounded-full overflow-hidden bg-white drop-shadow-lg w-full">
                <input type="text" name="text" placeholder="Cari Katalog"
                    class="input bg-transparent outline-none border-none pl-8 pr-10 py-3 w-full font-sans 2xl:!text-lg font-semibold" />
                <div class="absolute right-0 top-0">
                    <button
                        class="lg:p-3 2xl:!p-3.5 2xl:!px-4 rounded-full bg-black group shadow-xl flex items-center justify-center relative overflow-hidden">
                        <span class="material-symbols-rounded text-white">
                            search
                        </span>
                    </button>
                </div>
            </div>
        </div>

        <div class="overflow-y-auto overflow-x-hidden max-h-full grid md:grid-cols-1 xl:grid-cols-3 2xl:grid-cols-3 gap-5 pb-3"
            id="container">
            @forelse ($katalog as $kat)
                @php
                    $call = $kat->callNumber;
                    $cn = explode(' ', $call);
                @endphp
                <div
                    class="bg-white lg:w-[377.6px] lg:h-[226.4px] 2xl:w-[472px] 2xl:h-[283px] rounded-xl drop-shadow-lg relative group lg:text-xs 2xl:!text-base">
                    <div
                        class="absolute flex flex-col top-0 right-0 transform translate-x-full opacity-0 transition-all duration-200 group-hover:translate-x-0 group-hover:opacity-100">
                        {{-- <a href="{{ route('katalog-detail-view', $kat->id_katalog) }}"> --}}
                        <button class="detailButton" data-id="{{ $kat->id_katalog }}"
                            data-judul="{{ $kat->judul_buku }}" data-pengarang="{{ $kat->pengarang }}"
                            data-edisi="{{ $kat->edisi }}" data-kota="{{ $kat->kotaTerbit }}"
                            data-penerbit="{{ $kat->nama_penerbit }}" data-tahun="{{ $kat->tahunTerbit }}"
                            data-halaman="{{ $kat->jumlah_hal }}" data-dimensi="{{ $kat->dimensi }}"
                            data-isbn="{{ $kat->ISBN }}" data-callNumber="{{ $kat->callNumber }}"
                            data-cover="{{ isset($kat->cover) && $kat->cover ? asset('storage/cover-images/' . $kat->cover) : asset('cover-images/no-photo.png') }}">
                            <div
                                class="flex p-2 cursor-pointer transition-all hover:bg-blue-500 text-white bg-blue-400 rounded-bl-xl rounded-tr-xl">
                                <div class="material-symbols-rounded me-1">
                                    info
                                </div>
                                <span class="font-semibold">Detail</span>
                            </div>
                        </button>
                    </div>
                    <table class="lg:m-4 2xl:m-5">
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
            @empty
                <table>
                    <tr>
                        <td>Kosong</td>
                    </tr>
                </table>
            @endforelse
        </div>
        <div class="">
            {{ $katalog->links() }}
        </div>
    </div>

    <div id="detailModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white max-w-2xl p-6 rounded-lg shadow-lg relative">
            <div class="flex gap-8">
                <div>
                    <h2 class="text-lg font-bold mb-4">Detail Buku</h2>
                    <div class="space-y-2">
                        <div class="flex -space-y-0.5 flex-col">
                            <span class="text-gray-500 lg:text-sm 2xl:text-base">Judul Buku</span>
                            <span id="modal-judul" class="2xl:text-lg font-medium capitalize"></span>
                        </div>
                        <div class="flex -space-y-0.5 flex-col">
                            <span class="text-gray-500 lg:text-sm 2xl:text-base">Pengarang</span>
                            <span id="modal-pengarang" class="2xl:text-lg font-medium capitalize"></span>
                        </div>
                        <div class="flex -space-y-0.5 flex-col">
                            <span class="text-gray-500 lg:text-sm 2xl:text-base">Penerbit</span>
                            <span id="modal-penerbit" class="2xl:text-lg font-medium capitalize"></span>
                        </div>
                        <div class="flex gap-3 justify-between">
                            <div class="flex -space-y-0.5 flex-col">
                                <span class="text-gray-500 lg:text-sm 2xl:text-base">Kota Terbit</span>
                                <span id="modal-kota" class="2xl:text-lg font-medium capitalize"></span>
                            </div>

                            <div class="flex -space-y-0.5 flex-col">
                                <span class="text-gray-500 lg:text-sm 2xl:text-base">Tahun Terbit</span>
                                <span id="modal-tahun" class="2xl:text-lg font-medium capitalize"></span>
                            </div>
                        </div>
                        <div class="flex -space-y-0.5 flex-col">
                            <span class="text-gray-500 lg:text-sm 2xl:text-base">Edisi</span>
                            <span id="modal-edisi" class="2xl:text-lg font-medium capitalize"></span>
                        </div>
                        <div class="flex gap-3 justify-between">
                            <div class="flex -space-y-0.5 flex-col">
                                <span class="text-gray-500 lg:text-sm 2xl:text-base">Halaman</span>
                                <span id="modal-halaman" class="2xl:text-lg font-medium capitalize"></span>
                            </div>

                            <div class="flex -space-y-0.5 flex-col">
                                <span class="text-gray-500 lg:text-sm 2xl:text-base">Dimensi</span>
                                <span id="modal-dimensi" class="2xl:text-lg font-medium capitalize"></span>
                            </div>
                        </div>
                        <div class="flex -space-y-0.5 flex-col">
                            <span class="text-gray-500 lg:text-sm 2xl:text-base">ISBN</span>
                            <span id="modal-isbn" class="2xl:text-lg font-medium capitalize"></span>
                        </div>
                    </div>

                </div>
                <div>
                    <div class="rounded-2xl bg-white p-2 h-fit drop-shadow-2xl">
                        <h1 class="text-center mb-1 font-semibold">Cover</h1>
                        <div class="w-[13rem] h-[17rem]">
                            <img id="modal-cover" class="rounded-xl object-cover h-full w-full" src=""
                                alt="">
                        </div>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button id="closeModal"
                            class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded">
                            Tutup
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-head>
<script>
    // Ambil elemen tombol dan modal
    // Tangkap elemen
    const detailButtons = document.querySelectorAll('.detailButton');
    const detailModal = document.getElementById('detailModal');
    const closeModal = document.getElementById('closeModal');

    // Elemen modal untuk mengisi data
    const modalJudul = document.getElementById('modal-judul');
    const modalPengarang = document.getElementById('modal-pengarang');
    const modalEdisi = document.getElementById('modal-edisi');
    const modalKota = document.getElementById('modal-kota');
    const modalPenerbit = document.getElementById('modal-penerbit');
    const modalTahun = document.getElementById('modal-tahun');
    const modalHalaman = document.getElementById('modal-halaman');
    const modalDimensi = document.getElementById('modal-dimensi');
    const modalIsbn = document.getElementById('modal-isbn');
    // const modalSubjek = document.getElementById('modal-subjek');
    const modalCover = document.getElementById('modal-cover'); // Elemen img untuk cover

    // Tampilkan modal saat tombol detail diklik
    detailButtons.forEach(button => {
        button.addEventListener('click', () => {
            modalJudul.textContent = button.dataset.judul;
            modalPengarang.textContent = button.dataset.pengarang;
            modalEdisi.textContent = button.dataset.edisi;
            modalKota.textContent = button.dataset.kota;
            modalPenerbit.textContent = button.dataset.penerbit;
            modalTahun.textContent = button.dataset.tahun;
            modalHalaman.textContent = button.dataset.halaman;
            modalDimensi.textContent = button.dataset.dimensi;
            modalIsbn.textContent = button.dataset.isbn;
            // modalSubjek.textContent = button.dataset.subjek;
            // Perbarui src gambar cover
            modalCover.src = button.dataset.cover;

            detailModal.classList.remove('hidden');
            detailModal.classList.add('flex');
        });
    });

    // Tutup modal saat tombol "Tutup" diklik
    closeModal.addEventListener('click', () => {
        detailModal.classList.add('hidden');
        detailModal.classList.remove('flex');
    });

    // Tutup modal saat klik di luar modal
    window.addEventListener('click', (event) => {
        if (event.target === detailModal) {
            detailModal.classList.add('hidden');
            detailModal.classList.remove('flex');
        }
    });
</script>

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <x-topbar :$title></x-topbar>

    <div
        class="p-5 grid lg:grid-cols-2 md:grid-cols-1 sm:grid-cols-1 gap-2 bg-slate-100 rounded-2xl items-center justify-start mb-4">
        <div class="w-fit px-3 py-5 rounded-lg bg-white text-gray-700 shadow-lg">
            <div class="flex flex-col mx-4">
                <h1 class="text-2xl font-semibold mb-2">
                    Edit Katalog
                </h1>
                <hr class="border-purple-400">
                <div class="py-3">
                    <div class="border-dashed border-2 border-violet-800 p-4 rounded-xl mb-6">
                        <div class="mb-5 w-full">
                            <button onclick="myFunction()" id="dropbtn"
                                class="focus:outline-none w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                Pilih Koleksi
                            </button>
                            <div id="myDropdown"
                                class="dropdown-content hidden absolute mt-2 w-60 bg-white border border-gray-300 rounded-md shadow-lg z-10 dark:bg-gray-800 dark:border-gray-700">
                                <input type="text" placeholder="Masukkan Nama" id="myInput"
                                    onkeyup="filterFunction()"
                                    class="w-full px-4 py-2 border-b border-gray-300 dark:border-gray-700 focus:outline-none focus:border-green-500 dark:focus:border-green-500">
                                @foreach ($koleksi as $kol)
                                    <a href="#" id="cont" data-kode-buku="{{ $kol->kode_buku_induk }}"
                                        data-nama-buku="{{ $kol->judul_buku }}" data-kode-ddc="{{ $kol->kode_ddc }}"
                                        data-pengarang="{{ $kol->pengarang }}" data-penerbit="{{ $kol->nama_penerbit }}"
                                        onclick="fillInputs(this);"
                                        class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700">
                                        {{ $kol->judul_buku }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <form action="{{ route('update-katalog', $katalog->id_katalog) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-2">
                                <h3 class="font-medium text-sm text-slate-400">
                                    Call Number
                                </h3>
                                <input type="text" name="callNumber" id="callNumber"
                                    value="{{ $katalog->callNumber }}" class="font-semibold w-full">
                            </div>

                            <div class="mb-2">
                                <h3 class="font-medium text-sm text-slate-400">
                                    Judul
                                </h3>
                                <input type="text" name="judul_buku" id="judul_buku"
                                    value="{{ $katalog->judul_buku }}" class="font-semibold w-full">
                            </div>

                            <div class="flex justify-between">
                                <div class="mb-2 w-52">
                                    <h3 class="font-medium text-sm text-slate-400">
                                        Pengarang
                                    </h3>
                                    <input type="text" name="pengarang" id="pengarang"
                                        value="{{ $katalog->pengarang }}" class="font-semibold w-full">
                                </div>
                                <div class="mb-2 w-52">
                                    <h3 class="font-medium text-sm text-slate-400">
                                        Penerbit
                                    </h3>
                                    <input type="text" name="nama_penerbit" id="penerbit"
                                        value="{{ $katalog->nama_penerbit }}" class="font-semibold w-full">
                                </div>
                                <div class="mb-2">
                                    <h3 class="font-medium text-sm text-slate-400">
                                        Kode DDC
                                    </h3>
                                    <input type="text" name="kode_ddc" id="kode_ddc"
                                        value="{{ $katalog->kode_ddc }}" class="font-semibold w-full">
                                </div>
                            </div>

                    </div>
                    {{-- <hr class="mb-6"> --}}
                    <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            Penanggung Jawab
                        </h3>
                        <input type="text" name="penanggung_jawab" value="{{ $katalog->penanggung_jawab }}"
                            class="border rounded-lg px-3 py-2 w-full">
                    </div>
                    <div class="flex justify-between w-fit">
                        <div class="mb-2 me-40">
                            <h3 class="font-medium text-sm text-slate-400">
                                Kota Terbit
                            </h3>
                            <input type="text" name="kotaTerbit" value="{{ $katalog->kotaTerbit }}"
                                class="border rounded-lg px-3 py-2 w-full">
                        </div>
                        <div class="mb-2">
                            <h3 class="font-medium text-sm text-slate-400">
                                Tahun Terbit
                            </h3>
                            <input type="text" name="tahunTerbit" value="{{ $katalog->tahunTerbit }}"
                                class="border rounded-lg px-3 py-2 w-full">
                        </div>
                    </div>
                    <hr class="mb-2">
                    <div class="flex">
                        <div class="mb-2 me-32">
                            <h3 class="font-medium text-sm text-slate-400">
                                Halaman
                            </h3>
                            <input type="text" name="jumlah_hal" value="{{ $katalog->jumlah_hal }}"
                                class="border rounded-lg px-3 py-2 w-full">
                        </div>
                        <div class="mb-2">
                            <h3 class="font-medium text-sm text-slate-400">
                                Dimensi
                            </h3>
                            <input type="text" name="dimensi" value="{{ $katalog->dimensi }}"
                                class="border rounded-lg px-3 py-2 w-full">
                        </div>
                    </div>
                    <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            Edisi
                        </h3>
                        <input type="text" name="edisi" value="{{ $katalog->edisi }}"
                            class="border rounded-lg px-3 py-2 w-full">
                    </div>
                    <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            ISBN
                        </h3>
                        <input type="text" name="ISBN" value="{{ $katalog->ISBN }}"
                            class="border rounded-lg px-3 py-2 w-full">
                    </div>
                    <div class="mb-2">
                        <h3 class="font-medium text-sm text-slate-400">
                            Subjek
                        </h3>
                        <input type="text" name="catatan" value="{{ $katalog->catatan }}"
                            class="border rounded-lg px-3 py-2 w-full">
                    </div>
                </div>
                <div class="flex gap-5 justify-between">
                    <a href="/katalog"
                        class="border-2 w-full rounded-md transition-all ease-in-out duration-200 hover:bg-red-600 hover:text-white border-red-600 p-3 text-red-600 text-center font-semibold">KEMBALI</a>
                    <button type="submit"
                        class="border-2 w-full rounded-md transition-all ease-in-out duration-200 hover:bg-green-600 hover:text-white border-green-600 p-3 text-green-600 text-center font-semibold">SIMPAN</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function fillInputs(element) {
            var kodeBukuInduk = element.getAttribute('data-kode-buku');
            var judulBuku = element.getAttribute('data-nama-buku');
            var ddc = element.getAttribute('data-kode-ddc');
            var pengarang = element.getAttribute('data-pengarang');
            var penerbit = element.getAttribute('data-penerbit');

            // Ambil 3 huruf pertama dari pengarang
            var pengarangInitials = pengarang.substring(0, 3).toUpperCase();

            // Ambil huruf pertama dari judul buku
            var judulInitial = judulBuku.charAt(0).toUpperCase();

            // Gabungkan kode DDC, pengarang, dan judul dengan spasi
            var callNumber = ddc + " " + pengarangInitials + " " + judulInitial;

            // Masukkan nilai ke input form
            document.getElementById('kode_buku_induk').value = kodeBukuInduk;
            document.getElementById('judul_buku').value = judulBuku;
            document.getElementById('klasifikasi').value = ddc;
            document.getElementById('callNumber').value = callNumber;
            document.getElementById('pengarang').value = pengarang;
            document.getElementById('penerbit').value = penerbit;
            document.getElementById('penanggung_jawab').value = pengarang;

            // Tutup dropdown
            document.getElementById("myDropdown").classList.add("hidden");
        }

        window.onclick = function(event) {
            if (!event.target.matches('#dropbtn') && !event.target.matches('#myInput')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('hidden')) {
                        openDropdown.classList.add('hidden');
                    }
                }
            }
        }

        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("hidden");
        }

        function filterFunction() {
            var input, filter, div, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");

            for (i = 0; i < a.length; i++) {
                var txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>

</x-layout>

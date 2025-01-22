<x-topbar :$title></x-topbar>

<div class="p-5 me-4 overflow-y-auto bg-slate-200 rounded-2xl mb-4 xl:h-[85vh] 2xl:h-[88vh]">
    <div
        class="relative mt-8 w-10/12 2xl:w-1/2 flex flex-col rounded-lg bg-white bg-clip-border text-gray-700 shadow-lg">
        <div
            class="relative mx-4 -mt-6 mb-4 grid h-16 place-items-center overflow-hidden rounded-md bg-violet-700 bg-clip-border text-white shadow-lg shadow-violet-500/40">
            <h3 class="block font-sans text-3xl font-medium leading-snug tracking-normal text-white antialiased">
                Tambah Katalog
            </h3>
        </div>
        <div class="flex flex-col gap-4 p-6">

            <div class="relative inline-block text-left">
                <button onclick="myFunction()" id="dropbtn"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Pilih Koleksi
                </button>
                <div id="myDropdown"
                    class="dropdown-content hidden absolute mt-2 w-60 max-h-[40vh] overflow-y-auto bg-white border border-gray-300 rounded-md shadow-lg z-10 dark:bg-gray-800 dark:border-gray-700">
                    <input type="text" placeholder="Masukkan Nama" id="myInput" onkeyup="filterFunction()"
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

            <form class="form" method="post" action="{{ route('store-katalog') }}">
                @csrf
                <div class="border-2 border-dashed border-purple-500 rounded-lg p-3">
                    <div class="flex flex-col">
                        <span class="text-slate-400 text-sm">Judul</span>
                        <input required class="font-medium text-md" placeholder="" type="text" id="judul_buku"
                            name="judul_buku" disabled>
                        {{-- <hr> --}}
                    </div>
                    <div class="flex gap-4">
                        <div class="mt-1 flex flex-col w-4/5">
                            <span class="text-slate-400 text-sm">Pengarang</span>
                            <input required class="font-medium text-sm" placeholder="" type="text" id="pengarang"
                                name="pengarang" disabled>
                            {{-- <hr> --}}
                        </div>
                        <div class="mt-1 flex flex-col w-4/5">
                            <span class="text-slate-400 text-sm">Penerbit</span>
                            <input required class="font-medium text-sm" placeholder="" type="text" id="penerbit"
                                name="penerbit" disabled>
                            {{-- <hr> --}}
                        </div>
                        <div class="mt-1 flex flex-col">
                            <span class="text-slate-400 text-sm">Kode DDC</span>
                            <input required class="font-medium text-sm" placeholder="" type="text" id="klasifikasi"
                                name="klasifikasi" disabled>
                            {{-- <hr> --}}
                        </div>
                    </div>
                </div>
                {{-- <input type="text" id="judul_buku" name="judul_buku" placeholder="Nama Buku"> --}}
                {{-- <input class="py-2 border border-slate-400 px-3 rounded-md" type="text" id="penanggung_jawab"
                    name="penanggung_jawab" placeholder="Penanggung Jawab"> --}}
                {{-- <input class="py-2 border border-slate-400 px-3 rounded-md" type="text" name="kotaTerbit"
                    placeholder="Kota Terbit"> --}}
                {{-- <input class="py-2 border border-slate-400 px-3 rounded-md" type="number" name="tahunTerbit"
                    placeholder="Tahun Terbit"> --}}
                {{-- <input class="py-2 border border-slate-400 px-3 rounded-md" type="number" name="jumlah_hal"
                    placeholder="Jumlah Halaman"> --}}
                {{-- <input class="py-2 border border-slate-400 px-3 rounded-md" type="number" name="dimensi"
                    placeholder="Dimensi"> --}}
                {{-- <input class="py-2 border border-slate-400 px-3 rounded-md" type="text" name="edisi"
                    placeholder="Edisi"> --}}
                <input class="py-2 border border-slate-400 px-3 rounded-md" type="text" id="callNumber"
                    name="callNumber" placeholder="Call Number">
                {{-- <input class="py-2 border border-slate-400 px-3 rounded-md" type="number" name="ISBN"
                    placeholder="ISBN"> --}}
                <input class="py-2 border border-slate-400 px-3 rounded-md" type="text" name="subjek"
                    placeholder="Subjek">

                <input type="hidden" name="created_by" value="{{ auth()->user()->id_user }}">
                <input type="hidden" id="kode_buku_induk" name="kode_buku_induk">
                <div class="flex gap-3 w-full mt-3 z-0">
                    <a class="fancy w-full p-3 border-2 border-red-600 before:bg-red-600 hover:bg-red-600"
                        href="{{ route('katalog') }}">
                        <span class="top-key"></span>
                        <span class="text text-red-600">Batal</span>
                        <span class="bottom-key-1"></span>
                        <span class="bottom-key-2"></span>
                    </a>
                    <button type="submit"
                        class="fancy w-full p-3 border-2 border-lime-500 before:bg-lime-500 hover:bg-lime-500">
                        <span class="top-key"></span>
                        <span class="text text-lime-500">Simpan</span>
                        <span class="bottom-key-1"></span>
                        <span class="bottom-key-2"></span>
                    </button>

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

        // Tutup dropdown setelah data berhasil diisi
        document.getElementById("myDropdown").classList.add("hidden");
    }

    window.onclick = function(event) {
        if (!event.target.matches('#dropbtn') && !event.target.matches('#myInput') && !event.target.closest(
                '.dropdown-content')) {
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

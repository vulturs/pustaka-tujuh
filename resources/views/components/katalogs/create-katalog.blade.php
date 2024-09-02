<x-topbar :$title></x-topbar>

<div class="p-5 me-4 bg-slate-200 rounded-2xl mb-4">
    <div class="relative mt-8 w-1/2 flex flex-col rounded-lg bg-white bg-clip-border text-gray-700 shadow-lg">
        <div
            class="relative mx-4 -mt-6 mb-4 grid h-16 place-items-center overflow-hidden rounded-md bg-cyan-500 bg-clip-border text-white shadow-lg shadow-cyan-500/40">
            <h3 class="block font-sans text-3xl font-medium leading-snug tracking-normal text-white antialiased">
                Tambah Katalog
            </h3>
        </div>
        <div class="flex flex-col gap-4 p-6">

            <div class="">
                <button onclick="myFunction()" id="dropbtn"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-sm px-5 py-2.5 me-2 ms-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Pilih Koleksi</button>
                <div id="myDropdown" class="dropdown-content">
                    <input type="text" placeholder="Masukkan Nama" id="myInput" onkeyup="filterFunction()">
                    @foreach ($koleksi as $kol)
                        <a href="#" id="cont" data-kode-buku="{{ $kol->kode_buku_induk }}"
                            data-nama-buku="{{ $kol->judul_buku }}" data-kode-ddc="{{ $kol->kode_ddc }}"
                            data-pengarang="{{ $kol->pengarang }}" data-penerbit="{{ $kol->nama_penerbit }}"
                            onclick="fillInputs(this);">
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
                    <div class="flex">
                        <div class="mt-1 flex flex-col">
                            <span class="text-slate-400 text-sm">Pengarang</span>
                            <input required class="font-medium text-sm" placeholder="" type="text" id="pengarang"
                                name="pengarang" disabled>
                            {{-- <hr> --}}
                        </div>
                        <div class="mt-1 flex flex-col">
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
                <input type="text" id="penanggung_jawab" name="penanggung_jawab" placeholder="Penanggung Jawab">
                <input type="text" name="kotaTerbit" placeholder="Kota Terbit">
                <input type="number" name="tahunTerbit" placeholder="Tahun Terbit">
                <input type="number" name="jumlah_hal" placeholder="Jumlah Halaman">
                <input type="number" name="dimensi" placeholder="Dimensi">
                <input type="text" name="edisi" placeholder="Edisi">
                <input type="text" id="callNumber" name="callNumber" placeholder="Call Number">
                <input type="number" name="ISBN" placeholder="ISBN">
                <input type="text" name="catatan" placeholder="Subjek">

                <input type="hidden" name="created_by" value="{{ auth()->user()->id_user }}">
                <input type="hidden" id="kode_buku_induk" name="kode_buku_induk">
                <div class="flex gap-3 w-full mt-3">
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
    // document.getElementById('klik').onclick = function() {
    //     document.getElementById('judul_buku').value = 'John Doe';
    // };
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
        document.getElementById("myDropdown").classList.remove("show");
    }


    window.onclick = function(event) {
        if (!event.target.matches('#dropbtn') && !event.target.matches('#myInput')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                a[i].style.display = "";
            } else {
                a[i].style.display = "none";
            }
        }
    }
</script>

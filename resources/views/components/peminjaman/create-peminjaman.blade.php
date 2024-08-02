<x-topbar :$title></x-topbar>

<div class="p-5 me-4 bg-slate-200 rounded-2xl mb-4">
    <div class="relative mt-8 w-1/2 flex flex-col rounded-lg bg-white bg-clip-border text-gray-700 shadow-lg">
        <div
            class="relative mx-4 -mt-6 mb-4 grid h-16 place-items-center overflow-hidden rounded-md bg-cyan-500 bg-clip-border text-white shadow-lg shadow-cyan-500/40">
            <h3 class="block font-sans text-3xl font-medium leading-snug tracking-normal text-white antialiased">
                Tambah Data Peminjaman
            </h3>
        </div>
        <div class="flex flex-col gap-4 p-6">
            {{-- <form class="form" action="/tambah-kunjungan"> --}}
            {{-- <label> --}}
            <div class="">
                <button onclick="myFunction()" id="dropbtn"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-sm px-5 py-2.5 me-2 ms-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Pilih Nama Angggota</button>
                <div id="myDropdown" class="dropdown-content">
                    <input type="text" placeholder="Masukkan Nama" id="myInput" onkeyup="filterFunction()">
                    @foreach ($anggotaAll as $all)
                        <a href="#$all->id_anggota" id="cont" data-id-anggota="{{ $all->id_anggota }}"
                            data-nama-anggota="{{ $all->nama_anggota }}" data-kelas="{{ $all->kelas }}"
                            onclick="fillInputs(this);">{{ $all->nama_anggota }}</a>
                    @endforeach
                </div>
            </div>
            <div class="">
                <button onclick="myFunctionBuku()" id="dropbtnBuku"
                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-sm px-5 py-2.5 me-2 ms-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    Pilih Judul Buku</button>
                <div id="myDropdownBuku" class="dropdown-content-buku">
                    <input type="text" placeholder="Masukkan Judul Buku" id="myInput1" onkeyup="filterFunctionBuku()">
                    @foreach ($koleksiAll as $kolAll)
                        <a id="cont" data-kode-buku-induk="{{ $kolAll->kode_buku_induk }}"
                            data-judul-buku="{{ $kolAll->judul_buku }}" data-pengarang="{{ $kolAll->pengarang }}" data-penerbit="{{ $kolAll->nama }}" data-klasifikasi="{{ $kolAll->kode_ddc }}"
                            onclick="fillInputsBuku(this);">{{ $kolAll->judul_buku }}</a>
                    @endforeach
                </div>
            </div>

            {{-- </label> --}}
            </form>
            <form class="form" method="post" action="{{ route('store-peminjaman') }}">
                @csrf
                <div class="flex mb-3 w-full">
                    <div class="">
                        <span class="text-slate-500">Nama Anggota : </span><br>
                        <input required class="font-medium text-lg" placeholder="" type="text" id="nama_anggota"
                            name="nama_anggota" disabled>
                    </div>
                    <div class="w-full">
                        <span class="text-slate-500">Kelas : </span><br>
                        <input required class="font-medium text-lg w-full" placeholder="" type="text" id="kelas"
                            name="kelas" disabled>
                    </div>
                </div>

    
                {{-- </label> --}}
                </form>
                <form class="form" method="post" action="{{ route('store-peminjaman') }}">
                    @csrf
                    <div class="flex mb-3 w-full">
                        <div class="">
                            <span class="text-slate-500">Judul Buku : </span><br>
                            <input required class="font-medium text-lg" placeholder="" type="text" id="judul_buku"
                                name="judul_buku" disabled>
                        </div>
                        <div class="w-full">
                            <span class="text-slate-500">Pengarang : </span><br>
                            <input required class="font-medium text-lg w-full" placeholder="" type="text" id="pengarang"
                                name="pengarang" disabled>
                        </div>
                        <div class="w-full">
                            <span class="text-slate-500">Penerbit : </span><br>
                            <input required class="font-medium text-lg w-full" placeholder="" type="text" id="penerbit"
                                name="penerbit" disabled>
                        </div>
                        <div class="w-full">
                            <span class="text-slate-500">Kode DDC : </span><br>
                            <input required class="font-medium text-lg w-full" placeholder="" type="text" id="klasifikasi"
                                name="klasifikasi" disabled>
                        </div>
                    </div>

                {{-- <label>
                    <textarea required="" name="tujuan_kunjungan" rows="2" placeholder="" class="input01">{{ old('kunjungan') }}</textarea>
                    <span>Tujuan Kunjungan</span>
                </label> --}}
                <div class="flex mb-3 w-full">
                    <div class="">
                        <span class="text-slate-500">Tanggal Pinjam : </span><br>
                        <input required class="font-medium text-lg" placeholder="" type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" readonly>
                    </div>
                    <div class="w-full">
                        <span class="text-slate-500">Batas Pengembalian : </span><br>
                        <input required class="font-medium text-lg w-full" placeholder="" type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" readonly>
                    </div>
                </div>
                
                <input type="hidden" name="created_by" value="{{ auth()->user()->id_user }}">
                <input type="hidden" id="id_anggota" name="id_anggota">
                <input type="hidden" id="kode_buku_induk" name="kode_buku_induk">
                
                {{-- <input type="date" id="tanggal_peminjaman" name="tanggal_peminjaman" disabled>
                <input type="date" id="tanggal_pengembalian" name="tanggal_pengembalian" disabled> --}}

                <div class="flex gap-3 w-full mt-3">
                    <a class="fancy w-full p-3 border-2 border-red-600 before:bg-red-600 hover:bg-red-600"
                        href="{{ route('kunjungan') }}">
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
      // Get the current date
        let currentDate = new Date();

        // Format the current date to YYYY-MM-DD
        let formattedCurrentDate = currentDate.toISOString().slice(0, 10);

        // Set the value of the input field to the current date
        document.getElementById('tanggal_peminjaman').value = formattedCurrentDate;

        // Add 3 days to the current date
        let returnDate = new Date(currentDate);
        returnDate.setDate(returnDate.getDate() + 3);

        // Format the return date to YYYY-MM-DD
        let formattedReturnDate = returnDate.toISOString().slice(0, 10);

        // Set the value of the input field to the return date
        document.getElementById('tanggal_pengembalian').value = formattedReturnDate;

    // document.getElementById('klik').onclick = function() {
    //     document.getElementById('nama_anggota').value = 'John Doe';
    // };
    function fillInputs(element) {
        var idAnggota = element.getAttribute('data-id-anggota');
        var namaAnggota = element.getAttribute('data-nama-anggota');
        var kelas = element.getAttribute('data-kelas');

        document.getElementById('id_anggota').value = idAnggota;
        document.getElementById('nama_anggota').value = namaAnggota;
        document.getElementById('kelas').value = kelas;

        document.getElementById("myDropdown").classList.remove("show");
    }

    function fillInputsBuku(element) {
        var kodeBuku = element.getAttribute('data-kode-buku-induk');
        var judulBuku = element.getAttribute('data-judul-buku');
        var pengarang = element.getAttribute('data-pengarang');
        var penerbit = element.getAttribute('data-penerbit');
        var klasifikasi = element.getAttribute('data-klasifikasi');

        document.getElementById('kode_buku_induk').value = kodeBuku;
        document.getElementById('judul_buku').value = judulBuku;
        document.getElementById('pengarang').value = pengarang;
        document.getElementById('penerbit').value = penerbit;
        document.getElementById('klasifikasi').value = klasifikasi;

        document.getElementById("myDropdownBuku").classList.remove("show");
    }

    //  

    window.onclick = function(event) {
        if (!event.target.matches('#dropbtn') && !event.target.matches('#myInput')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }else if (!event.target.matches('#dropbtnBuku') && !event.target.matches('#myInput1')) {
            var dropdowns = document.getElementsByClassName("dropdown-content-buku");
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

    function myFunctionBuku() {
        document.getElementById("myDropdownBuku").classList.toggle("show");
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

    function filterFunctionBuku() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput1");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdownBuku");
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

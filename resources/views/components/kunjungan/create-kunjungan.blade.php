<x-topbar :$title></x-topbar>

<div class="p-5 me-4 bg-slate-200 rounded-2xl mb-4">
    <div class="relative mt-8 w-1/2 flex flex-col rounded-lg bg-white bg-clip-border text-gray-700 shadow-lg">
        <div
            class="relative mx-4 -mt-6 mb-4 grid h-16 place-items-center overflow-hidden rounded-md bg-violet-700 bg-clip-border text-white shadow-lg shadow-violet-500/40">
            <h3 class="block font-sans text-3xl font-medium leading-snug tracking-normal text-white antialiased">
                Tambah Data Kunjungan
            </h3>
        </div>
        <div class="flex flex-col gap-4 p-6">
            {{-- <form class="form" action="/tambah-kunjungan"> --}}
            {{-- <label> --}}
            <div class="">
                <button onclick="toggleDropdown()" id="dropbtn"
                    class="focus:outline-none text-white bg-violet-800 hover:bg-violet-700 focus:ring-4 focus:ring-violet-300 font-medium rounded-md text-sm px-5 py-2.5 me-2 ms-5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-800">
                    Pilih Anggota
                </button>
                <div id="myDropdown"
                    class="dropdown-content h-72 overflow-y-auto hidden absolute mt-2 w-60 bg-white border border-gray-300 rounded-md shadow-lg z-10 dark:bg-gray-800 dark:border-gray-700">
                    <input type="text" placeholder="Masukkan Nama" id="myInput" onkeyup="filterFunction()"
                        class="w-full sticky top-0 px-4 py-2 border-b border-gray-300 dark:border-gray-700 focus:outline-none focus:border-green-500 dark:focus:border-green-500">
                    @foreach ($anggotaAll as $all)
                        <a href="#$all->id_anggota" id="cont" data-id-anggota="{{ $all->id_anggota }}"
                            data-nama-anggota="{{ $all->nama_anggota }}" data-kelas="{{ $all->kelas }}"
                            onclick="fillInputs(this);"
                            class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-green-100 dark:hover:bg-green-700 cursor-pointer">
                            {{ $all->nama_anggota }}
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- </label> --}}
            </form>
            <form class="form" method="post" action="{{ route('store-kunjungan') }}">
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

                <label>
                    <textarea required="" name="tujuan_kunjungan" rows="2" placeholder="" class="input01">{{ old('kunjungan') }}</textarea>
                    <span>Tujuan Kunjungan</span>
                </label>

                <input type="hidden" name="created_by" value="{{ auth()->user()->id_user }}">
                <input type="hidden" id="id_anggota" name="id_anggota">

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
    // document.getElementById('klik').onclick = function() {
    //     document.getElementById('nama_anggota').value = 'John Doe';
    // };
    function toggleDropdown() {
        const dropdown = document.getElementById('myDropdown');
        dropdown.classList.toggle('hidden');
    }

    // Filter dropdown berdasarkan input
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

    // Mengisi input form berdasarkan pilihan dropdown
    function fillInputs(element) {
        var idAnggota = element.getAttribute("data-id-anggota");
        var namaAnggota = element.getAttribute("data-nama-anggota");
        var kelas = element.getAttribute("data-kelas");

        document.getElementById("id_anggota").value = idAnggota;
        document.getElementById("nama_anggota").value = namaAnggota;
        document.getElementById("kelas").value = kelas;

        // Menyembunyikan dropdown setelah memilih
        document.getElementById("myDropdown").classList.add("hidden");
    }

    // Tutup dropdown jika mengklik di luar area dropdown
    window.onclick = function(event) {
        if (!event.target.matches('#dropbtn') && !event.target.matches('#myInput')) {
            const dropdowns = document.getElementsByClassName('dropdown-content');
            for (let i = 0; i < dropdowns.length; i++) {
                const openDropdown = dropdowns[i];
                if (!openDropdown.classList.contains('hidden')) {
                    openDropdown.classList.add('hidden');
                }
            }
        }
    }
</script>

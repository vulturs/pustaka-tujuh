<x-topbar :$title></x-topbar>

<div class="p-5 me-4 bg-slate-200 rounded-2xl mb-4">
    <div class="relative mt-10 w-1/2 flex flex-col rounded-lg bg-white bg-clip-border text-gray-700 shadow-lg">
        <div class="relative mx-4 -mt-6 mb-4 grid h-16 place-items-center overflow-hidden rounded-md bg-cyan-500 bg-clip-border text-white shadow-lg shadow-cyan-500/40">
            <h3 class="block font-sans text-3xl font-medium leading-snug tracking-normal text-white antialiased">
                Edit Data Kunjungan
            </h3>
        </div>
        <div class="flex flex-col gap-4 p-6">
            <form class="form" method="post" action="/kunjungan/{{ $kunjungan->id_kunjungan }}/update">
                @method('put')
                @csrf
                <label>
                    <button type="button" onclick="myFunction()" id="dropbtn"
                        class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-md text-sm px-5 py-2.5 me-2 ms-5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        Pilih Nama Anggota
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <input type="text" placeholder="Masukkan Nama" id="myInput" onkeyup="filterFunction()">
                        @foreach ($anggota as $all)
                            <a href="#$all->id_anggota" id="cont" data-id-anggota="{{ $all->id_anggota }}"
                                data-nama-anggota="{{ $all->nama_anggota }}" data-kelas="{{ $all->kelas }}"
                                onclick="fillInputs(this);">{{ $all->nama_anggota }}</a>
                        @endforeach
                    </div>
                </label>

                <label>
                    <input required class="font-medium text-lg w-full" placeholder="Nama Anggota" type="text" id="nama_anggota" name="nama_anggota" 
                    value="{{ old('nama_anggota', $anggota->nama_anggota) }}" disabled>
                    <span>Nama Anggota</span>
                </label>

                <label>
                    <input required class="font-medium text-lg w-full" placeholder="Kelas" type="text" id="kelas" name="kelas"
                    value="{{ old('kelas', $anggota->kelas) }}" disabled>
                    <span>Kelas</span>
                </label>

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
    function fillInputs(element) {
        var idAnggota = element.getAttribute('data-id-anggota');
        var namaAnggota = element.getAttribute('data-nama-anggota');
        var kelas = element.getAttribute('data-kelas');

        document.getElementById('id_anggota').value = idAnggota;
        document.getElementById('nama_anggota').value = namaAnggota;
        document.getElementById('kelas').value = kelas;

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

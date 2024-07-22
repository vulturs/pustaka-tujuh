<x-topbar :$title></x-topbar>

<div class="p-5 me-4 bg-slate-200 rounded-2xl mb-4">
    <div class="relative mt-8 w-1/2 flex flex-col rounded-lg bg-white bg-clip-border text-gray-700 shadow-lg">
        <div
            class="relative mx-4 -mt-6 mb-4 grid h-16 place-items-center overflow-hidden rounded-md bg-cyan-500 bg-clip-border text-white shadow-lg shadow-cyan-500/40">
            <h3 class="block font-sans text-3xl font-medium leading-snug tracking-normal text-white antialiased">
                Tambah Data Kunjungan
            </h3>
        </div>
        <div class="flex flex-col gap-4 p-6">
            {{-- <form class="form" action="/tambah-kunjungan"> --}}
            {{-- <label> --}}
            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Pilih Nama Angggota</button>
                <div id="myDropdown" class="dropdown-content">
                    <input type="text" placeholder="Masukkan Nama" id="myInput" onkeyup="filterFunction()">
                    @foreach ($anggotaAll as $all)
                        {{-- <option value="{{ $all->id_anggota }}">{{ $all->nama_anggota }}</option> --}}
                        <a href="#" id="klik"
                            onclick = "function(){document.getElementById('nama_anggota').value =
                            'abc'};">{{ $all->nama_anggota }}</a>
                    @endforeach
                    {{-- <span id="klik">Base</span>
                        <span id="klik">Blog</span>
                        <span id="klik">Contact</span>
                        <span id="klik">Custom</span>
                        <span id="klik">Support</span>
                        <span id="klik">Tools</span> --}}
                </div>
            </div>

            {{-- </label> --}}
            </form>
            <form class="form" method="post" action="{{ route('store-kunjungan') }}">
                @csrf
                @if ('search' != '')
                    <label>
                        <input required placeholder="" type="text" id="nama_anggota" class="input"
                            name="nama_anggota" value="" disabled>
                        {{-- <span>Nama Anggota</span> --}}
                    </label>

                    <label>
                        <input required placeholder="" type="text" class="input" name="kelas"
                            value="{{ old('kelas', $anggota->kelas) }}" disabled>
                        {{-- <span>Kelas</span> --}}
                    </label>
                @endif

                <label>
                    <textarea required="" name="tujuan_kunjungan" rows="2" placeholder="" class="input01">{{ old('kunjungan') }}</textarea>
                    <span>Kunjungan</span>
                </label>

                <input type="hidden" name="created_by" value="{{ auth()->user()->id_user }}">
                <input type="hidden" name="id_anggota" value="{{ $anggota->id_anggota }}">

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
        {{-- <div class="p-6 pt-0"> --}}
        {{-- <button data-ripple-light="true" type="button"
            class="block w-full select-none rounded-lg bg-gradient-to-tr from-cyan-600 to-cyan-400 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-cyan-500/20 transition-all hover:shadow-lg hover:shadow-cyan-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
            Sign In
        </button> --}}
        {{-- </div> --}}
    </div>
</div>
<script>
    // document.getElementById('klik').onclick = function() {
    //     document.getElementById('nama_anggota').value = 'John Doe';
    // };

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

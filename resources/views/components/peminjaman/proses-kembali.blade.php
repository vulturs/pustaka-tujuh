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

            {{-- <div class="">
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
            </div> --}}

            <form class="form" method="post" action="{{ route('store-pengembalian') }}">
                @csrf
                <div class="border-2 border-dashed bg-slate-100 border-purple-500 rounded-lg">
                    <div class="flex p-3 pb-0">
                        <div class="flex flex-col mb-2">
                            <span class="text-slate-400 text-sm">ID Peminjaman</span>
                            <input required class="font-medium text-md" placeholder="" type="text" id="id_peminjaman"
                                name="id_peminjaman" value="{{ $pinjam->id_peminjaman }}" disabled>
                            <hr>
                        </div>
                        <div class="flex flex-col mb-2">
                            <span class="text-slate-400 text-sm">Peminjam</span>
                            <input required class="font-medium text-md" placeholder="" type="text" id="nama_angggota"
                                name="nama_angggota" value="{{ $pinjam->nama_anggota }}" disabled>
                            {{-- <hr> --}}
                        </div>
                    </div>
                    <div class="bg-white border-2 border-t-purple-500 border-dashed rounded-2xl p-4 pb-5 px-5">
                        <div class="flex flex-col">
                            <span class="text-slate-400 text-sm">Judul</span>
                            <input required class="font-medium text-md" placeholder="" type="text" id="judul_buku"
                                name="judul_buku" value="{{ $pinjam->judul_buku }}" disabled>
                            {{-- <hr> --}}
                        </div>
                        <div class="flex">
                            <div class="mt-1 flex flex-col">
                                <span class="text-slate-400 text-sm">Pengarang</span>
                                <input required class="font-medium text-sm" placeholder="" type="text" id="pengarang"
                                    name="pengarang" value="{{ $pinjam->pengarang }}" disabled>
                                {{-- <hr> --}}
                            </div>
                            <div class="mt-1 flex flex-col">
                                <span class="text-slate-400 text-sm">Penerbit</span>
                                <input required class="font-medium text-sm" placeholder="" type="text" id="penerbit"
                                    name="penerbit" value="{{ $pinjam->nama_penerbit }}" disabled>
                                {{-- <hr> --}}
                            </div>
                            <div class="mt-1 flex flex-col">
                                <span class="text-slate-400 text-sm">Kode DDC</span>
                                <input required class="font-medium text-sm" placeholder="" type="text"
                                    id="klasifikasi" name="klasifikasi" value="{{ $pinjam->kode_ddc }}" disabled>
                                {{-- <hr> --}}
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <input type="text" id="judul_buku" name="judul_buku" placeholder="Nama Buku"> --}}


                <div class="flex mb-3 w-full">
                    <div class="">
                        <span class="text-slate-500 text-sm">Tanggal Pinjam</span><br>
                        <input required class="font-medium text-lg" placeholder="" type="date-local"
                            id="tanggal_peminjaman"
                            value="{{ \Carbon\Carbon::parse($pinjam->tanggal_peminjaman)->format('d M Y') }}"
                            name="tanggal_peminjaman" readonly>
                    </div>
                    <div class="w-full">
                        <span class="text-slate-500 text-sm">Batas Pengembalian</span><br>
                        <input required class="font-medium text-lg w-full" placeholder="" type="date-local"
                            value="{{ \Carbon\Carbon::parse($pinjam->tanggal_pengembalian)->format('d M Y') }}"
                            id="tanggal_pengembalian" name="tanggal_pengembalian" readonly>
                    </div>
                    <div class="w-full">
                        <span class="text-slate-500 text-sm">Di Kembalikan Pada</span><br>
                        @if (now() <= $pinjam->tanggal_pengembalian)
                            <input required class="font-medium text-lg text-green-600 w-full" placeholder=""
                                type="date-local" value="{{ \Carbon\Carbon::parse(now())->format('d M Y') }}"
                                id="dikembalikan" name="dikembalikan" readonly>
                        @else
                            <input required class="font-medium text-lg text-red-600 w-full" placeholder=""
                                type="date-local" value="{{ \Carbon\Carbon::parse(now())->format('d M Y') }}"
                                id="dikembalikan" name="dikembalikan" readonly>
                        @endif
                    </div>
                </div>
                <div>
                    <select id="id_pelanggaran" name="id_pelanggaran" autocomplete="id_pelanggaran">
                        <option value="">-- Pelanggaran --</option>
                        @forelse ($pelanggaran as $langgar)
                            <option value="{{ $langgar->id_pelanggaran }}"
                                data-jenis="{{ $langgar->jenis_pelanggaran }}">
                                {{ $langgar->jenis_pelanggaran }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div>
                    <input type="number" id="denda" placeholder="Denda" name="denda" readonly>
                </div>
                <label>
                    <textarea name="keterangan" rows="2" placeholder="" class="input01">{{ old('keterangan') }}</textarea>
                    <span>Keterangan</span>
                </label>

                <input type="hidden" name="id_peminjaman" value="{{ $pinjam->id_peminjaman }}">
                <input type="hidden" name="kode_buku_induk" value="{{ $pinjam->kode_buku_induk }}">
                <input type="hidden" name="created_by" value="{{ auth()->user()->id_user }}">
                <input type="hidden" name="tanggal_dikembalikan" value="{{ now() }}">
                {{-- <input type="hidden" id="kode_buku_induk" name="kode_buku_induk"> --}}
                <div class="flex gap-3 w-full mt-3">
                    <a class="fancy w-full p-3 border-2 border-red-600 before:bg-red-600 hover:bg-red-600"
                        href="{{ route('peminjaman') }}">
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
    document.getElementById('id_pelanggaran').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var jenisPelanggaran = selectedOption.getAttribute('data-jenis');

        // Jika jenis pelanggaran adalah "Telat", maka set nilai denda
        if (jenisPelanggaran === 'Telat') {
            document.getElementById('denda').value = 5000;
        } else {
            document.getElementById('denda').value = ''; // Kosongkan jika bukan "Telat"
        }
    });
</script>

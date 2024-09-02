<x-topbar :$title></x-topbar>

<div class="bg-slate-100 pt-5 p-5 rounded-2xl">
    <div class="relative mt-10 w-1/2 flex flex-col rounded-lg bg-white bg-clip-border text-gray-700 shadow-lg">
        <div
            class="relative mx-4 -mt-6 mb-4 grid h-16 place-items-center overflow-hidden rounded-md bg-cyan-500 bg-clip-border text-white shadow-lg shadow-cyan-500/40">
            <h3 class="block font-sans text-3xl font-medium leading-snug tracking-normal text-white antialiased">
                Tambah Data Buku Induk
            </h3>
        </div>
        <div class="flex flex-col gap-4 p-6">
            <form class="form" method="post" action="{{ route('store-koleksi') }}">
                @csrf
                <label>
                    <input required placeholder="" type="text" class="input" name="no_barcode"
                        value="{{ old('no_barcode') }}">
                    <span>No Barcode</span>
                </label>

                <label>
                    <input required placeholder="" type="text" class="input" name="pengarang"
                        value="{{ old('pengarang') }}">
                    <span>pengarang</span>
                </label>

                <label>
                    <input required placeholder="" type="text" class="input" name="judul_buku"
                        value="{{ old('judul_buku') }}">
                    <span>Judul Buku</span>
                </label>

                <label>
                    {{ $klasifikasi }}
                </label>

                <label>
                    <input required name="tahun" value="{{ old('tahun') }}" placeholder="" type="number"
                        min="1900" max="{{ date('Y') }}" class="input">
                    <span style="top:35px; font-size:.7rem;">Tahun</span>
                </label>

                <label>
                    <select id="bahasa" name="bahasa" value="{{ old('bahasa') }}" autocomplete="bahasa"
                        class="input" required>
                        <option>- Pilih Bahasa -</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Asing">Asing</option>
                    </select>
                    <span>Bahasa</span>
                </label>

                <label>
                    {{ $penerbit }}
                </label>

                <label>
                    <input required id="jumlah_total" placeholder="" type="number" class="input" name="jumlah_total"
                        value="{{ old('jumlah_total') }}">
                    <span>Jumlah</span>
                </label>

                <label>
                    <select id="satuan" name="satuan" value="{{ old('satuan') }}" autocomplete="satuan"
                        class="input" required>
                        <option value="">- Pilih Satuan -</option>
                        <option value="Eksemplar">Eksemplar</option>
                        <option value="Jilid">Jilid</option>
                    </select>
                    <span style="top: 2rem">Satuan</span>
                </label>

                <label>
                    {{ $perolehan }}
                </label>

                <label>
                    <input required placeholder="" type="number" class="input" name="harga"
                        value="{{ old('harga') }}">
                    <span>Harga</span>
                </label>

                <label>
                    <select id="tipe_harga" name="tipe_harga" value="{{ old('tipe_harga') }}" autocomplete="tipe_harga"
                        class="input" required>
                        <option>- Pilih satuan harga -</option>
                        <option value="Eksemplar">Eksemplar</option>
                        <option value="Jilid">Jilid</option>
                    </select>
                    <span>Harga Per/</span>
                </label>

                <label>
                    <input required placeholder="" type="text" class="input" name="ketersediaan"
                        value="{{ old('ketersediaan') }}">
                    <span>Ketersediaan</span>
                </label>


                <input type="hidden" name="created_by" value="{{ auth()->user()->id_user }}">
                <input type="hidden" id="stok_tersedia" name="stok_tersedia" value="{{ old('stok_tersedia') }}">

                <div class="flex gap-3 w-full mt-3">
                    <a class="fancy w-full p-3 border-2 border-red-600 before:bg-red-600 hover:bg-red-600"
                        href="{{ route('koleksi') }}">
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
        <div class="p-6 pt-0">
            {{-- <button data-ripple-light="true" type="button"
                class="block w-full select-none rounded-lg bg-gradient-to-tr from-cyan-600 to-cyan-400 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-cyan-500/20 transition-all hover:shadow-lg hover:shadow-cyan-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                Sign In
            </button> --}}
        </div>
    </div>
</div>
<script>
    // JavaScript to update stok_tersedia when jumlah_total is changed
    document.getElementById('jumlah_total').addEventListener('input', function() {
        // Get the value from jumlah_total input
        var jumlahTotalValue = this.value;

        // Set the value to stok_tersedia input
        document.getElementById('stok_tersedia').value = jumlahTotalValue;
    });
</script>

<x-topbar :$title></x-topbar>
<div class="p-5 me-4 bg-slate-200 rounded-2xl mb-4">
<div class="relative mt-10 w-1/2 flex flex-col rounded-lg bg-white bg-clip-border text-gray-700 shadow-lg">
    <div
        class="relative mx-4 -mt-6 mb-4 grid h-16 place-items-center overflow-hidden rounded-md bg-cyan-500 bg-clip-border text-white shadow-lg shadow-cyan-500/40">
        <h3 class="block font-sans text-3xl font-medium leading-snug tracking-normal text-white antialiased">
            Edit Data Buku Induk
        </h3>
    </div>
    <div class="flex flex-col gap-4 p-6">
        <form class="form" method="post" action="/koleksi/{{ $koleksi->kode_buku_induk }}/update">
            @method('put')
            @csrf
            <label>
                <input required placeholder="" type="text" class="input" name="no_barcode"
                    value="{{ old('no_barcode', $koleksi->no_barcode) }}">
                <span>No Barcode</span>
            </label>

            <label>
                <input required placeholder="" type="text" class="input" name="pengarang"
                    value="{{ old('pengarang', $koleksi->pengarang) }}">
                <span>pengarang</span>
            </label>

            <label>
                <input required placeholder="" type="text" class="input" name="judul_buku"
                    value="{{ old('judul_buku', $koleksi->judul_buku) }}">
                <span>Judul Buku</span>
            </label>

            <label>
                {{ $klasifikasi }}
            </label>

            <label>
                <input required name="tahun" value="{{ old('tahun', $koleksi->tahun) }}" placeholder="" type="number"
                    min="1900" max="{{ date('Y') }}" class="input">
                <span style="top:35px; font-size:.7rem;">Tahun</span>
            </label>

            <label>
                <input required placeholder="" type="text" class="input" name="bahasa"
                    value="{{ old('bahasa', $koleksi->bahasa) }}">
                <span>Bahasa</span>
            </label>

            <label>
                {{ $penerbit }}
            </label>

            <label>
                <input required placeholder="" type="number" class="input" name="jumlah_total"
                    value="{{ old('jumlah_total', $koleksi->jumlah_total) }}">
                <span>Jumlah Eksemplar</span>
            </label>

            <label>
                {{ $satuan_koleksi }}
            </label>

            <label>
                <input required placeholder="" type="number" class="input" name="stok_tersedia"
                    value="{{ old('stok_tersedia', $koleksi->stok_tersedia) }}">
                <span>Stok Tersedia</span>
            </label>

            <label>
                {{ $perolehan }}
            </label>

            <label>
                <input required placeholder="" type="number" class="input" name="harga"
                    value="{{ old('harga', $koleksi->harga) }}">
                <span>Harga</span>
            </label>

            <label>
                {{ $hargaper }}
            </label>

            <label>
                <input required placeholder="" type="text" class="input" name="ketersediaan"
                    value="{{ old('ketersediaan', $koleksi->ketersediaan) }}">
                <span>Ketersediaan</span>
            </label>


            <input type="hidden" name="created_by" value="{{ auth()->user()->id_user }}">

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

<x-topbar :$title></x-topbar>
<div class="relative mt-10 w-1/2 flex flex-col rounded-lg bg-white bg-clip-border text-gray-700 shadow-lg">
    <div
        class="relative mx-4 -mt-6 mb-4 grid h-16 place-items-center overflow-hidden rounded-md bg-cyan-500 bg-clip-border text-white shadow-lg shadow-cyan-500/40">
        <h3 class="block font-sans text-3xl font-medium leading-snug tracking-normal text-white antialiased">
            Edit Data Klasifikasi
        </h3>
    </div>
    <div class="flex flex-col gap-4 p-6">
        <form class="form" method="post" action="/klasifikasi/{{ $klasifikasi->id_klasifikasi }}/update">
            @method('put')
            @csrf
            <label>
                <input required placeholder="" type="text" class="input" name="kode_ddc"
                    value="{{ old('kode_ddc', $klasifikasi->kode_ddc) }}">
                <span>Kode DDC</span>
            </label>

            <label>
                <input required placeholder="" type="text" class="input" name="klasifikasi"
                    value="{{ old('klasifikasi', $klasifikasi->klasifikasi) }}">
                <span>Klasifikasi</span>
            </label>

            <label>
                <textarea required="" name="keterangan" rows="2" placeholder="" class="input01">{{ old('keterangan', $klasifikasi->keterangan) }}</textarea>
                <span>Keterangan</span>
            </label>

            <div class="flex gap-3 w-full mt-3">
                <a class="fancy w-full p-3 border-2 border-red-600 before:bg-red-600 hover:bg-red-600"
                    href="{{ route('klasifikasi') }}">
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

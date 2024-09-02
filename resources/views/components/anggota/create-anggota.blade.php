<x-topbar :$title></x-topbar>
{{-- @endif --}}
<div class="p-5 me-4 bg-slate-200 rounded-2xl mb-4">
    <div class="relative mt-10 w-1/2 flex flex-col rounded-lg bg-white bg-clip-border text-gray-700 shadow-lg">
        <div
            class="relative mx-4 -mt-6 mb-4 grid h-16 place-items-center overflow-hidden rounded-md bg-cyan-500 bg-clip-border text-white shadow-lg shadow-cyan-500/40">
            <h3 class="block font-sans text-3xl font-medium leading-snug tracking-normal text-white antialiased">
                Tambah Data Anggota
            </h3>
        </div>
        <div class="flex flex-col gap-4 p-6">
            <form class="form" method="post" action="/tambah-anggota">
                @csrf
                <label>
                    <input required placeholder="" type="text" class="input" name="nama_anggota"
                        value="{{ old('nama_anggota') }}">
                    <span>Nama Lengkap</span>
                </label>


                <label>
                    {{ $slot }}
                    {{-- <span>contact number</span> --}}
                </label>

                <label>
                    <input required name="tanggal_masuk" value="{{ old('tanggal_masuk') }}" placeholder=""
                        type="date" class="input">
                    <span style="top:35px; font-size:.7rem;">Tanggal Masuk</span>
                </label>
                <label>
                    <textarea required="" name="keterangan" rows="2" placeholder="" class="input01">{{ old('keterangan') }}</textarea>
                    <span>Keterangan</span>
                </label>
                
                <input type="hidden" name="created_by" value="{{ auth()->user()->id_user }}">


                <div class="flex gap-3 w-full mt-3">
                    <a class="fancy w-full p-3 border-2 border-red-600 before:bg-red-600 hover:bg-red-600"
                        href="{{ route('anggota') }}">
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

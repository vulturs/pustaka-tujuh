<div class="w-full mb-4 mt-2">
    {{-- @if (session()->hash('error')) --}}
    <h2 class="text-3xl font-semibold mx-3 pb-0">Data Anggota</h2>
    {{ Breadcrumbs::render('anggota') }}
    {{-- {{session('error') }} --}}
</div>
{{-- @endif --}}
<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4 bg-white dark:bg-gray-900">
    <form method="post" action="{{ route('store-anggota') }}">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="nama-anggota" class="block text-sm font-medium leading-6 text-gray-900">Nama
                            Anggota</label>
                        <div class="mt-2">
                            <input type="text" name="nama_anggota" value="{{ old('nama_anggota') }}"
                                id="nama_anggota" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 @error('nama_anggota') is-invalid @enderror">
                            @error('nama_anggota')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="kelas" class="block text-sm font-medium leading-6 text-gray-900">Kelas</label>
                        <div class="mt-2">
                            <select id="kelas" name="kelas" value="{{ old('kelas') }}" autocomplete="kelas"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option>Pilih Jurusan</option>
                                <option value="Rekayasa Perangkat Lunak (RPL)"
                                    {{ old('kelas') == 'Rekayasa Perangkat Lunak (RPL)' ? 'selected' : '' }}>Rekayasa
                                    Perangkat Lunak (RPL)</option>
                                <option value="Arsitektur/Desain Permodelan dan Informasi Bangunan (DPIB)"
                                    {{ old('kelas') == 'Arsitektur/Desain Permodelan dan Informasi Bangunan (DPIB)' ? 'selected' : '' }}>
                                    Arsitektur/Desain Permodelan dan Informasi Bangunan (DPIB)</option>
                                <option value="Teknik Audio Video (TAV)"
                                    {{ old('kelas') == 'Teknik Audio Video (TAV)' ? 'selected' : '' }}>Teknik Audio
                                    Video (TAV)</option>
                                <option value="Teknik dan Bisnis Sepeda Motor (TBSM)"
                                    {{ old('kelas') == 'Teknik dan Bisnis Sepeda Motor (TBSM)' ? 'selected' : '' }}>
                                    Teknik dan Bisnis Sepeda Motor (TBSM)</option>
                                <option value="Teknik Kendaraan Ringan (TKR)"
                                    {{ old('kelas') == 'Teknik Kendaraan Ringan (TKR)' ? 'selected' : '' }}>Teknik
                                    Kendaraan Ringan (TKR)</option>
                            </select>
                            @error('kelas')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="tanggal-masuk" class="block text-sm font-medium leading-6 text-gray-900">Tanggal
                            Masuk</label>
                        <div class="mt-2">
                            <input type="date" name="tanggal_masuk" value="{{ old('tanggal_masuk') }}"
                                id="tanggal-masuk" autocomplete="street-address"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            @error('tanggal_masuk')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="keterangan"
                            class="block text-sm font-medium leading-6 text-gray-900">Keterangan</label>
                        <div class="mt-2">
                            <textarea name="keterangan" value="{{ old('keterangan') }}" id="keterangan" autocomplete="keterangan"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            @error('keterangan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    </fieldset>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('anggota') }}" type="button"
                class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</div>

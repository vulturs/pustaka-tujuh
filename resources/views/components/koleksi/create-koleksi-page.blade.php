<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @component('components.koleksi.create-koleksi', ['title' => $title])
        {{-- <x-koleksi.create-koleksi :title="$title"> --}}
        @slot('klasifikasi')
            <select id="id_klasifikasi" name="id_klasifikasi" value="{{ old('id_klasifikasi') }}" autocomplete="id_klasifikasi"
                class="input" required>
                <option value="">-- Pilih Klasifikasi --</option>
                @forelse ($klasifikasi as $klasi)
                    <option value="{{ $klasi->id_klasifikasi }}">{{ $klasi->kode_ddc }}</option>
                @empty
                    <option value="1" {{ old('id_klasifikasi') == 'klasifikasi' ? 'selected' : '' }}>
                        Klasifikasi
                    </option>
                @endforelse
            </select>
            <span style="top: 2rem">Klasifikasi</span>

            @error('id_klasifikasi')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        @endslot

        @slot('penerbit')
            <select id="id_penerbit" name="id_penerbit" value="{{ old('id_penerbit') }}" autocomplete="id_penerbit"
                class="input" required>
                <option value="">-- Pilih Penerbit --</option>
                @forelse ($penerbit as $terbit)
                    <option value="{{ $terbit->id_penerbit }}">{{ $terbit->nama_penerbit }}</option>
                @empty
                    <option value="1" {{ old('id_penerbit') == 'penerbit' ? 'selected' : '' }}>
                        Penerbit
                    </option>
                @endforelse
            </select>
            <span style="top: 2rem">Penerbit</span>

            @error('id_penerbit')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        @endslot

        @slot('perolehan')
            <select id="id_perolehan" name="id_perolehan" value="{{ old('id_perolehan') }}" autocomplete="id_perolehan"
                class="input" required>
                <option value="">-- Pilih Perolehan --</option>
                @forelse ($perolehan as $oleh)
                    <option value="{{ $oleh->id_perolehan }}">{{ $oleh->nama_sumber }}</option>
                @empty
                    <option value="1" {{ old('id_perolehan') == 'perolehan' ? 'selected' : '' }}>
                        Perolehan
                    </option>
                @endforelse
            </select>
            <span style="top: 2rem">Perolehan</span>

            @error('id_perolehan')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        @endslot
        {{-- </x-koleksi.create-koleksi> --}}
    @endcomponent
</x-layout>

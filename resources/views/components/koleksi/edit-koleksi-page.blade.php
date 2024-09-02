<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @component('components.koleksi.edit-koleksi', ['koleksi' => $koleksi, 'title' => $title])
        @slot('klasifikasi')
            <label>
                <select id="id_klasifikasi" name="id_klasifikasi" value="{{ old('id_klasifikasi') }}" autocomplete="id_klasifikasi"
                    class="input" required>
                    <option>-- Pilih Klasifikasi --</option>
                    @forelse ($klasifikasi as $klasi)
                        @if (old('id_klasifikasi', $koleksi->id_klasifikasi) == $klasi->id_klasifikasi)
                            <option value="{{ $klasi->id_klasifikasi }}" selected>{{ $klasi->kode_ddc }}</option>
                        @endif
                        <option value="{{ $klasi->id_klasifikasi }}">{{ $klasi->kode_ddc }}</option>
                    @empty
                        <option value="1" {{ old('id_klasifikasi') == 'klasifikasi' ? 'selected' : '' }}>
                            Klasifikasi
                        </option>
                    @endforelse
                </select>
                <span style="top: 25px">Klasifikasi</span>
            </label>
            @error('id_klasifikasi')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        @endslot

        @slot('satuan_koleksi')
            <select id="satuan" name="satuan" autocomplete="satuan" class="input" required>
                <option>- Pilih Satuan -</option>
                <option value="Eksemplar" {{ $koleksi->satuan == 'Eksemplar' ? 'selected' : '' }}>Eksemplar</option>
                <option value="Jilid" {{ $koleksi->satuan == 'Jilid' ? 'selected' : '' }}>Jilid</option>
            </select>
            <span style="top: 2rem">Satuan</span>
            @error('satuan')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        @endslot

        @slot('hargaper')
            <select id="tipe_harga" name="tipe_harga" autocomplete="tipe_harga" class="input" required>
                <option value="">- Pilih Satuan Harga -</option>
                <option value="Eksemplar" {{ $koleksi->tipe_harga == 'Eksemplar' ? 'selected' : '' }}>Eksemplar</option>
                <option value="Jilid" {{ $koleksi->tipe_harga == 'Jilid' ? 'selected' : '' }}>Jilid</option>
            </select>

            <span style="top: 2rem">Harga Per/</span>
            @error('hargaper')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        @endslot

        @slot('penerbit')
            <label>
                <select id="id_penerbit" name="id_penerbit" value="{{ old('id_penerbit') }}" autocomplete="id_penerbit"
                    class="input" required>
                    <option>-- Pilih Penerbit --</option>
                    @forelse ($penerbit as $terbit)
                        @if (old('id_penerbit', $koleksi->id_penerbit) == $terbit->id_penerbit)
                            <option value="{{ $terbit->id_penerbit }}" selected>{{ $terbit->nama_penerbit }}</option>
                        @endif
                        <option value="{{ $terbit->id_penerbit }}">{{ $terbit->nama_penerbit }}</option>
                    @empty
                        <option value="1" {{ old('id_penerbit') == 'penerbit' ? 'selected' : '' }}>
                            Penerbit
                        </option>
                    @endforelse
                </select>
                <span style="top: 25px">Penerbit</span>
            </label>
            @error('id_penerbit')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        @endslot

        @slot('perolehan')
            <label>
                <select id="id_prolehan" name="id_perolehan" value="{{ old('id_perolehan') }}" autocomplete="id_perolehan"
                    class="input" required>
                    <option>-- Pilih Sumber Perolehan --</option>
                    @forelse ($perolehan as $oleh)
                        @if (old('id_perolehan', $koleksi->id_perolehan) == $oleh->id_perolehan)
                            <option value="{{ $oleh->id_perolehan }}" selected>{{ $oleh->nama_sumber }}</option>
                        @endif
                        <option value="{{ $oleh->id_perolehan }}">{{ $oleh->nama_sumber }}</option>
                    @empty
                        <option value="1" {{ old('id_perolehan') == 'perolehan' ? 'selected' : '' }}>
                            Perolehan
                        </option>
                    @endforelse
                </select>
                <span style="top: 25px">Perolehan</span>
            </label>
            @error('id_perolehan')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        @endslot
    @endcomponent
</x-layout>

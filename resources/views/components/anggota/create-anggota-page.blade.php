<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-anggota.create-anggota :$title>
        <label>
            <select id="kelas_id" name="kelas_id" value="{{ old('kelas_id') }}" autocomplete="kelas_id" class="input"
                required>
                <option>-- Pilih Kelas --</option>
                @forelse ($kelas as $kl)
                    <option value="{{ $kl->kelas_id }}">{{ $kl->kelas }}</option>
                @empty
                    <option value="1" {{ old('kelas_id') == 'Rekayasa Perangkat Lunak (RPL)' ? 'selected' : '' }}>
                        Rekayasa Perangkat Lunak
                        (RPL)
                    </option>
                @endforelse
            </select>
            <span style="top: 25px">Kelas dan Jurusan</span>
        </label>
        @error('kelas_id')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
    </x-anggota.create-anggota>
</x-layout>

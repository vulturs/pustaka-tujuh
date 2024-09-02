<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- @component('components.anggota.edit-anggota', ['anggota' => $anggota]) --}}
    <x-anggota.edit-anggota :$anggota :$title>
        {{-- @slot('select') --}}
        <select id="kelas_id" name="kelas_id" autocomplete="kelas_id" class="input" required>
            <option>-- Pilih Kelas --</option>
            @forelse ($kelas as $kl)
                @if (old('kelas_id', $anggota->kelas_id) == $kl->kelas_id)
                    <option value="{{ $kl->kelas_id }}" selected>{{ $kl->kelas }}</option>
                @endif
                <option value="{{ $kl->kelas_id }}">{{ $kl->kelas }}</option>
            @empty
                <option value="1" {{ old('kelas_id') == 'Rekayasa Perangkat Lunak (RPL)' ? 'selected' : '' }}>
                    Rekayasa Perangkat Lunak
                    (RPL)
                </option>
            @endforelse
        </select>
        <span style="top: 25px">Kelas dan Jurusan</span>
        @error('kelas_id')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        {{-- @endslot --}}
    </x-anggota.edit-anggota>
    {{-- @endcomponent --}}
</x-layout>

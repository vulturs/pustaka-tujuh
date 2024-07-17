<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-anggota.create-anggota>
        <select id="kelas_id" name="kelas_id" value="{{ old('kelas_id') }}" autocomplete="kelas_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
            <option>Pilih Jurusan</option>
            @foreach ($kelas as $anggot)
              <option value="{{ $anggot->kelas_id }}">{{ $anggot->kelas }}</option>
            @endforeach
            <option value="Rekayasa Perangkat Lunak (RPL)" {{ old('kelas_id') == 'Rekayasa Perangkat Lunak (RPL)' ? 'selected' : '' }}>Rekayasa Perangkat Lunak (RPL)</option>
          </select>
          @error('kelas_id')
                <span class="text-red-500">{{$message}}</span>
            @enderror
    </x-anggota.create-anggota>
</x-layout>
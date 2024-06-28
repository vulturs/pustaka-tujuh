<x-layout>
   <x-slot:title>{{ $title }}</x-slot:title>

   <x-dashboard users="{{ $users }}" anggota="{{ $anggota }}">
      {{-- {{ $users }} --}}
   </x-dashboard>
</x-layout>
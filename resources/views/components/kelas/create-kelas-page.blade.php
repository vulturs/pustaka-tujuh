<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @component('components.kelas.create-kelas', ['title' => $title])
    @endcomponent
</x-layout>

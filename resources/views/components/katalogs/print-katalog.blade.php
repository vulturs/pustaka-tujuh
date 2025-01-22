{{-- <div class="bg-white rounded-xl shadow-lg mb-6" style="width: 472px; height:283px;"> --}}
<style>
    @page {
        margin: 10px;
        /* Hapus margin halaman */
    }

    body {
        margin: 10px;
        /* Hapus margin konten */
    }
</style>
@php
    $call = $katalog->callNumber;
    $cn = explode(' ', $call);
@endphp
<table class="m-0" style="width: 100%">
    <tr>
        <td class="pe-4 font-bold pb-1" style="padding-right: 20px; padding-bottom: 1px;">{{ $cn[0] }}</td>
    </tr>
    <tr>
        <td class="pe-4 font-bold pb-1" style="padding-right: 20px; padding-bottom: 1px;">{{ $cn[1] }}</td>
        <td colspan=2 class="pb-1">{{ $katalog->pengarang }}</td>
    </tr>
    <tr>
        <td class="pe-4 font-bold pb-1" style="padding-right: 20px; padding-bottom: 1px;">{{ $cn[2] }}</td>
        <td colspan=2>{{ $katalog->judul_buku }}/{{ $katalog->pengarang }}</td>
    </tr>
    <tr>
        <td></td>
        <td colspan=2>{{ $katalog->edisi }}. - {{ $katalog->kota_terbit }}:{{ $katalog->nama_penerbit }},
            {{ $katalog->tahun }}.</td>
    </tr>
    <tr>
        <td></td>
        <td colspan=2>{{ $katalog->jum_hlm }} hlm.; {{ $katalog->dimensi }}cm.</td>
    </tr>
    <tr>
        <td></td>
        <td colspan=2><br></td>
    </tr>
    <tr>
        <td></td>
        <td colspan=2>ISBN {{ $katalog->isbn }}</td>
    </tr>
    <tr>
        <td></td>
        <td class="w-56">1. {{ $katalog->judul_buku }}</td>
        {{-- <td class="w-56">1. {{ $katalog->subjek }}</td> --}}
        <td>I. Judul</td>
    </tr>
</table>
{{-- </div> --}}

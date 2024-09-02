<div class="bg-white rounded-xl shadow-lg mb-6" style="width: 472px; height:283px;">
    @php
        $call = $katalog->callNumber;
        $cn = explode(' ', $call);
    @endphp
    <table class="m-5">
        <tr>
            <td class="pe-4 font-bold pb-1" style="padding-right: 4px; padding-bottom: 1px;">{{ $cn[0] }}</td>
        </tr>
        <tr>
            <td class="pe-4 font-bold pb-1" style="padding-right: 4px; padding-bottom: 1px;">{{ $cn[1] }}</td>
            <td colspan=2 class="pb-1">{{ $katalog->pengarang }}</td>
        </tr>
        <tr>
            <td class="pe-4 font-bold pb-1" style="padding-right: 4px; padding-bottom: 1px;">{{ $cn[2] }}</td>
            <td colspan=2>{{ $katalog->judul_buku }}/{{ $katalog->pengarang }}</td>
        </tr>
        <tr>
            <td></td>
            <td colspan=2>{{ $katalog->edisi }}. - {{ $katalog->kotaTerbit }}:{{ $katalog->nama_penerbit }},
                {{ $katalog->tahunTerbit }}.</td>
        </tr>
        <tr>
            <td></td>
            <td colspan=2>{{ $katalog->jumlah_hal }} hlm.; {{ $katalog->dimensi }}cm.</td>
        </tr>
        <tr>
            <td></td>
            <td colspan=2><br></td>
        </tr>
        <tr>
            <td></td>
            <td colspan=2>ISBN {{ $katalog->ISBN }}</td>
        </tr>
        <tr>
            <td></td>
            <td class="w-56">1. {{ $katalog->catatan }}</td>
            <td>I. Judul</td>
        </tr>
    </table>
</div>

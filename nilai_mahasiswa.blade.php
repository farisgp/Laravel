<h1 align='center'>Daftar Nilai Mahasiswa</h1>
<table align='center' cellpadding='10' style="width: 50%;">
    <thead>
        <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nilai</th>
        <th>Keterangan</th>
        </tr>
    </thead>
    <tbody>
    @php 
        $no = 1;
    @endphp
    @foreach($siswa as $sis)
        @php
            $keterangan = $sis['nilai'] >= 60 ? 'Lulus': 'Gagal';
        @endphp
        <tr>
            <td>{{$no++}}</td>
            <td>{{$sis['nama']}}</td>
            <td>{{$sis['nilai']}}</td>
            <td>{{$keterangan}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
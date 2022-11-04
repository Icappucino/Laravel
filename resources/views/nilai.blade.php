@php
$no = 1;
$judul = ['No','Nama','Nilai','Keterangan'];
@endphp
<h3 align=center font-size="25px">Nilai Mahasiswa</h3>
<table border="1" align="center" cellpadding="10" color="white" width="500px">
    <thead>
        <tr bgcolor="#C8FFD4">
            @foreach ( $judul as $jdl )
                <th>{{ $jdl }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ( $mahasiswa as $mhs )
        @php
            $ket = ($mhs['nilai'] >= 60) ? 'Lulus' : 'Gagal';
            $warna = ($no % 2 == 0) ? '#B8E8FC' : '#FDFDBD';
        @endphp
        <tr bgcolor="{{ $warna }}">
            <td>{{ $no++ }}</td>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['nilai'] }}</td>
            <td>{{ $ket }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

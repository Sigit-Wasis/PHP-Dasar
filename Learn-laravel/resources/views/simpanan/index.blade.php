<!-- resources/views/simpanan/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Data Simpanan</title>
</head>
<body>
    <h1>Data Simpanan</h1>

    <table border="1">
        <tr>
            <th>ID Simpanan</th>
            <th>ID Nasabah</th>
            <th>Nama Nasabah</th>
            <th>ID Karyawan</th>
            <th>Nama Karyawan</th>
            <th>Nominal</th>
            <th>Tanggal Simpanan</th>
            <th>Waktu Simpanan</th>
            <th>Keterangan</th>
        </tr>
        @foreach($simpanans as $simpanan)
        <tr>
            <td>{{ $simpanan->id }}</td>
            <td>{{ $simpanan->id_nasabah }}</td>
            <td>{{ $simpanan->nasabah->nama }}</td>
            <td>{{ $simpanan->id_karyawan }}</td>
            <td>{{ $simpanan->karyawan->nama }}</td>
            <td>{{ $simpanan->nominal }}</td>
            <td>{{ $simpanan->tanggal_simpanan }}</td>
            <td>{{ $simpanan->waktu_simpanan }}</td>
            <td>{{ $simpanan->keterangan }}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('simpanan.create') }}">Tambah Data Simpanan</a>
</body>
</html>

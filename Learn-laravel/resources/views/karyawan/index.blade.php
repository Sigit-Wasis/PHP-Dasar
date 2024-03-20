<!-- resources/views/karyawan/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
</head>
<body>
    <h1>Data Karyawan</h1>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>No. Telepon</th>
            <th>Email</th>
        </tr>
        @foreach ($karyawans as $karyawan)
        <tr>
            <td>{{ $karyawan->id }}</td>
            <td>{{ $karyawan->nama }}</td>
            <td>{{ $karyawan->alamat }}</td>
            <td>{{ $karyawan->tanggal_lahir }}</td>
            <td>{{ $karyawan->sex }}</td>
            <td>{{ $karyawan->notelp }}</td>
            <td>{{ $karyawan->email }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>

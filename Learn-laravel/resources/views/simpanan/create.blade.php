<!-- resources/views/simpanan/create.blade.php

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Simpanan</title>
</head>
<body>
    <h1>Tambah Data Simpanan</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('simpanan.store') }}">
        @csrf
        <div>
            <label for="id_nasabah">ID Nasabah:</label>
            <input type="text" name="id_nasabah" id="id_nasabah" value="{{ old('id_nasabah') }}">
        </div>
        <div>
            <label for="id_karyawan">ID Karyawan:</label>
            <input type="text" name="id_karyawan" id="id_karyawan" value="{{ old('id_karyawan') }}">
        </div>
        <div>
            <label for="nominal">Nominal:</label>
            <input type="text" name="nominal" id="nominal" value="{{ old('nominal') }}">
        </div>
        <div>
            <label for="tanggal_simpanan">Tanggal Simpanan:</label>
            <input type="date" name="tanggal_simpanan" id="tanggal_simpanan" value="{{ old('tanggal_simpanan') }}">
        </div>
        <div>
            <label for="waktu_simpanan">Waktu Simpanan:</label>
            <input type="time" name="waktu_simpanan" id="waktu_simpanan" value="{{ old('waktu_simpanan') }}">
        </div>
        <div>
            <label for="keterangan">Keterangan:</label>
            <textarea name="keterangan" id="keterangan">{{ old('keterangan') }}</textarea>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html> -->

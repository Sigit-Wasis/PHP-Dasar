<!-- resources/views/karyawan/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Karyawan</title>
</head>
<body>
    <h1>Edit Karyawan</h1>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('karyawan.update', $karyawan->id_karyawan) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ $karyawan->nama }}" required>
        </div>
        <div>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" value="{{ $karyawan->alamat }}" required>
        </div>
        <div>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $karyawan->tanggal_lahir }}" required>
        </div>
        <div>
            <label for="sex">Jenis Kelamin:</label>
            <select id="sex" name="sex" required>
                <option value="L" {{ $karyawan->sex == 'L' ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ $karyawan->sex == 'P' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div>
            <label for="notelp">No. Telepon:</label>
            <input type="text" id="notelp" name="notelp" value="{{ $karyawan->notelp }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $karyawan->email }}" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>

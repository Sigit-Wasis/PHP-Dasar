<!-- resources/views/karyawan/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Karyawan</title>
</head>
<body>
    <h1>Tambah Karyawan</h1>

    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('karyawan.store') }}" method="POST"> <!-- Pastikan method adalah POST -->
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>
        </div>
        <div>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div>
            <label for="sex">Jenis Kelamin:</label>
            <select id="sex" name="sex" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div>
            <label for="notelp">No. Telepon:</label>
            <input type="text" id="notelp" name="notelp" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>

<!-- resources/views/nasabah/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Nasabah</title>
</head>
<body>
    <h1>Tambah Nasabah</h1>

    <form method="POST" action="{{ route('nasabah.store') }}">
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
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div>
            <label for="notelp">Nomor Telepon:</label>
            <input type="text" id="notelp" name="notelp" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <!-- Tambahkan input untuk password -->
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>

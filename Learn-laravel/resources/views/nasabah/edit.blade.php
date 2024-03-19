<!-- resources/views/nasabah/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Nasabah</title>
</head>
<body>
    <h1>Edit Nasabah</h1>

    <form method="POST" action="{{ route('nasabah.update', $nasabah->id_nasabah) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ $nasabah->nama }}" required>
        </div>
        <div>
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" value="{{ $nasabah->alamat }}" required>
        </div>
        <div>
            <label for="tanggal_lahir">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ $nasabah->tanggal_lahir }}" required>
        </div>
        <div>
            <label for="sex">Jenis Kelamin:</label>
            <select id="sex" name="sex" required>
                <option value="Laki-laki" {{ $nasabah->sex === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $nasabah->sex === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>
        <div>
            <label for="notelp">Nomor Telepon:</label>
            <input type="text" id="notelp" name="notelp" value="{{ $nasabah->notelp }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $nasabah->email }}" required>
        </div>
        <!-- Tambahkan input untuk password jika ingin memperbarui password -->
        <!-- <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div> -->
        <button type="submit">Simpan</button>
    </form>
</body>
</html>

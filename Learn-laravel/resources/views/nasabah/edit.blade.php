@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Nasabah</h1>

        <form method="POST" action="{{ route('nasabah.update', $nasabah->id_nasabah) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $nasabah->nama }}" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $nasabah->alamat }}" required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $nasabah->tanggal_lahir }}" required>
            </div>
            <div class="mb-3">
                <label for="sex" class="form-label">Jenis Kelamin:</label>
                <select class="form-select" id="sex" name="sex" required>
                    <option value="Laki-laki" {{ $nasabah->sex === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $nasabah->sex === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="notelp" class="form-label">Nomor Telepon:</label>
                <input type="text" class="form-control" id="notelp" name="notelp" value="{{ $nasabah->notelp }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $nasabah->email }}" required>
            </div>
            <!-- Tambahkan input untuk password jika ingin memperbarui password -->
            <!-- <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div> -->
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ url('nasabah') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')

<div class="container-fluid pt-4 px-4">
     <h1 align="Data Nasabah"></h1>

    <div class="table-bordered">
        <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Id Nasabah</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Nomor telp</th>
            <th scope="col">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($nasabahs as $nasabah)
        <tr>
            <td>{{ $nasabah->id_nasabah }}</td>
            <td>{{ $nasabah->nama }}</td>
            <td>{{ $nasabah->alamat }}</td>
            <td>{{ $nasabah->tanggal_lahir }}</td>
            <td>{{ $nasabah->sex }}</td>
            <td>{{ $nasabah->notelp }}</td>
            <td>{{ $nasabah->email }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>

    </div>

</div>

@endsection

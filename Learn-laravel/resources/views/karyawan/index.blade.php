<!-- resources/views/karyawan/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Data Karyawan</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ url('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>

@include ('backend._partials.header')
@include ('backend._partials.sidebar')

<div class="content">
    <div class="container-fluid pt-4 px-4">
        <h1>Data Karyawan</h1>

        <div class="mb-3">
            <a href="{{ route('karyawan.create') }}" class="btn btn-primary">Tambah Karyawan</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">ID Karyawan</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">No. Telepon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($karyawans as $karyawan)
                    <tr>
                        <td>{{ $karyawan->id_karyawan }}</td>
                        <td>{{ $karyawan->nama }}</td>
                        <td>{{ $karyawan->alamat }}</td>
                        <td>{{ $karyawan->tanggal_lahir }}</td>
                        <td>{{ $karyawan->sex }}</td>
                        <td>{{ $karyawan->notelp }}</td>
                        <td>{{ $karyawan->email }}</td>
                        <td>
                            <a href="{{ route('karyawan.edit', $karyawan->id_karyawan) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('karyawan.destroy', $karyawan->id_karyawan) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@include ('backend._partials.footer')

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ url('assets/lib/chart/chart.min.js') }}"></script>
<script src="{{ url('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ url('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ url('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ url('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ url('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ url('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ url('assets/js/main.js') }}"></script>
</body>
</html>

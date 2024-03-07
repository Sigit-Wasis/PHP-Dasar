<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku Alifia</title>
</head>
<body>
 
<h4>Data Buku</h4>
<table border ="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>Judul Buku</th>
        <th>Tahun Terbit</th>
        <th>Penerbit</th>
        <th>Penulis</th>
    </tr>
    @foreach ($databukus as $databukus)
    <tr>
        <td>{{$databukus->judul_buku}}</td>
        <td>{{$databukus->tahun_terbit}}</td>
        <td>{{$databukus->penerbit}}</td>
        <td>{{$databukus->penulis}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
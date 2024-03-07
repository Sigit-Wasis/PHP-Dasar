<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
</head>
<body>
 
<h4>Data Buku</h4>
<table border ="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>judul buku</th>
        <th>tahun terbit</th>
        <th>penerbit</th>
        <th>penulis</th>
    </tr>
    @foreach ($databukus as $databuku)
    <tr>
        <td>{{$databuku->judul_buku}}</td>
        <td>{{$databuku->tahun_terbit}}</td>
        <td>{{$databuku->penerbit}}</td>
        <td>{{$databuku->penulis}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
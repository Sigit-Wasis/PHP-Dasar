<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
<h4>Data Buku</h4>
<table border ="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>judul_buku</th>
        <th>tahun_terbit</th>
        <th>penerbit</th>
        <th>penulis</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{$post->judul_buku}}</td>
        <td>{{$post->tahun_terbit}}</td>
        <td>{{$post->penerbit}}</td>
        <td>{{$post->penulis}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
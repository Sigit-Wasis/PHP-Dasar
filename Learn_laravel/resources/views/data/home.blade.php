<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
<h4>Data Akun</h4>
<table border ="1" cellspacing="0" cellpadding="5">
    <tr>
        <th>nama</th>
        <th>jabatan</th>
        <th>gaji</th>
    </tr>
    @foreach ($posts as $post)
    <tr>
        <td>{{$post->nama}}</td>
        <td>{{$post->jabatan}}</td>
        <td>{{$post->gaji}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
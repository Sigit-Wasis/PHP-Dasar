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
        <th>name</th>
        <th>email</th>
        <th>password</th>
    </tr>
    @foreach ($akuns as $akun)
    <tr>
        <td>{{$akun->name}}</td>
        <td>{{$akun->email}}</td>
        <td>{{$akun->password}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
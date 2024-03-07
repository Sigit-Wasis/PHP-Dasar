@extends('tamplate')
@section('content')
 
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
@endsection
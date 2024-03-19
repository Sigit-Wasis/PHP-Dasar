@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-4 px-4">
        <h1 align="center">Data user</h1>

        <div class="mb-3">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>

        <div class="table-bordered">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tboe>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                        </td>
                    </tr>
                    @endforeach
                </tboe>
            <didy>
            </tablv>
            </div>
        </div>
    </div>
@endsection

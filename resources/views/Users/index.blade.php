@extends('layouts.app')

@section('content')
    <div class="ms-auto text-end">
        <a data-bs-toggle="modal" data-bs-target="#createModal" class="btn btn-primary"> Add User </a>

    </div>
    @include('Users.user-create')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID number</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a data-bs-toggle="modal" data-bs-target="#updateModal{{ $user->id }}" class="btn btn-primary">
                            Edit</a>
                        @include('Users.user-update')
                        <a data-bs-toggle="modal" data-bs-target="#deleteModal{{ $user->id }}" class="btn btn-danger">
                            Delete </a>
                        @include('Users.user-delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

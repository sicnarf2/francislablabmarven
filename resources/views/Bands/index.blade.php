@extends('layouts.app')

@section('content')
    <div class="ms-auto text-end">
        <a data-bs-toggle="modal" data-bs-target="#createModal" class="btn btn-primary"> Add Band </a>

    </div>
    @include('Bands.band-create')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID number</th>
                <th scope="col">Band Name</th>
                <th scope="col">Genre</th>
                <th scope="col">Year Started</th>
                <th scope="col">No. of Members</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bands as $band)
                <tr>
                    <th scope="row">{{ $band->id }}</th>
                    <td>{{ $band->band_name }}</td>
                    <td>{{ $band->genre }}</td>
                    <td>{{ $band->year_started }}</td>
                    <td>{{ $band->membersCount }}</td>
                    <td>
                        <a data-bs-toggle="modal" data-bs-target="#updateModal{{ $band->id }}" class="btn btn-primary">
                            Edit</a>
                        @include('Bands.band-update')
                        <a data-bs-toggle="modal" data-bs-target="#deleteModal{{ $band->id }}" class="btn btn-danger">
                            Delete </a>
                        @include('Bands.band-delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

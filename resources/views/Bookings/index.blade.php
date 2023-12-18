@extends('layouts.app')

@section('content')
    <div class="ms-auto text-end">
        <a data-bs-toggle="modal" data-bs-target="#createModal" class="btn btn-primary"> Add booking </a>

    </div>
    @include('bookings.booking-create')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID number</th>
                <th scope="col">Booking Name</th>
                <th scope="col">Booking Date</th>
                <th scope="col">Booking Time</th>
                <th scope="col">Band</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
                <tr>
                    <th scope="row">{{ $booking->id }}</th>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->booking_date }}</td>
                    <td>{{ $booking->booking_time }}</td>
                    <td>{{ $booking->band->band_name }}</td>
                    <td>
                        <a data-bs-toggle="modal" data-bs-target="#updateModal{{ $booking->id }}" class="btn btn-primary">
                            Edit</a>
                        @include('Bookings.booking-update')
                        <a data-bs-toggle="modal" data-bs-target="#deleteModal{{ $booking->id }}" class="btn btn-danger">
                            Delete </a>
                        @include('Bookings.booking-delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

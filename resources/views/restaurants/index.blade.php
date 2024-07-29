@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Restaurants</h1>
        <a href="{{ route('restaurants.create') }}" class="btn btn-primary">Create Restaurant</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($restaurants as $restaurant)
                    <tr>
                        <td>{{ $restaurant->id }}</td>
                        <td>{{ $restaurant->name }}</td>
                        <td>{{ $restaurant->address }}</td>
                        <td>{{ $restaurant->phone }}</td>
                        <td>
                            <a href="{{ route('restaurants.show', $restaurant->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

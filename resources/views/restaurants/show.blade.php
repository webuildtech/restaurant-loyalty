@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Restaurant Details</h1>
        <ul>
            <li>ID: {{ $restaurant->id }}</li>
            <li>Name: {{ $restaurant->name }}</li>
            <li>Address: {{ $restaurant->address }}</li>
            <li>Phone: {{ $restaurant->phone }}</li>
        </ul>
    </div>
@endsection

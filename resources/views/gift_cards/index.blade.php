@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gift Cards</h1>
        <a href="{{ route('gift-cards.create') }}" class="btn btn-primary">Create Gift Card</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Restaurant</th>
                    <th>Balance</th>
                    <th>Expiry Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($giftCards as $giftCard)
                    <tr>
                        <td>{{ $giftCard->id }}</td>
                        <td>{{ $giftCard->user->name }}</td>
                        <td>{{ $giftCard->restaurant->name }}</td>
                        <td>{{ $giftCard->balance }}</td>
                        <td>{{ $giftCard->expiry_date }}</td>
                        <td>
                            <a href="{{ route('gift-cards.show', $giftCard->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('gift-cards.edit', $giftCard->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('gift-cards.destroy', $giftCard->id) }}" method="POST" style="display:inline;">
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

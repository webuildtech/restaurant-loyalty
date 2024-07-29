@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Gift Card</h1>
        <form action="{{ route('gift-cards.update', $giftCard->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="balance">Balance</label>
                <input type="text" name="balance" class="form-control" value="{{ $giftCard->balance }}">
            </div>
            <div class="form-group">
                <label for="expiry_date">Expiry Date</label>
                <input type="date" name="expiry_date" class="form-control" value="{{ $giftCard->expiry_date }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

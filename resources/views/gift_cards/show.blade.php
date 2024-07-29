@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gift Card Details</h1>
        <ul>
            <li>ID: {{ $giftCard->id }}</li>
            <li>User: {{ $giftCard->user->name }}</li>
            <li>Restaurant: {{ $giftCard->restaurant->name }}</li>
            <li>Balance: {{ $giftCard->balance }}</li>
            <li>Expiry Date: {{ $giftCard->expiry_date }}</li>
        </ul>
    </div>
@endsection

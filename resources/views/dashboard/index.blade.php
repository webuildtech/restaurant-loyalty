@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <ul>
            <li>Total Gift Cards: {{ $totalGiftCards }}</li>
            <li>Total Loyalty Programs: {{ $totalLoyaltyPrograms }}</li>
        </ul>
    </div>
@endsection

@extends('layouts.admin_master')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Feed Order Details</h5>
    </div>
    <div class="card-body">
        <p><strong>Order ID:</strong> {{ $feedOrder->id }}</p>
        <p><strong>Feed Type:</strong> {{ $feedOrder->feed_type }}</p>
        <p><strong>Quantity:</strong> {{ $feedOrder->quantity }}</p>
        <p><strong>Created At:</strong> {{ $feedOrder->created_at }}</p>
        <!-- Add more details as needed -->
    </div>
</div>

@endsection

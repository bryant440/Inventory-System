@extends('layouts.admin_master')
@section('content')
@if(session('chicken'))
    <div>
        <p>New Chicken Entry:</p>
        <p>Name: {{ session('chicken')->name }}</p>
        <p>Quantity: {{ session('chicken')->quantity }}</p>
    </div>
@endif

@endsection
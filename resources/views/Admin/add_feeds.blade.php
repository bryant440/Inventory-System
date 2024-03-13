@extends('layouts.admin_master')

@section('content')

<form method="POST" action="{{ route('feed_orders.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Feed Type:</label>
        <select name="feed_type" class="form-control" required>
            <option name = "pellets" value="Pellets">Pellets</option>
            <option name ="crumbles" value="Crumbles">Crumbles</option>
            <option name ="mash" value="Mash">Mash</option>
        </select>
    </div>
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

{{-- @include('Admin.all_feedsorders') --}}
@endsection
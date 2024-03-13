@extends('layouts.admin_master')

@section('content')

<form method="POST" action="{{ route('chickens.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Chicken Type:</label>
        <select name="name" class="form-control" required>
            <option value="Broilers">Broilers</option>
            <option value="Layers">Layers</option>
        </select>
    </div>
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
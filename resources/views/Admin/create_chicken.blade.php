
<form method="POST" action="{{ route('chickens.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Chicken Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{ route('available.products') }}" class="btn btn-primary">Available Entry</a>
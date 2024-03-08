@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create New Invoice</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/insert-invoice') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="name">Customer Name</label>
                                        <select id="name" name="name" class="form-control">
                                            <option selected>Choose...</option>
                                            @foreach($customers as $c)
                                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="unit_price">Price (per Unit)</label>
                                        <input class="form-control" name="unit_price" type="text" placeholder="Enter price per unit" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="quantity">Quantity</label>
                                        <input class="form-control" name="quantity" type="text" placeholder="Enter quantity" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="total">Total Price</label>
                                        <input class="form-control" name="total" type="text" placeholder="Enter total price" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-4 mb-0">
                                <button class="btn btn-primary btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</section>

@endsection
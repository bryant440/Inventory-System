@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Customer Information
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="customerTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Customer1</td>
                                        <td>5</td>
                                        <td>$10</td>
                                        <td>$50</td>
                                    </tr>
                                    <tr>
                                        <td>Customer2</td>
                                        <td>3</td>
                                        <td>$15</td>
                                        <td>$45</td>
                                    </tr>
                                    <tr>
                                        <td>Customer3</td>
                                        <td>2</td>
                                        <td>$20</td>
                                        <td>$40</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
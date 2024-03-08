@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body" style="height: 100%; display: flex; justify-content: center; align-items: center;">
                        Number of Eggs
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-secondary text-white mb-4">
                    <div class="card-body" style="height: 100%; display: flex; justify-content: center; align-items: center;">
                        Number of Chickens
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body" style="height: 100%; display: flex; justify-content: center; align-items: center;">
                        Maturity Rate
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body" style="height: 100%; display: flex; justify-content: center; align-items: center;">
                        Mortality Rate
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
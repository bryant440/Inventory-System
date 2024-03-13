
@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Number of Collected Eggs</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('collectedeggs.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputCollectedEggs">Number of Collected Eggs</label>
                                        <input class="form-control py-4" name="number_of_eggs" type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputEggCondition">Egg Condition (Good/Broken)</label>
                                        <select class="form-control" name="egg_condition">
                                            <option value="good">Good</option>
                                            <option value="broken">Broken</option>
                                        </select>
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
@endsection
@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Quantity of Feeds</h3></div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/add-collected-eggs') }}">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputCollectedEggs">Quantity of Feeds</label>
                                        <input class="form-control py-4" name="collected_eggs" type="text" placeholder="" />
                                    </div>
                                </div>
                                <!-- You can add more fields here if needed -->
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
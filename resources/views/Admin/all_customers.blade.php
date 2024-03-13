

@extends('layouts.admin_master')
@section('content')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i> Feeds List
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="feedOrdersTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Feed Type</th>
                        <th>Quantity</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($feedOrder as $row)
                    <tr>
                        <td>{{ $row->feed_type }}</td>
                        <td>{{ $row->quantity }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>
                            <form method="POST" action="{{ route('all.customers.destroy', $row->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
 @endsection



@extends('layouts.admin_master')
@section('content')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i> Eggs List
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="collectedEggsTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Collected Eggs</th>
                        <th>Egg condition</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($eggs as $row)
                    <tr>
                        <td>{{ $row->collected_eggs }}</td>
                        <td>{{ $row->egg_condition }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>
                            <form method="POST" action="{{ route('available.products.destroy', $row->id) }}">
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
{{--
 @section('script')
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
<script>
    $('#feedOrderTable').DataTable({
        columnDefs: [
            { bSortable: false, targets: [4] }
        ],
        dom: 'lBfrtip',
        buttons: [
            {
                extend: 'copyHtml5',
                exportOptions: { modifier: { page: 'current' }, columns: [0, ':visible'] }
            },
            {
                extend: 'excelHtml5',
                exportOptions: { modifier: { page: 'current' }, columns: [0, ':visible'] }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: { modifier: { page: 'current' }, columns: [0, 1, 2, 3] }
            },
            'colvis'
        ]
    });
</script>
@endsection --}}

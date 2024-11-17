@extends('Layouts.template_admin')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">All Event Data</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="myTable" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Name Event
                            </th>
                            <th>
                                Date Event
                            </th>
                            <th>
                                Location
                            </th>
                            <th>
                                Image event
                            </th>
                            <th>
                                User Create
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $no = 1; ?>
                        @foreach ($event as $item)
                        <tr class="text-center">
                            <td>{{$no++}}</td>
                            <td>{{$item->name_event}}</td>
                            <td>{{$item->date}}</td>
                            <td>{{$item->location}}</td>
                            <td>
                                <button class="badge-sm btn-info rounded "><i class="fa fa-eye" aria-hidden="true"></i> </button>
                                <button class="badge-sm btn-warning rounded "><i class="fa fa-pencil" aria-hidden="true"></i> </button>
                                <button class="badge-sm btn-danger rounded "><i class="fa fa-trash" aria-hidden="true"></i> </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection


@push('addon-script')
<script src="https://cdn.datatables.net/v/bs4/dt-2.1.8/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>


@endpush
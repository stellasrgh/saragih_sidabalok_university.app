@extends('backend.main.index')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> University Service</h6>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <a href="/service/create" class="btn btn-primary mb-3">+Create</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th> Name</th>
                                <th>Icon</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($service as $item)
                                <tr>
                                    <td>{{ $item->service_name }}</td>
                                    <td>{{ $item->service_icon }}</td>
                                    <td>{{ Str::substr($item->service_description, 0, 50) }}...</td>
                                    <td>
                                        <a href="/service/show/{{ $item->service_id }}" class="btn btn-warning p-1"><i
                                                class="fas fa-eye mr-1"></i>Show </a>
                                        <a href="/service/edit/{{ $item->service_id }}"
                                            class="btn btn-success p-2" data-toggle="tooltip" data-placement="top"
                                            title="Edit"><i class="fas fa-edit"></i> </a>
                                        <a href="/service/delete/{{ $item->service_id }}"
                                            class="btn btn-danger p-2" data-toggle="tooltip" data-placement="top" title="Delete"
                                            onclick="return confirm('Are you sure you want to delete this item?')"><i
                                                class="fas fa-trash"></i> </a>
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

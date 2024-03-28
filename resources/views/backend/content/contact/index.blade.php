@extends('backend.main.index')
@section('content')
    <div class="container-fluid">
        @if (session()->get('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif

        @if (session()->get('errors'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('errors') }}
            </div>
        @endif

        <!-- Page Heading -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Contact</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="table_pagination" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Contact Name</th>
                                <th>Contact Email</th>
                                <th>Contact Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contact as $item)
                                <tr>
                                    <td>{{ $item->contact_name }}</td>
                                    <td>{{ $item->contact_email }}</td>
                                    <td>{{ $item->created_at->format('d F Y') }}</td>
                                    <td>
                                        @if ($item->status)
                                            <span class="badge badge-success">Read</span>
                                        @else
                                            <span class="badge badge-primary">New</span>
                                        @endif
                                    </td>
                                    <td>

                                    <a href="/contact/show/{{ $item->contact_id }}" class="btn btn-warning mb-1"><i
                                            class="fas fa-eye mr-1"></i>Show </a>
                                    <a href="/contact/delete/{{ $item->contact_id }}"
                                        class="btn btn-danger h-100 data-toggle="tooltip data-placement="top" title="Delete"
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

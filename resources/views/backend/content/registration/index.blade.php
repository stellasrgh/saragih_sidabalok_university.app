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
                <h6 class="m-0 font-weight-bold text-primary">Data Registration</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">


                    <table class="table table-bordered" id="table_pagination" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date of Birth</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Major</th>
                                <th>Phone</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registrations as $item)
                                <tr>
                                    <td class="text-capitalize">{{ $item->name }}</td>
                                    <td>{{ $item->birth->format('d F Y') }}</td>
                                    <td class="text-capitalize">{{ $item->gender }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->major }}</td>
                                    <td>{{ $item->phone }}</td>

                                    <td class="text-capitalize">
                                        @if ($item->status == 'registered')
                                            <span class="text-primary">
                                                {{ $item->status }}

                                            </span>
                                        @endif

                                        @if ($item->status == 'approved')
                                            <span class="badge bg-success text-white">
                                                {{ $item->status }}
                                            </span>
                                        @endif

                                        @if ($item->status == 'rejected')
                                            <span class="badge bg-danger text-white">
                                                {{ $item->status }}
                                            </span>
                                            @endif
                                    </td>
                                    <td>
                                        {{ $item->created_at->format('d F Y') }}</td>
                                    </td>

                                    <td>
                                        <a href="/registration/show/{{ $item->registration_id }}"
                                            class="btn btn-warning w-100 mb-1"><i class="fas fa-eye mr-1"></i>Show </a>
                                        <a href="/registration/edit/{{ $item->registration_id }}"
                                            class="btn btn-success data-toggle="tooltip data-placement="top"
                                            title="Edit"><i class="fas fa-edit"></i> </a>
                                        <a href="/registration/delete/{{ $item->registration_id }}"
                                            class="btn btn-danger w-25" data-toggle="tooltip " data-placement="top"
                                            title="Delete"
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

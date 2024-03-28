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
                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <a href="/user/create" class="btn btn-primary mb-3">+Create</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th> Name</th>
                                <th> Email</th>
                                {{-- <th> Password</th> --}}
                                <th> Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    {{-- <td>{{ $item->password }}</td> --}}
                                    <td>
                                        <img src="{{ Storage::url($item->photo) }}" style="height: 50px" alt="">
                                    </td>

                                    <td>
                                        <a href="/user/show/{{ $item->user_id }}" class="btn btn-warning w-100 mb-1"><i class="fas fa-eye mr-1"></i>Show </a>
                                        <a href="/user/edit/{{ $item->user_id }}"
                                            class="btn btn-success data-toggle="tooltip data-placement="top"
                                            title="Edit"><i class="fas fa-edit"></i> </a>
                                        <a href="/user/delete/{{ $item->user_id }}" class="btn btn-danger data-toggle="tooltip data-placement="top" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fas fa-trash"></i> </a>


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


@extends('backend.main.index')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"> Data Major</h6>
            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <a href="/major/create" class="btn btn-primary mb-3">+Create</a>
                    <table class="table table-bordered" id="table_pagination" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th> Major Name</th>
                                <th> Major Logo</th>
                                <th> Major Description</th>
                                <th> Dean Name</th>
                                <th> Dean Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($major as $item)
                                <tr>
                                    <td>{{ $item->major_name}}</td>
                                    <td>
                                        <img src="{{ Storage::url($item->major_logo) }}" style="height: 50px" alt="">
                                    </td>
                                    <td>{{ $item->major_description }}</td>
                                    <td>{{ $item->dean_name }}</td>
                                    <td>
                                        <img src="{{ Storage::url($item->dean_photo) }}" style="height: 50px" alt="">
                                    </td>
                                    <td>
                                        {{-- 1 ++++ --}}
                                        <a href="/major/show/{{ $item->major_id }}" class="btn btn-warning"><i class="fas fa-eye mr-1"></i>Show </a>
                                        {{-- ++++ --}}
                                        <a href="/major/edit/{{ $item->major_id }}"
                                            class="btn btn-success data-toggle="tooltip data-placement="top"
                                            title="Edit"><i class="fas fa-edit"></i> </a>
                                        <a href="/major/delete/{{ $item->major_id }}"
                                            class="btn btn-danger data-toggle="tooltip data-placement="top" title="Delete"
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



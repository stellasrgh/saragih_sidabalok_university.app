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
                <h6 class="m-0 font-weight-bold text-primary">Data Presentation</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Presentation Title</th>
                                <th>Presentation Description</th>
                                <th>Presentation Image</th>
                                <th>Presentation URL</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($presentation as $item)
                                <tr>
                                    <td>{{ $item->presentation_title }}</td>
                                    <td>{{ Str::substr($item->presentation_description, 0, 50)  }}...</td>
                                    <td>
                                        <img src="{{ Storage::url($item->presentation_image) }}" style="height: 50px" alt="">
                                        </td>
                                        <td>{{ $item->presentation_url }}</td>


                                    <td>
                                        <a href="/presentation/show/{{ $item->presentation_id }}" class="btn btn-warning w-100 mb-1"><i class="fas fa-eye mr-1"></i>Show </a>
                                        <a href="/presentation/edit/{{ $item->presentation_id }}" class="btn btn-success w-100 mb-1" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i> </a>


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


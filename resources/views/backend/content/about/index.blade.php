@extends('backend.main.index')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
   

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data University</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Campus Name</th>
                            <th>Established Year</th>
                            <th>Background</th>
                            <th>Address</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Map</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($about as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->date }}</td>
                            <td>
                                <video autoplay muted loop width="200">
                                    <source src="{{ Storage::url($item->background) }}" type="video/mp4">
                                </video>
                            </td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->telephone }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->map }}</td>
                            <td>
                                <a href="about/edit/{{ $item->about_id }}" class="btn btn-success">Edit</a>
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

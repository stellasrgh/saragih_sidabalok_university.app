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
                <h6 class="m-0 font-weight-bold text-primary">Data Major</h6>
            </div>
            <div class="card-body">

                {{-- 4 ++++ --}}
                <div class="table-responsive">
                    <a href="{{  url()->previous() }}" class="btn btn-secondary mb-3"><i class="fas fa-arrow-left mr-1"></i>Back</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <tbody>
                            <tr>
                                <th colspan="2">ID DATA :{{ $major->major_id }}</th>
                            </tr>
                           <tr>
                            <th>Major Name</th>
                            <td>{{ $major->major_name }}</td>
                           </tr>
                           <tr>
                            <th>Major Logo</th>
                            <td>
                                <img src="{{ Storage::url($major->major_logo) }}" style="height: 100px" alt=""></td>
                           </tr>

                           <tr>
                            <th>Description</th>
                            <td>{{ $major->major_description }}</td>
                           </tr>
                           <tr>
                            <th>Dean Name</th>
                            <td>{{ $major->dean_name }}</td>
                           </tr>
                           <tr>
                            <th>Dean Photo</th>
                            <td>
                                <img src="{{ Storage::url($major->dean_photo) }}" style="height: 100px" alt=""></td>
                           </tr>
                        </tbody>


                    </table>
                </div>
                {{-- ++++ --}}
            </div>
        </div>

    </div>
@endsection





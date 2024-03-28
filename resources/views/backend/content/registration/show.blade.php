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
                    <a href="{{  url()->previous() }}" class="btn btn-secondary mb-3"><i class="fas fa-arrow-left mr-1"></i>Back</a>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <tbody>
                            <tr>
                                <th colspan="2">ID Registration :{{ $registration->registration_id }}</th>
                            </tr>
                            <tr>
                            <th>Status</th>
                            <td class="text-capitalize">{{ $registration->status }}</td>
                           </tr>
                           <tr>
                            <th>Date</th>
                            <td>{{ $registration->created_at->format('d F Y') }}</td>
                           </tr>
                           <tr>
                            <th>Name</th>
                            <td>{{ $registration->name }}</td>
                           </tr>
                           <tr>
                            <th>Date of Birth</th>
                            <td>{{ $registration->birth->format('d F Y') }}</td>
                           </tr>
                           <tr>
                            <th>Gender</th>
                            <td class="text-capitalize">{{ $registration->gender }}</td>
                           </tr>
                           <tr>
                            <th>Email</th>
                            <td>{{ $registration->email }}</td>
                           </tr>
                           <tr>
                            <th>Major</th>
                            <td>{{ $registration->major }}</td>
                           </tr>
                           <tr>
                            <th>Phone</th>
                            <td>{{ $registration->phone }}</td>
                           </tr>
                           <tr>
                            <th>Address</th>
                            <td>{{ $registration->address }}</td>
                           </tr>
                           <tr>
                            <th>File</th>
                            <td><a href="{{ Storage::url($registration->file) }}">File</a></td>
                           </tr>
                        </tbody>


                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection





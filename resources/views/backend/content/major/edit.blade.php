@extends('backend.main.index')
@section('content')

    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Page Heading -->


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Major</h6>
            </div>
            <div class="card-body">
                <Form action="/major/update/{{ $major->major_id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name_major_form" class="form-label">Major Name</label>
                        <input type="text" class="form-control" id="name_major_form" name="major_name"
                            placeholder="Input Major Name" value="{{ $major->major_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="logo_major_form" class="form-label">Major Logo</label>
                        <input type="file" class="form-control" id="logo_major_form" name="major_logo"
                            placeholder="Input Major Logo" >
                    </div>
                    <div class="mb-3">
                        <label for="description_major_form" class="form-label">Major Description</label>
                        <textarea class="form-control" id="description_major_form" name="major_description" placeholder="Input Reason Description"
                            rows=5>{{ $major->major_description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="name_dean_form" class="form-label">Dean Name</label>
                        <input type="text" class="form-control" id="name_dean_form" name="dean_name"
                            placeholder="Input Dean Name" value="{{ $major->dean_name }}">
                    </div>
                    <div class="mb-3">
                        <label for="photo_dean_form" class="form-label">Dean Photo</label>
                        <input type="file" class="form-control" id="photo_dean_form" name="dean_photo"
                            placeholder="Input Dean photo" >
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <input type="submit" class+"value"> --}}

                </Form>
            </div>
        </div>

    </div>
@endsection





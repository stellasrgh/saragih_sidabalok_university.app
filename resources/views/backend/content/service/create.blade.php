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
                <h6 class="m-0 font-weight-bold text-primary">Data of University Service</h6>
            </div>
            <div class="card-body">
                <Form action="/service/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name_service_form" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name_service_form" name="service_name"
                            placeholder="Input Service Name" value="{{ old('service_name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="icon_service" class="form-label">Icon</label>
                        <input type="text" class="form-control" id="icon_service" name="service_icon"
                            placeholder="Input Service Icon" value="{{ old('service_icon') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="service_description" placeholder="Input Service Description"
                            rows=5>{{ old('service_description') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <input type="submit" class+"value"> --}}

                </Form>
            </div>
        </div>

    </div>
@endsection


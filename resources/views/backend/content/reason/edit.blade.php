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
                <h6 class="m-0 font-weight-bold text-primary">Data of Reason </h6>
            </div>
            <div class="card-body">
                <Form action="/reason/update/{{ $reason->reason_id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="the_reason_form" class="form-label">The Reason</label>
                        <input type="text" class="form-control" id="the_reason_form" name="the_reason"
                            placeholder="Input the Reason" value="{{ $reason->the_reason }}">
                    </div>
                    <div class="mb-3">
                        <label for="photo_reason" class="form-label">Reason Photo</label>
                        <input type="file" class="form-control" id="photo_reason" name="reason_photo"
                            placeholder="Input Photo" value="{{ $reason->reason_photo }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="reason_description" placeholder="Input Reason Description"
                            rows=5>{{ $reason->reason_description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <input type="submit" class+"value"> --}}

                </Form>
            </div>
        </div>

    </div>
@endsection




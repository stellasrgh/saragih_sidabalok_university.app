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
                <h6 class="m-0 font-weight-bold text-primary">Data Presentation</h6>
            </div>
            <div class="card-body">
                <Form action="/presentation/update/{{ $presentation->presentation_id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title_presentation_form" class="form-label">Presentation Title</label>
                        <input type="text" class="form-control" id="title_presentation_form" name="presentation_title"
                            placeholder="Input Presentation Title" value="{{ $presentation->presentation_title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description_presentation_form" class="form-label">Presentation Description</label>
                        <textarea class="form-control" id="description_presentation_form" name="presentation_description" placeholder="Input Presentation Description"
                            rows=5>{{ $presentation->presentation_description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image_presentation_form" class="form-label">Presentation Image</label>
                        <input type="file" class="form-control" id="image_presentation_form" name="presentation_image"
                            placeholder="Input Presentation Image" >
                    </div>

                    <div class="mb-3">
                        <label for="url_presentation_form" class="form-label">Presentation URL</label>
                        <input type="url" class="form-control" id="url_presentation_form" name="presentation_url"
                            placeholder="Input Presentation URL" value="{{ $presentation->presentation_url }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <input type="submit" class+"value"> --}}

                </Form>
            </div>
        </div>

    </div>
@endsection




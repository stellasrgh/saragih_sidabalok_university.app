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
                <h6 class="m-0 font-weight-bold text-primary">Data University</h6>
            </div>
            <div class="card-body">
                <Form action="/about/update/{{ $about->about_id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name_form" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name_form" name="name" placeholder="Input Name"
                            value="{{ $about->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="date_form" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date_form" name="date" placeholder="Input Date"
                            value="{{ $about->date->format('Y-m-d') }}">
                    </div>
                    <div class="mb-3">
                        <label for="background_form" class="form-label">Background</label>
                        <input type="file" class="form-control" id="background_form" name="background"
                            placeholder="Input Background">
                    </div>
                    <div class="mb-3">
                        <label for="address_form" class="form-label">Address</label>
                        <textarea rows="5" class="form-control" id="address_form" name="address" placeholder="Input Address">{{ $about->address }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="telephone_form" class="form-label">Telephone</label>
                        <input type="tel" class="form-control" id="telephone_form" name="telephone" placeholder="Input Telephone"
                            value="{{ $about->telephone }}">
                    </div>
                    <div class="mb-3">
                        <label for="email_form" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email_form" name="email" placeholder="Input Email"
                            value="{{ $about->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="map_form" class="form-label">Map</label>
                        <input type="url" class="form-control" id="map_form" name="map" placeholder="Input Map"
                            value="{{ $about->map }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <input type="submit" class+"value"> --}}

                </Form>

            </div>
        </div>

    </div>
@endsection

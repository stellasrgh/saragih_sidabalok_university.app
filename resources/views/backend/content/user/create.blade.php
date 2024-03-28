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
                <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
            </div>
            <div class="card-body">
                <Form action="/user/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name_form" class="form-label"> Name</label>
                        <input type="text" class="form-control" id="name_form" name="name"
                            placeholder="Input Name" value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                        <label for="email_form" class="form-label"> Email</label>
                        <input type="text" class="form-control" id="email_form" name="email"
                            placeholder="Input Email" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password_form" class="form-label"> Password</label>
                        <input type="password" class="form-control" id="password_form" name="password"
                            placeholder="Input Password" value="{{ old('password') }}">
                    </div>
                    <div class="mb-3">
                        <label for="photo_form" class="form-label"> Photo</label>
                        <input type="file" class="form-control" id="photo_form" name="photo"
                            placeholder="Input Photo" value="{{ old('photo') }}">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <input type="submit" class+"value"> --}}

                </Form>
            </div>
        </div>

    </div>
@endsection




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
                <h6 class="m-0 font-weight-bold text-primary">Data Registration</h6>
            </div>
            <div class="card-body">
                <form action="/registration/update/{{ $registration->registration_id }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name_registration_form" class="form-label"> Name</label>
                        <input type="text" class="form-control" id="name_registration_form" name="name"
                            placeholder="Input  Name" value="{{ $registration->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="birth_registration_form" class="form-label"> Date of Birth</label>
                        <input type="date" class="form-control" id="birth_registration_form" name="birth"
                            placeholder="Input Date of Birth" value="{{ $registration->birth->format('Y-m-d') }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"> Gender</label>
                        <div class="d-flex">
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="radio" name="gender" id="gender_id1"
                                    value="male" @checked('male'==$registration->gender) >
                                <label class="form-check-label" for="gender_id1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="radio" name="gender" id="gender_id2"
                                    value="female" @checked('female'==$registration->gender)>
                                <label class="form-check-label" for="gender_id2">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email_registration_form" class="form-label"> Email</label>
                        <input type="text" class="form-control" id="email_registration_form" name="email"
                            placeholder="Input  Email" value="{{ $registration->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="major_registration_form" class="form-label">Major</label>
                        <select name="major" id="major_registration_form" class="form-control">
                            <option value="">Select Major</option>
                            @foreach ($majors as $item)
                                <option value="{{ $item->major_name }}" @selected($item->major_name == $registration->major)>{{ $item->major_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="phone_registration_form" class="form-label"> Phone</label>
                        <input type="tel" class="form-control" id="phone_registration_form" name="phone"
                            placeholder="Input  Phone" value="{{ $registration->phone }}">
                    </div>
                    <div class="mb-3">
                        <label for="address_registration_form" class="form-label">Address</label>
                        <textarea class="form-control" id="address_registration_form" name="address" placeholder="Input Address" rows=5>{{ $registration->address }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="file_registration_form" class="form-label">File</label>
                        <input type="file" class="form-control" id="file_registration_form" name="file"
                            placeholder="Input File">
                    </div>
                    <div class="mb-3">
                        <label for="status_registration_form" class="form-label">Status</label>
                        <select name="status" id="status_registration_form" class="form-control">
                            <option value="">Select Status</option>
                            <option value="approved" @selected($registration->status == 'approved')>Approved</option>
                            <option value="rejected" @selected($registration->status == 'rejected')>Rejected</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <input type="submit" class+"value"> --}}

                </Form>
            </div>
        </div>

    </div>

@endsection


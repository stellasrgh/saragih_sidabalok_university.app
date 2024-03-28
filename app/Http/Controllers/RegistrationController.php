<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $registrations = Registration::latest()->get();
        return view('backend.content.registration.index', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required|string|max:255',
            'birth' => 'required|date',
            'gender' => 'required|string|in:male,female',
            'email' => 'required|string|max:255|email',
            'major' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'file' => 'required',

        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
        $data = $request->all();
        $data['status'] = 'registered';

        if ($file = $request->file('file')) {


            $data['file'] = Storage::putFileAs('public/file_registration', $file, now()->format('Y m d H-i-s') . ' - ' . $file->getClientOriginalName());
        }
        $registration = Registration::create($data);

        if ($registration) {
            return back()->withSuccess('Registration Success');
        } else {
            return back()->withInput()->withErrors('Registration Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        return view('backend.content.registration.show', compact('registration'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        $majors = Major::all();
        return view('backend.content.registration.edit', compact('registration', 'majors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'major' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'file' => 'nullable',
            'status' => 'required|string|max:255|in:approved,rejected',


        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
        $data = $request->all();

        if ($file = $request->file('file')) {

            if (Storage::get($registration->file)) {
                Storage::delete($registration->file);
            }
            $data['file'] = Storage::putFileAs('public/file_registration', $file, now()->format('Y m d H-i-s') . ' - ' . $file->getClientOriginalName());
        }
        $registration->update($data);

        if ($registration) {
            return redirect()->to('/registration')->withSuccess('Update Success');
        } else {
            return back()->withInput()->withErrors('Update Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        if (Storage::get($registration->file)) {
            Storage::delete($registration->file);
        }
        $registration->delete();

        if ($registration) {
            return back()->withSuccess('Delete Success');
        } else {
            return back()->withInput()->withErrors('Delete Error');
        }
    }
}

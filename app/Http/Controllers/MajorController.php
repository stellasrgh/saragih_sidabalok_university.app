<?php

namespace App\Http\Controllers;

use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $major = Major::all();
        return view('backend.content.major.index', compact('major'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.content.major.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'major_name' => 'required|string|max:255',
            'major_logo' => 'required|mimes:png,jpg,jpeg',
            'major_description' => 'required|string|max:255',
            'dean_name' => 'required|string|max:255',
            'dean_photo' => 'required|mimes:png,jpg,jpeg',

        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $data = $request->all();

        if ($logo = $request->file('major_logo')) {
            $data['major_logo'] = Storage::putFileAs('public/major_logo', $logo, now()->format('Y m d H-i-s') . ' - ' . $logo->getClientOriginalName());
        }
        if ($photo = $request->file('dean_photo')) {
            $data['dean_photo'] = Storage::putFileAs('public/dean_photo', $photo, now()->format('Y m d H-i-s') . ' - ' . $photo->getClientOriginalName());
        }

        $major = Major::create($data);

        if ($major) {
            return redirect()->to('/major')->withSuccess('Insert Success');
        } else {
            return back()->withInput()->withErrors('Insert Failed');
        }
    }

    /**
     * Display the specified resource.
     */

    //  3 ++++
    public function show(Major $major)
    {
        return view('backend.content.major.show', compact('major'));
    }
    //  ++++

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Major $major)
    {
        return view('backend.content.major.edit', compact('major'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Major $major)
    {
        $validator = Validator::make($request->all(), [

            'major_name' => 'required|string|max:255',
            'major_logo' => 'nullable|mimes:png,jpg,jpeg',
            'major_description' => 'required|string|max:255',
            'dean_name' => 'required|string|max:255',
            'dean_photo' => 'nullable|mimes:png,jpg,jpeg',

        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
        $data = $request->all();

        if ($logo = $request->file('major_logo')) {

            if (Storage::get($major->major_logo)) {
                Storage::delete($major->major_logo);
            }
            $data['major_logo'] = Storage::putFileAs('public/major_logo', $logo, now()->format('Y m d H-i-s') . ' - ' . $logo->getClientOriginalName());
        }
        if ($photo = $request->file('dean_photo')) {

            if (Storage::get($major->dean_photo)) {
                Storage::delete($major->dean_photo);
            }
            $data['dean_photo'] = Storage::putFileAs('public/dean_photo', $photo, now()->format('Y m d H-i-s') . ' - ' . $photo->getClientOriginalName());
        }
        $major->update($data);

        if ($major) {
            return redirect()->to('/major')->withSuccess('Update Success');
        } else {
            return back()->withInput()->withErrors('Update Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Major $major)
    {
        // skip
        if (Storage::get($major->major_logo)) {
            Storage::delete($major->major_logo);
        }
        if (Storage::get($major->dean_photo)) {
            Storage::delete($major->dean_photo);
        }
        // end skip

        
        $major->delete();
        return redirect()->to('/major')->withSuccess('Delete Success');
    }
}

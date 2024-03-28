<?php

namespace App\Http\Controllers;

use App\Models\Presentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presentation = Presentation::all();
        return view('backend.content.presentation.index', compact('presentation'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Presentation $presentation)
    {
        return view('backend.content.presentation.edit', compact('presentation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Presentation $presentation)
    {
        return view('backend.content.presentation.edit', compact('presentation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Presentation $presentation)
    {
        $validator = Validator::make($request->all(), [

            'presentation_title' => 'required|string|max:255',
            'presentation_description' => 'required|string|max:255',
            'presentation_image' => 'nullable|mimes:png,jpg',
            'presentation_url' => 'required|string|max:255',


        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
        $data = $request->all();

        if ($image = $request->file('presentation_image')) {

            if (Storage::get($presentation->presentation_image)) {
                Storage::delete($presentation->presentation_image);
            }
            $data['presentation_image'] = Storage::putFileAs('/public/presentation_image', $image, now()->format('Y m d H-i-s') . ' - ' . $image->getClientOriginalName());
        }
        $presentation->update($data);

        if ($presentation) {
            return redirect()->to('/presentation')->withSuccess('Update Success');
        } else {
            return back()->withInput()->withErrors('Update Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Presentation $presentation)
    {

    }
}

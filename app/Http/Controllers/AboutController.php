<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('backend.content.about.index', compact('about'));
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
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('backend.content.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $validator = Validator::make($request->all(), [
            'name' =>'required|string|max:255',
            'date' =>'required|date',
            'background' =>'nullable|mimetypes:video/mp4',
            'address' =>'required|string|max:255',
            'telephone' =>'required|string|max:255',
            'email' =>'required|string|email|max:225',
          'map' =>'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
        $data = $request->all();

        if($background = $request->file('background')) {
            if(Storage::get($about->background)){
                Storage::delete($about->background);
            }
            $data['background'] = Storage::putFile('public/background',$background);
    }

        $about->update($data);

        if($about){
            return redirect()->to('/about')->withSuccess('Insert Success');
        }else{
            return back()->withInput()->withErrors('Insert Error');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        //
    }
}

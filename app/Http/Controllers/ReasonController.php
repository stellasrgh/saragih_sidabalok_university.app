<?php

namespace App\Http\Controllers;

use App\Models\Reason;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ReasonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reason = Reason::all();
        return view('backend.content.reason.index', compact('reason'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.content.reason.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'the_reason' => 'required|string|max:255',
            'reason_photo' => 'required|mimes:png,jpg',
            'reason_description' => 'required|string|max:255',

        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $data = $request->all();

        if ($photo = $request->file('reason_photo')) {
            $data['reason_photo'] = Storage::putFileAs('public/photo', $photo, now()->format('Y m d H-i-s') . ' - ' . $photo->getClientOriginalName());
        }

        $reason = Reason::create($data);

        if($reason){
            return redirect()->to('/reason')->withSuccess('Insert Success');
        }else{
            return back()->withInput()->withErrors('Insert Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Reason $reason)
    {
        return view('backend.content.reason.show', compact('reason'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reason $reason)
    {
        return view('backend.content.reason.edit', compact('reason'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reason $reason)
    {

        $validator = Validator::make($request->all(), [
            'the_reason' => 'required|string|max:255',
            'reason_photo' => 'required|mimes:png,jpg',
            'reason_description' => 'required|string|max:255',

        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
        $data = $request->all();

        if ($photo = $request->file('reason_photo')) {

            if(Storage::get($reason->reason_photo)){
                Storage::delete($reason->reason_photo);
            }
            $data['reason_photo'] = Storage::putFileAs('public/photo',$photo, now()->format('Y m d H-i-s').' - '.$photo->getClientOriginalName());

    }
    $reason->update($data);

    if($reason){
        return redirect()->to('/reason')->withSuccess('Update Success');
    }else{
        return back()->withInput()->withErrors('Update Error');
    }
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reason $reason)
    {
        if(Storage::get($reason->reason_photo)){
            Storage::delete($reason->reason_photo);
        }
        $reason->delete();
        return redirect()->to('/reason')->withSuccess('Delete Success');
    }
}

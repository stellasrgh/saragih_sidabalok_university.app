<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $contact = Contact::latest()->get();
        return view('backend.content.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.content.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'contact_name' => 'required|string|max:255',
            'contact_email' => 'required|string|max:255|email',
            'contact_message' => 'required|string|max:255',
        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
        $data = $request->all();

        $contact = Contact::create($data);
        if ($contact) {
            return back()->withSuccess('Message Sent Successfully');
        } else {
            return back()->withInput()->withErrors('Message Sent Fails');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        $contact->status = true; // boleh true atau boleh 1
        $contact->save();
        return view('backend.content.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();

        if ($contact) {
            return back()->withSuccess('Delete Success');
        } else {
            return back()->withInput()->withErrors('Delete Error');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('backend.content.user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.content.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255|min:8',
            'photo' => 'required|mimes:png,jpg',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $data = $request->all();

        if ($photo = $request->file('photo')) {
            $data['photo'] = Storage::putFileAs('/public/photo', $photo, now()->format('Y m d H-i-s') . '- ' . $photo->getClientOriginalName());
        }

        $user = User::create($data);

        if ($user) {
            return redirect()->to('/user')->withSuccess('Insert Success');
        } else {
            return back()->withInput()->withErrors('Insert Failed');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('backend.content.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('backend.content.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|max:255|min:8',
            'photo' => 'nullable|mimes:png,jpg',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
        $data = $request->all();
        if ($photo = $request->file('photo')) {
            $data['photo'] = Storage::putFileAs('/public/photo', $photo, now()->format('Y m d H-i-s'). '- '. $photo->getClientOriginalName());
        }
        $user->update($data);
        if ($user) {
            return redirect()->to('/user')->withSuccess('Update Success');
        } else {
            return back()->withInput()->withErrors('Update Error');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if (Storage::get($user->photo)) {
            Storage::delete($user->photo);
        }
        $user->delete();
        return redirect()->to('/user')->withSuccess('Delete Success');
    }
}

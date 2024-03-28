<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
public function index()
{
    $service = Service::all();
    return view('backend.content.service.index', compact('service'));
}

public function create()
{
    return view('backend.content.service.create');

}
public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service_name' => 'required|string|max:255',

            'service_icon' => 'required|string|max:255',
            'service_description' => 'required|string|max:255',


        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $data = $request->all();

        $service = Service::create($data);

        if ($service) {
            return redirect()->to('/service')->withSuccess('Insert Success');
        } else {
            return back()->withInput()->withErrors('Insert Error');
        }
    }
    public function edit(Service $service)
    {
        return view('backend.content.service.edit', compact('service'));
    }
    public function update(Request $request, Service $service)
    {

        $validator = Validator::make($request->all(), [
            'service_name' => 'required|string|max:255',
            'service_icon' => 'required|string|max:255',
            'service_description' => 'required|string|max:255',


        ]);
        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $data = $request->all();

        $service->update($data);

        if ($service) {
            return redirect()->to('/service')->withSuccess('Update Success');
        } else {
            return back()->withInput()->withErrors('Update Error');
        }

    }
    public function destroy(Service $service)
    {
        $service->delete();

        if ($service) {
            return back()->withSuccess('Delete Success');
        } else {
            return back()->withInput()->withErrors('Delete Error');
        }
    }
    public function show(Service $service)
    {
        return view('backend.content.service.show', compact('service'));
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Major;
use App\Models\Presentation;
use App\Models\Reason;
use App\Models\Service;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $about = About::first();
        $majors = Major::all();
        // dd($major);
        $presentation = Presentation::first();
        $reasons = Reason::limit(3)->get();
        $services = Service::limit(3)->latest()->get();
        return view('frontend.index', compact('about', 'majors', 'presentation', 'reasons', 'services'));
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Circulars;

class HomeController extends Controller
{
    public function index()
    {
        $circulars = Circulars::latest()->take(5)->get();
        return view('frontend.index', compact('circulars'));
    }
}

<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\CurrentGK;

class GKController extends Controller
{
    public function index()
    {
        $gks = CurrentGK::latest()->paginate(5);
        return view('member.gk.index', compact('gks'));
    }
}

<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\LectureSheet;

class LectureSheetController extends Controller
{
    public function index()
    {
        $sheets = LectureSheet::latest()->get();
        return view('member.sheet.index', compact('sheets'));
    }
    public function show($id)
    {
        $sheet = LectureSheet::findOrFail($id);
        return view('member.sheet.show', compact('sheet'));
    }
}
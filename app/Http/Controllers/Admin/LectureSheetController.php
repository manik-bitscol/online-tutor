<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLectureSheetRequest;
use App\Http\Requests\UpdateLectureSheetRequest;
use App\Models\LectureSheet;

class LectureSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sheets = LectureSheet::latest()->paginate(15);
        return view('admin.lecture-sheet.index', compact('sheets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.lecture-sheet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLectureSheetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLectureSheetRequest $request)
    {
        try {
            LectureSheet::create($request->all());
            return redirect()->route('sheets.index')->withSuccess('New Lecture Sheet Added Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LectureSheet  $lectureSheet
     * @return \Illuminate\Http\Response
     */
    public function show(LectureSheet $lectureSheet)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LectureSheet  $lectureSheet
     * @return \Illuminate\Http\Response
     */
    public function edit($lectureSheetId)
    {
        $lectureSheet = LectureSheet::findOrFail($lectureSheetId);
        return view('admin.lecture-sheet.edit', compact('lectureSheet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLectureSheetRequest  $request
     * @param  \App\Models\LectureSheet  $lectureSheet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLectureSheetRequest $request, $lectureSheet)
    {
        try {
            LectureSheet::findOrFail($lectureSheet)->update($request->all());
            return redirect()->route('sheets.index')->withSuccess('Lecture Sheet Updated Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LectureSheet  $lectureSheet
     * @return \Illuminate\Http\Response
     */
    public function destroy($lectureSheetId)
    {
        try {
            LectureSheet::findOrFail($lectureSheetId)->delete();
            return redirect()->route('sheets.index')->withSuccess('Lecture Sheet Deleted Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
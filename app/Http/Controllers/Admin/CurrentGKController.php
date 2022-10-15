<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCurrentGKRequest;
use App\Http\Requests\UpdateCurrentGKRequest;
use App\Models\CurrentGK;

class CurrentGKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentsGKs = CurrentGK::latest()->paginate(15);
        return view('admin.current-gk.index', compact('currentsGKs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.current-gk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCurrentGKRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurrentGKRequest $request)
    {
        try {
            CurrentGK::create($request->all());
            return redirect()->route('gks.index')->withSuccess('New GK Added Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CurrentGK  $currentGK
     * @return \Illuminate\Http\Response
     */
    public function show(CurrentGK $currentGK)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CurrentGK  $currentGK
     * @return \Illuminate\Http\Response
     */
    public function edit($gkId)
    {
        $gk = CurrentGK::findOrFail($gkId);
        return view('admin.current-gk.edit', compact('gk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCurrentGKRequest  $request
     * @param  \App\Models\CurrentGK  $currentGK
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCurrentGKRequest $request, $gkId)
    {
        try {
            CurrentGK::findOrFail($gkId)->update($request->all());
            return redirect()->route('gks.index')->withSuccess('Current GK Updated Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CurrentGK  $currentGK
     * @return \Illuminate\Http\Response
     */
    public function destroy($gkId)
    {
        try {
            CurrentGK::findOrFail($gkId)->delete();
            return redirect()->route('gks.index')->withSuccess('Current GK Deleted Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
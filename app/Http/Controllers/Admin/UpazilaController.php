<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Upazila;
use App\Http\Requests\StoreUpazilaRequest;
use App\Http\Requests\UpdateUpazilaRequest;
use App\Models\District;

class UpazilaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $upzilas=Upazila::latest()->paginate(10);
        $districts=District::get();
        return view('admin.upzila.index',compact('upzilas','districts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTopicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpazilaRequest $request)
    {

        try {
            Upazila::create($request->all());
            return redirect()->route('upzilas.index')->withSuccess("New Upzila Added To List Successfully");
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withInput()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Upazila $upzila)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Upazila $upzila)
    {
        $districts=District::get();
        return view('admin.upzila.edit',compact('upzila','districts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTopicRequest  $request
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUpazilaRequest $request, $upzilaId)
    {
        try{
            Upazila::findOrFail($upzilaId)->update($request->all());
            return \redirect()->route('upzilas.index')->withSuccess('Upzila Updated Successfully');
        }catch(\Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($upzilaId)
    {
        try{
            Upazila::findOrFail($upzilaId)->delete();
            return redirect()->back()->withSuccess("Upzila Deleted Successfully");
        }catch(\Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}

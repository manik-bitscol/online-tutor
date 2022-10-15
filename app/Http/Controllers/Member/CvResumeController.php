<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\CvResume;
use App\Http\Requests\StoreCvResumeRequest;
use App\Http\Requests\UpdateCvResumeRequest;
use App\Models\Address;
use App\Models\EducationQualification;
use Illuminate\Support\Facades\Auth;
class CvResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bioData=CvResume::where('user_id',Auth::id())->latest()->first();
        $presentAddress=Address::where('user_id',Auth::id())->where('address_type','present-address')->latest()->first();
        $permanentAddress=Address::where('user_id',Auth::id())->where('address_type','permanent-address')->latest()->first();
        $educations=EducationQualification::where('user_id',Auth::id())->latest()->get();
        
        return view('member.cv.index',compact('bioData','presentAddress','permanentAddress','educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCvResumeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCvResumeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CvResume  $cvResume
     * @return \Illuminate\Http\Response
     */
    public function show(CvResume $cvResume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CvResume  $cvResume
     * @return \Illuminate\Http\Response
     */
    public function edit(CvResume $cvResume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCvResumeRequest  $request
     * @param  \App\Models\CvResume  $cvResume
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCvResumeRequest $request, CvResume $cvResume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CvResume  $cvResume
     * @return \Illuminate\Http\Response
     */
    public function destroy(CvResume $cvResume)
    {
        //
    }
}

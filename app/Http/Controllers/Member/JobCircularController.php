<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreJobCircularRequest;
use App\Http\Requests\UpdateJobCircularRequest;
use App\Models\JobCircular;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class JobCircularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobCirculars = JobCircular::where('user_id', Auth::id())->get();
        return view('member.dashboard.job-circular', compact('jobCirculars'));
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
     * @param  \App\Http\Requests\StoreJobCircularRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreJobCircularRequest $request)
    {
        try {
            if ($request->hasFile('job_circular_image'))
            {
                $image     = $request->file('job_circular_image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/images/job-circulars/' . $imageName);
                $url = 'uploads/images/job-circulars/' . $imageName;
            }
            JobCircular::create([
                'user_id'            => Auth::id(),
                'institute_name'     => $request->institute_name,
                'post_name'          => $request->post_name,
                'job_circular_image' => $url,
            ]);
            return redirect()->route('save.job.document')->withSuccess("Job Circular Document Added Successfully");
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withInput()->withError($e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobCircular  $jobCircular
     * @return \Illuminate\Http\Response
     */
    public function show(JobCircular $jobCircular)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobCircular  $jobCircular
     * @return \Illuminate\Http\Response
     */
    public function edit(JobCircular $jobCircular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobCircularRequest  $request
     * @param  \App\Models\JobCircular  $jobCircular
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJobCircularRequest $request, JobCircular $jobCircular)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobCircular  $jobCircular
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $hardCopy = JobCircular::findOrFail($id);
            unlink($hardCopy->job_circular_image);
            $hardCopy->delete();
            return redirect()->route('save.job.document')->withSuccess("Job Circular Document Deleted Successfully");
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }
}

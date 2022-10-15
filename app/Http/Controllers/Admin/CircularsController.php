<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCircularsRequest;
use App\Http\Requests\UpdateCircularsRequest;
use App\Models\Circulars;
use Intervention\Image\Facades\Image;

class CircularsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobCirulars = Circulars::latest()->get();
        return view('admin.job-circular.index', compact('jobCirulars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job-circular.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCircularsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCircularsRequest $request)
    {
        try {
            if ($request->hasFile('circular_image'))
            {
                $image     = $request->file('circular_image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/images/circular/' . $imageName);
                $url = 'uploads/images/circular/' . $imageName;
            }
            Circulars::create([
                'circular_title'       => $request->circular_title,
                'application_fee'      => $request->application_fee,
                'circular_image'       => $url,
                'exam_date'            => $request->exam_date,
                'exam_time'            => $request->exam_time,
                'circular_location'    => $request->circular_location,
                'circular_description' => $request->circular_description,
            ]);
            return redirect()->route('job.index')->withSuccess("New Job Circular Added To List Successfully");
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withInput()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Circulars  $circulars
     * @return \Illuminate\Http\Response
     */
    public function show($circular)
    {
        $circular = Circulars::findOrFail($circular);
        return view('frontend.job-circular.show', compact('circular'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Circulars  $circulars
     * @return \Illuminate\Http\Response
     */
    public function edit($circular)
    {
        $jobCircular = Circulars::findOrfail($circular);
        return view('admin.job-circular.edit', compact('jobCircular'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCircularsRequest  $request
     * @param  \App\Models\Circulars  $circulars
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCircularsRequest $request, $circular)
    {

        try {
            if ($request->hasFile('circular_image'))
            {

                $image     = $request->file('circular_image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/images/circular/' . $imageName);
                $url = 'uploads/images/circular/' . $imageName;
                if (file_exists($request->old_image))
                {
                    unlink($request->old_image);
                }
            }
            else
            {
                $url = $request->old_image;
            }
            Circulars::findOrFail($circular)->update([
                'circular_title'       => $request->circular_title,
                'application_fee'      => $request->application_fee,
                'circular_image'       => $url,
                'exam_date'            => $request->exam_date,
                'exam_time'            => $request->exam_time,
                'circular_location'    => $request->circular_location,
                'circular_description' => $request->circular_description,
            ]);
            return redirect()->route('job.index')->withSuccess("Job Circular Updated  Successfully");
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withInput()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Circulars  $circulars
     * @return \Illuminate\Http\Response
     */
    public function destroy($circular)
    {

        try {

            $jobCircular = Circulars::findOrFail($circular);
            if (file_exists($jobCircular->circular_image))
            {
                unlink($jobCircular->circular_image);
            }
            $jobCircular->delete();
            return redirect()->route('job.index')->withSuccess("Job Circular Deleted Successfully");
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withInput()->withError($e->getMessage());
        }

    }
}

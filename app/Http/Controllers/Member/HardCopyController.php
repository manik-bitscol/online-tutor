<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\HardCopy;
use App\Http\Requests\StoreHardCopyRequest;
use App\Http\Requests\UpdateHardCopyRequest;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
class HardCopyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hardCopis = HardCopy::where('user_id', Auth::id())->get();
        return view('member.dashboard.hard-copy', compact('hardCopis'));
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
     * @param  \App\Http\Requests\StoreHardCopyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHardCopyRequest $request)
    {
        try {
            if ($request->hasFile('hard_copy_image'))
            {
                $image     = $request->file('hard_copy_image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/images/hard-copis/' . $imageName);
                $url = 'uploads/images/hard-copis/' . $imageName;
            }
            HardCopy::create([
                'user_id'=>Auth::id(),
                'institute_name'   => $request->institute_name,
                'post_name'        => $request->post_name,
                'hard_copy_image' => $url,
            ]);
            return redirect()->route('save.hardcopy.document')->withSuccess("Hard Copy Document Added Successfully");
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withInput()->withError($e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HardCopy  $hardCopy
     * @return \Illuminate\Http\Response
     */
    public function show(HardCopy $hardCopy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HardCopy  $hardCopy
     * @return \Illuminate\Http\Response
     */
    public function edit(HardCopy $hardCopy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHardCopyRequest  $request
     * @param  \App\Models\HardCopy  $hardCopy
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHardCopyRequest $request, HardCopy $hardCopy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HardCopy  $hardCopy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $hardCopy=HardCopy::findOrFail($id);
            unlink($hardCopy->hard_copy_image);
            $hardCopy->delete();
            return redirect()->route('save.hardcopy.document')->withSuccess("Hard Copy Document Deleted Successfully");
        }catch(\Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}

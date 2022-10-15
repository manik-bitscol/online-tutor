<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdmitCardRequest;
use App\Http\Requests\UpdateAdmitCardRequest;
use App\Models\AdmitCard;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class AdmitCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admitCards = AdmitCard::where('user_id', Auth::id())->get();
        return view('member.dashboard.user-admit', compact('admitCards'));
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
     * @param  \App\Http\Requests\StoreAdmitCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdmitCardRequest $request)
    {
        try {
            if ($request->hasFile('admit_card_image'))
            {
                $image     = $request->file('admit_card_image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/images/admit-cards/' . $imageName);
                $url = 'uploads/images/admit-cards/' . $imageName;
            }
            AdmitCard::create([
                'user_id'=>Auth::id(),
                'institute_name'   => $request->institute_name,
                'post_name'        => $request->post_name,
                'admit_card_image' => $url,
            ]);
            return redirect()->route('save.admit.document')->withSuccess(" Admit Card Added Successfully");
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withInput()->withError($e->getMessage());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdmitCard  $admitCard
     * @return \Illuminate\Http\Response
     */
    public function show(AdmitCard $admitCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdmitCard  $admitCard
     * @return \Illuminate\Http\Response
     */
    public function edit(AdmitCard $admitCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdmitCardRequest  $request
     * @param  \App\Models\AdmitCard  $admitCard
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmitCardRequest $request, AdmitCard $admitCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdmitCard  $admitCard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $admitCard=AdmitCard::findOrFail($id);
            unlink($admitCard->admit_card_image);
            $admitCard->delete();
            return redirect()->route('save.admit.document')->withSuccess("Admit Card Deleted Successfully");
        }catch(\Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}

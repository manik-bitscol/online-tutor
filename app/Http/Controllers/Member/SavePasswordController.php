<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSavePasswordRequest;
use App\Http\Requests\UpdateSavePasswordRequest;
use App\Models\SavePassword;
use Illuminate\Support\Facades\Auth;

class SavePasswordController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passwords = SavePassword::where('user_id', Auth::user()->id)->get();
        return view('member.dashboard.user-password', compact('passwords'));
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
     * @param  \App\Http\Requests\StoreSavePasswordRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSavePasswordRequest $request)
    {

        try {
            SavePassword::create([
                'user_id'        => Auth::id(),
                'institute_name' => $request->institute_name,
                'post_name'      => $request->post_name,
                'user'           => $request->user,
                'password'       => $request->password,
            ]);
            return redirect()->route('save.password.document')->withSuccess("{$request->name} Document Created Successfully");
        }
        catch (\Exception$e)
        {
            redirect()->back()->withInput()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SavePassword  $savePassword
     * @return \Illuminate\Http\Response
     */
    public function show(SavePassword $savePassword)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SavePassword  $savePassword
     * @return \Illuminate\Http\Response
     */
    public function edit(SavePassword $savePassword)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSavePasswordRequest  $request
     * @param  \App\Models\SavePassword  $savePassword
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSavePasswordRequest $request, SavePassword $savePassword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SavePassword  $savePassword
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            SavePassword::findOrFail($id)->delete();
            return redirect()->back()->withSuccess('Document Deleted Successfully');
        }
        catch (\Exception $e){
            return redirect()->back()->withError($e->getMessage());
        }
    }
}

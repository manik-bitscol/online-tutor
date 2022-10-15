<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\ProblemReply;
use App\Http\Requests\StoreProblemReplyRequest;
use App\Http\Requests\UpdateProblemReplyRequest;

class ProblemReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProblemReplyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProblemReplyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProblemReply  $problemReply
     * @return \Illuminate\Http\Response
     */
    public function show(ProblemReply $problemReply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProblemReply  $problemReply
     * @return \Illuminate\Http\Response
     */
    public function edit(ProblemReply $problemReply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProblemReplyRequest  $request
     * @param  \App\Models\ProblemReply  $problemReply
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProblemReplyRequest $request, ProblemReply $problemReply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProblemReply  $problemReply
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProblemReply $problemReply)
    {
        //
    }
}

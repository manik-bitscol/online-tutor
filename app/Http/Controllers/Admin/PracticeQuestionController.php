<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PracticeQuestion;
use App\Http\Requests\StorePracticeQuestionRequest;
use App\Http\Requests\UpdatePracticeQuestionRequest;

class PracticeQuestionController extends Controller
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
     * @param  \App\Http\Requests\StorePracticeQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePracticeQuestionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PracticeQuestion  $practiceQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(PracticeQuestion $practiceQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PracticeQuestion  $practiceQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(PracticeQuestion $practiceQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePracticeQuestionRequest  $request
     * @param  \App\Models\PracticeQuestion  $practiceQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePracticeQuestionRequest $request, PracticeQuestion $practiceQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PracticeQuestion  $practiceQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(PracticeQuestion $practiceQuestion)
    {
        //
    }
}

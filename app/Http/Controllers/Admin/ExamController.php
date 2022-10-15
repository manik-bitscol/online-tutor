<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExamRequest;
use App\Http\Requests\UpdateExamRequest;
use App\Models\Exam;
use App\Models\Subject;
use App\Models\Topic;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams    = Exam::with(['subject', 'topic'])->latest()->get();
        $subjects = Subject::latest()->get();
        return view('admin.exam.index', compact('exams', 'subjects'));
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
     * @param  \App\Http\Requests\StoreExamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExamRequest $request)
    {

        try {
            Exam::create($request->all());
            return redirect()->route('exams.index')->withSuccess('Exam Added Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit($examId)
    {
        $exam     = Exam::with(['subject', 'topic'])->findOrFail($examId);
        $subjects = Subject::latest()->get();
        return view('admin.exam.edit', compact('exam', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExamRequest  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExamRequest $request, $examId)
    {
        try {
            Exam::findOrfail($examId)->update($request->all());
            return redirect()->route('exams.index')->withSuccess('Exam Updated Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy($examId)
    {
        try {
            Exam::findOrfail($examId)->delete();
            return redirect()->route('exams.index')->withSuccess('Exam Deleted Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function topics($subjectId)
    {
        $topics = Topic::where('subject_id', '=', $subjectId)->get();
        return response()->json($topics);
    }

}
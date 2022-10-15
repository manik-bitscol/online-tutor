<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Imports\QuestionImport;
use App\Models\Exam;
use App\Models\Question;
use Excel;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::with('exam')->latest()->paginate(20);
        return view('admin.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $exams = Exam::latest()->get();
        return view('admin.question.create', compact('exams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {

        try {
            Question::create($request->all());
            return redirect()->route('questions.index')->withSuccess('New Question Added Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($questionId)
    {
        $question = Question::with('exam')->findOrFail($questionId);
        $exams    = Exam::latest()->get();
        return view('admin.question.edit', compact('question', 'exams'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionRequest  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionRequest $request, $questionId)
    {

        try {
            Question::findOrFail($questionId)->update($request->all());
            return redirect()->route('questions.index')->withSuccess('Question Updated Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($questionId)
    {
        try {
            Question::findOrFail($questionId)->delete();
            return redirect()->route('questions.index')->withSuccess('Question Deleted Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->route('questions.index')->withSuccess($e->getMessage());
        }
    }

    public function excel(Request $request)
    {
        $request->validate([
            'excel' => 'required',
        ]);
        try {
            Excel::import(new QuestionImport(), $request->file('excel'));
            return redirect()->route('questions.index')->withSuccess('Question Imported Successfully');
        }
        catch (\Exception$e)
        {
            return redirect()->route('questions.index')->withSuccess($e->getMessage());
        }
    }
}
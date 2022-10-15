<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Subject;
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
        return view('member.exam.index');
    }

    public function freeExam()
    {
        $freeExams = Exam::with('questions')->where('exam_type', '=', 'free-exam')->get();

        return view('member.exam.free-exam', compact('freeExams'));
    }
    public function dailyExam()
    {
        $dailyExams = Exam::with('questions')->where('exam_type', '=', 'daily')->get();
        return view('member.exam.daily', compact('dailyExams'));
    }
    public function modelTest()
    {
        $modelTest = Exam::with('questions')->where('exam_type', '=', 'model-test')->get();
        return view('member.exam.model-test', compact('modelTest'));
    }
    public function specialModelTest()
    {
        $specialTest = Exam::with('questions')->where('exam_type', '=', 'special-test')->get();
        return view('member.exam.special-test', compact('specialTest'));
    }
    public function chapterBaseExam()
    {
        $subjects = Subject::with('topics.exams')->orderBy('name', 'asc')->get();
        return view('member.exam.daily', compact('subjects'));
    }
    public function attemptExam(Request $request)
    {
        dd($request->all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exam = Exam::with('questions')->findOrFail($id);
        return view('member.exam.show', compact('exam'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
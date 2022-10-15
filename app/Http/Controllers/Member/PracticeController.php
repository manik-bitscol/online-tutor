<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\PracticeQuestion;
use App\Models\Subject;

class PracticeController extends Controller
{
    public function index()
    {
        $subjects = Subject::with('topics')->latest()->get();
        return view('member.practice.index', compact('subjects'));
    }

    public function show($id)
    {
        $questions = PracticeQuestion::where('topic_id', '=', $id)->paginate(10);
        return view('member.practice.show', compact('questions'));

    }

}
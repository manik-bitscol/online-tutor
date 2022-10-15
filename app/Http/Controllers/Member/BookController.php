<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\District;
use App\Models\Upazila;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->get();
        return view('member.book.index', compact('books'));
    }

    public function show($id)
    {
        $book      = Book::findOrFail($id);
        $districts = District::orderBy('name', 'asc')->get();
        return view('member.book.show', compact('book', 'districts'));
    }

    public function getUpzilas($id)
    {
        $upzilas = Upazila::where('district_id', '=', $id)->get();
        return response()->json($upzilas);
    }
}
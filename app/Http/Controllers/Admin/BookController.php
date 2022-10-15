<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use Intervention\Image\Facades\Image;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->get();
        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookRequest $request)
    {

        try {
            if ($request->hasFile('cover_image'))
            {
                $image     = $request->file('cover_image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                Image::make($image)->save('uploads/images/books/' . $imageName);
                $url = 'uploads/images/books/' . $imageName;
            }
            Book::create([
                'book_name'   => $request->book_name,
                'price'       => $request->price,
                'cover_image' => $url,
                'short_desc'  => $request->short_desc,
                'long_desc'   => $request->long_desc,
            ]);
            return redirect()->route('book.index')->withSuccess("New Book Added Successfully");
        }
        catch (\Exception$e)
        {
            return redirect()->back()->withInput()->withError($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('admin.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookRequest  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookRequest $request, $book)
    {
        if ($request->hasFile('cover_image'))
        {
            if(file_exists($request->old_image)){
                
                unlink($request->old_image);
            }
            $image     = $request->file('cover_image');
            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/images/books/' . $imageName);
            $url = 'uploads/images/books/' . $imageName;
        }
        else
        {
            $url = $request->old_image;
        }
        try {
            
            Book::findOrFail($book)->update([
                'book_name'   => $request->book_name,
                'price'       => $request->price,
                'cover_image' => $url,
                'short_desc'  => $request->short_desc,
                'long_desc'   => $request->long_desc,
            ]);
            return redirect()->route('book.index')->withSuccess("{$request->book_name} Updated Successfully");
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withInput()->withError($e->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($book)
    {
        try {
            
            $book=Book::findOrFail($book);
            if(file_exists($book->cover_image)){
                unlink($book->cover_image);
            }
            $book->delete();
            return redirect()->route('book.index')->withSuccess("Book Deleted Successfully");
        }
        catch (\Exception $e)
        {
            return redirect()->back()->withInput()->withError($e->getMessage());
        }
    }
}

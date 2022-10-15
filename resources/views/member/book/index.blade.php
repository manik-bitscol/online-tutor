@extends('layouts.member')
@section('content')
    <div class="container mt-5 book">
        <div class="row text-center">
            <h3>Our Books</h3>
        </div>
        <div class="row">

            @forelse($books as $book)
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="text-capitalize card border-none shadow-lg my-1">
                        <img src="{{ asset($book->cover_image) }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <p class="theme-text-priamry">
                                {{ $book->book_name }}
                            </p>
                            <p class="theme-text-priamry">
                                {{ $book->price }} TK
                            </p>
                            <p class="text-justify">{{ $book->short_desc }}</p>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('member.book.show', $book->id) }}" class="btn btn-primary btn-sm">Read
                                    More</a>

                            </div>
                        </div>
                    </div>

                </div>
            @empty
                <span class="text-danger">No Book Found </span>
            @endforelse
        </div>
    </div>
@endsection

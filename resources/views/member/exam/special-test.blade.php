@extends('layouts.member')
@section('content')
    <div class="container mt-5 current-gk">
        <div class="row text-center">
            <h3>Special Model Test</h3>
        </div>
        <ul class="list-unstyled">
            @forelse($specialTest as $exam)
                <li class="col-6 text-capitalize p-2 primary-border-1">

                    <a class="d-block decoration-none theme-text-priamry" href="{{ route('member.exam.show', $exam->id) }}">
                        {{ $loop->iteration }}. {{ $exam->name }}
                    </a>

                </li>
            @empty
                <span class="text-danger">No Exam Found </span>
            @endforelse
        </ul>
    </div>
@endsection

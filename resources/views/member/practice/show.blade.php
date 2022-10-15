@extends('layouts.member')
@section('content')
    <div class="container mt-5 current-gk">
        <div class="row text-center">
            <h3>Current GK</h3>
        </div>
        <ul class="list-unstyled">
            @forelse($questions as $question)
                <li class="col-12 text-capitalize p-2 card border-none shadow-lg my-2">

                    <p class="theme-text-priamry">
                        {{ $loop->iteration }}. {{ $question->question }}
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <button type="button" class="view-answer btn btn-primary btn-sm">View Answer</button>
                            <span class="answer ml-5">{{ $question->answer }}</span>
                        </div>
                    </div>

                </li>
            @empty
                <span class="text-danger">No Question Found </span>
            @endforelse
        </ul>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.view-answer').click(function() {
                $(this).siblings().toggle();
            })
        })
    </script>
@endsection

@extends('layouts.member')
@section('content')
    <div class="container mt-5 exam">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('member.exam.attempt') }}" method="POST">
                    @csrf
                    <div class="row">
                        <h4 class="theme-text-priamry text-uppercase text-center">Exam Name - {{ $exam->name }}</h4>
                        <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                        @forelse($exam->questions as $question)
                            <div class="col-md-6 col-sm-12 mb-3">
                                <p>{{ $loop->iteration }}. {{ $question->question }}</p>
                                <input type="hidden" name="question_id.{{ $question->id }}" value="{{ $question->id }}">
                                <div class="row options">
                                    <div class="col-6">
                                        <input type="radio" name="answer.{{ $question->id }}"
                                            id="option-a-{{ $question->id }}" value="option_a">
                                        <label
                                            for="option-a-{{ $question->id }}"><span>{{ $question->option_a }}</span></label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="answer.{{ $question->id }}"
                                            id="option-b-{{ $question->id }}" value="option_b">
                                        <label
                                            for="option-b-{{ $question->id }}"><span>{{ $question->option_b }}</span></label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="answer.{{ $question->id }}"
                                            id="option-c-{{ $question->id }}" value="option_c">
                                        <label
                                            for="option-c-{{ $question->id }}"><span>{{ $question->option_c }}</span></label>
                                    </div>
                                    <div class="col-6">
                                        <input type="radio" name="answer.{{ $question->id }}"
                                            id="option-d-{{ $question->id }}" value="option_d">
                                        <label
                                            for="option-d-{{ $question->id }}"><span>{{ $question->option_d }}</span></label>
                                    </div>
                                </div>
                            </div>
                        @empty
                            No Available Exam To Attend
                        @endforelse
                        <div class="form-group text-center my-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

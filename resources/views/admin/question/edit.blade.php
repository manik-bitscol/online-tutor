@extends('layouts.admin')

@section('content')
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('questions.update', $question->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exam">Select Exam</label>
                            <select name="exam_id" id="exam" class="form-control">
                                <option value="">Select One</option>
                                @foreach ($exams as $exam)
                                    <option value="{{ $exam->id }}"
                                        {{ $question->exam_id == $exam->id ? 'selected' : '' }}>{{ $exam->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="question">Question</label>
                            <input type="text" class="form-control" name="question" value="{{ $question->question }}">
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="option-a">Option A</label>
                                <input type="text" class="form-control" name="option_a" id="option-a"
                                    value="{{ $question->option_a }}">
                                @error('option_a')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="option-b">Option B</label>
                                <input type="text" class="form-control" name="option_b" id="option-b"
                                    value="{{ $question->option_b }}">
                                @error('option_b')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="option-c">Option C</label>
                                <input type="text" class="form-control" name="option_c" id="option-c"
                                    value="{{ $question->option_c }}">
                                @error('option_c')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-3">
                                <label for="option-d">Option D</label>
                                <input type="text" class="form-control" name="option_d" id="option-b"
                                    value="{{ $question->option_d }}">
                                @error('option_d')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="answer">Select Answer</label>
                            <select name="answer" id="answer" class="form-control">
                                <option value="">Select One</option>
                                <option value="option_a">Option A
                                </option>
                                <option value="option_b">Option B
                                </option>
                                <option value="option_c">Option C
                                </option>
                                <option value="option_d">Option D
                                </option>
                            </select>
                        </div>
                        @error('answer')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                        <div class="from-group mt-2">
                            @includeIf('components.buttons.add', ['text' => 'Add'])
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
@endsection
@push('js')
    @includeIf('components.alerts.error')
@endpush

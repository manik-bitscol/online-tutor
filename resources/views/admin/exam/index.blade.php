@extends('layouts.admin')

@section('content')
    <div class="row m-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Exam List</h3>

                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="book-table">
                        <thead>
                            <tr>
                                <th>Exam Name</th>
                                <th>Subject Name</th>
                                <th>Topic Name</th>
                                <th>Exam Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($exams as $exam)
                                <tr>
                                    <td><a href="{{ route('exams.edit', $exam->id) }}">{{ $exam->name }}</a></td>
                                    <td>{{ $exam->subject?->name ?? '-' }}</td>
                                    <td>{{ $exam->topic?->name ?? '-' }}</td>
                                    <td>{{ $exam->exam_type }}</td>
                                    <td>
                                        @includeIf('components.buttons.edit', [
                                            'url' => route('exams.edit', $exam->id),
                                        ])

                                        @includeIf('components.buttons.delete', [
                                            'url' => route('exams.destroy', $exam->id),
                                        ])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add New Exam</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('exams.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="subject">Select Subject</label>
                            <select name="subject_id" id="subject" class="form-control">
                                <option value="">Select One</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="topic">Select Topic</label>
                            <select name="topic_id" id="topic" class="form-control">
                                <option value="">Select One</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="topic">Exam Type</label>
                            <select name="exam_type" id="topic" class="form-control">
                                <option value="">Select One</option>
                                <option value="daily-exam">Daily Exam</option>
                                <option value="model-test">Model Test</option>
                                <option value="special-test">Special Model Test</option>
                                <option value="chapter-base">Chapter Base</option>
                                <option value="free-exam">Free Exam</option>

                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">Exam Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
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
    @includeIf('components.alerts.success')
    @includeIf('components.alerts.delete')
    @includeIf('components.alerts.error')
    <script>
        $('#subject').on('change', function() {
            let subjectId = $(this).val()
            $.get(`/admin/exam/subject/${subjectId}`, function(topics, status) {

                $.each(topics, function(id, topic) {
                    $('#topic').append(
                        '<option value="' + topic.id + '">' + topic
                        .name + '</option>'
                    );
                })
            })
        })
    </script>
@endpush

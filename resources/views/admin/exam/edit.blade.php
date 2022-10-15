@extends('layouts.admin')

@section('content')
    <div class="row m-2">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h3>Edit {{ $exam->name }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('exams.update', $exam->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="subject">Select Subject</label>
                            <select name="subject_id" id="subject" class="form-control">
                                <option value="">Select One</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}"
                                        {{ $exam->subject_id == $subject->id ? 'selected' : null }}>{{ $subject->name }}
                                    </option>
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
                                <option value="daily">Daily Exam</option>
                                <option value="model-test">Model Test</option>
                                <option value="special-test">Special Model Test</option>
                                <option value="chapter-base">Chapter Base</option>
                                <option value="free-exam">Free Exam</option>

                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">Exam Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $exam->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group mt-2">
                            @includeIf('components.buttons.add', ['text' => 'Update'])
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

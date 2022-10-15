@extends('layouts.admin')

@section('content')
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="d-flex justify-content-between align-items-center pt-3 px-3">
                    <h3>Question List </h3>
                    <div>
                        <a href="{{ route('questions.create') }}" class="btn btn-primary">Add
                            Question</a>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exam">Upload
                            EXCEL</button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="book-table">
                        <thead>
                            <tr>
                                <th>Exam Name</th>
                                <th class="w-25">Question</th>
                                <th>Option A</th>
                                <th>Option B</th>
                                <th>Option C</th>
                                <th>Option D</th>
                                <th>Answer</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($questions as $question)
                                <tr>
                                    <td>
                                        <a href="{{ route('questions.edit', $question->id) }}">{{ $question->exam->name }}
                                        </a>
                                    </td>
                                    <td>{{ $question->question }}</td>
                                    <td>{{ $question->option_a }}</td>
                                    <td>{{ $question->option_b }}</td>
                                    <td>{{ $question->option_c }}</td>
                                    <td>{{ $question->option_d }}</td>
                                    <td>{{ $question->answer }}</td>
                                    <td>
                                        @includeIf('components.buttons.edit', [
                                            'url' => route('questions.edit', $question->id),
                                        ])

                                        @includeIf('components.buttons.delete', [
                                            'url' => route('questions.destroy', $question->id),
                                        ])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @includeIf('admin.partials.pagination', ['pagination' => $questions->links()])
                </div>

            </div>
        </div>

    </div>
    <!-- Modal -->
    <div class="modal fade" id="exam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Upload Exam Question From Excel File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.question.excel') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="from-group">
                            <label for="excel-file">Upload Excel File</label>
                            <input type="file" class="form-control" name="excel" value="{{ old('excel') }}"
                                id="excel-file">
                            @error('excel')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="from-group mt-2">
                            @includeIf('components.buttons.add', ['text' => 'Upload'])
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    @includeIf('components.alerts.success')
    @includeIf('components.alerts.delete')
    @includeIf('components.alerts.error')
@endpush

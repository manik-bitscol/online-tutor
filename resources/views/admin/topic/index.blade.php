@extends('layouts.admin')

@section('content')
    <div class="row m-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Topic List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="book-table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Topic Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($topics as $topic)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td><a href="{{ route('topics.edit', $topic->id) }}">{{ $topic->name }}</a></td>
                                    <td>
                                        @includeIf('components.buttons.edit', [
                                            'url' => route('topics.edit', $topic->id),
                                        ])
                                        @includeIf('components.buttons.delete', [
                                            'url' => route('topics.destroy', $topic->id),
                                        ])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @includeIf('admin.partials.pagination', ['pagination' => $topics->links()])

                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add New Topic</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('topics.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="subject">Select Subject</label>
                            <select name="subject_id" id="subject" class="form-control">
                                <option>Select One</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">Topic Name Name</label>
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
@endpush

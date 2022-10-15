@extends('layouts.admin')

@section('content')
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Add New Question</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('sheets.store') }}" method="POST">
                        @csrf
                        @method('POST')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ old('title') }}">
                            @error('title')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        @error('title')
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        @error('title')
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
    @includeIf('components.alerts.success')
    @includeIf('components.alerts.delete')
    @includeIf('components.alerts.error')
    @includeIf('components.tinymce.tinymce', ['id' => '#description'])
@endpush

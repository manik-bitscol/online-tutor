@extends('layouts.admin')

@section('content')
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit GK {{ $gk->title }} </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('gks.update', $gk->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title"
                                value="{{ $gk->title }}">
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
                            <textarea name="description" id="description" class="form-control">{{ $gk->description }}</textarea>
                            @error('description')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
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
    @includeIf('components.alerts.error')
    @includeIf('components.tinymce.tinymce', ['id' => '#description'])
@endpush

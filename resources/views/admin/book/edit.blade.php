@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="card mt-2">
            <div class="card-header">
                <h2>Edit Book</h2>
            </div>
            <div class="card-body">
                <form action="{{route('book.update',$book->id)}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="book-name">Book Title</label>
                        <input type="text" class="form-control" name="book_name" id="book-name" placeholder="Book Title" value="{{$book->book_name}}">
                    </div>
                    @error('book_name')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{$book->price}}">
                    </div>
                    @error('price')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="book-name">Cover Image</label>
                        <input type="file" class="form-control" accept="image/*" name="cover_image" id="cover-image" value="{{$book->cover_image}}">
                        <input type="hidden" name="old_image" value="{{$book->cover_image}}">
                    </div>
                    @error('cover_image')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="short-desc">Short Description</label>
                        <textarea class="form-control" name="short_desc" id="short-desc" placeholder="Book Short Description">{{$book->short_desc}}</textarea>
                    </div>
                    @error('short_desc')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        <label for="long-desc">Long Description</label>
                        <textarea class="form-control" name="long_desc" id="long-desc">{{$book->long_desc}}</textarea>
                    </div>
                    @error('long_desc')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                    <div class="form-group">
                        @includeIf('components.buttons.add', ['text' => 'Update'])
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            selector: '#long-desc',
            plugins: [
                "advlist", "anchor", "autolink", "charmap", "code", "fullscreen",
                "help", "image", "insertdatetime", "link", "lists", "media", "paste",
                "preview", "print", "searchreplace", "table", "visualblocks",
                "bbcode", "fullpage", "imagetools", "legacyoutput", "spellchecker", "toc",
            ],
            toolbar: "undo redo | styleselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"

        });
    </script>
@endpush

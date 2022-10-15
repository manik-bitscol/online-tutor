@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>All Books</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="book-table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Cover Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td><a href="{{ route('book.edit', $book->id) }}">{{ $book->book_name }}</a></td>
                            <th>{{ $book->price }}</td>
                            <td><img src="{{ asset($book->cover_image) }}" alt="{{ $book->book_name }}" style="width: 150px;">
                            </td>
                            <td>
                                @includeIf('components.buttons.edit', [
                                    'url' => route('book.edit', $book->id),
                                ])
                                <span class="mr-1"></span>
                                @includeIf('components.buttons.delete', [
                                    'url' => route('book.delete', $book->id),
                                ])
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
@push('js')
    <script href="{{ asset('assets/admin/plugins/jquery.dataTables.min.js') }}"></script>
    @includeIf('components.alerts.success')
    @includeIf('components.alerts.delete')
    @includeIf('components.alerts.error')
    <script>
        $('#book-table').Datatable();
    </script>
@endpush

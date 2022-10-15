@extends('layouts.admin')

@section('content')
    <div class="row m-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Subject List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="book-table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Subject Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($subjects as $subject)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><a href="{{ route('subjects.edit', $subject->id) }}">{{ $subject->name }}</a></td>
                                    <td>
                                        @includeIf('components.buttons.edit', [
                                            'url' => route('subjects.edit', $subject->id),
                                        ])

                                        {{-- <button class="btn btn-success" id="edit-subject" data-toggle="modal"
                                            data-target="#edit-modal" data-id="{{ $subject->id }}"><i
                                                class="fas fa-edit"></i></button> --}}
                                        @includeIf('components.buttons.delete', [
                                            'url' => route('subjects.destroy', $subject->id),
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
                    <h3>Add New Subject</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('subjects.store') }}" method="POST">
                        @csrf
                        <div class="from-group">
                            <label for="">Subject Name</label>
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


    {{-- <!-- Modal -->
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit {{ $subject->name }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body" id="card-body">
                            <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
                                @csrf

                                @method('PUT')
                                <div class="from-group">
                                    <label for="">Subject Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $subject->name }}">

                                </div>
                                <div class="from-group mt-2">
                                    @includeIf('components.buttons.add', ['text' => 'Update'])
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@push('js')
    @includeIf('components.alerts.success')
    @includeIf('components.alerts.delete')
    {{-- <script>
        $('#edit-subject').click(function() {
            var id = $(this).attr('data-id')
            let url=`/admin/subjects/${id}/edit`
            $.get(url, function(data, status){
                alert("Data: " + data + "\nStatus: " + status);
            });
        })
    </script> --}}
@endpush

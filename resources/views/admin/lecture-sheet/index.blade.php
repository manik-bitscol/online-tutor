@extends('layouts.admin')

@section('content')
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="d-flex justify-content-between align-items-center pt-3 px-3">
                    <h3>Lecture Sheet List </h3>
                    <div>
                        <a href="{{ route('sheets.create') }}" class="btn btn-primary">Add
                            Sheet</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="book-table">
                        <thead>
                            <tr>
                                <th>Title</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sheets as $sheet)
                                <tr>

                                    <td>{{ $sheet->title }}</td>
                                    <td>
                                        @includeIf('components.buttons.edit', [
                                            'url' => route('sheets.edit', $sheet->id),
                                        ])

                                        @includeIf('components.buttons.delete', [
                                            'url' => route('sheets.destroy', $sheet->id),
                                        ])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @includeIf('admin.partials.pagination', ['pagination' => $sheets->links()])
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

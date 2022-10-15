@extends('layouts.admin')

@section('content')
    <div class="row m-2">
        <div class="col-md-12">
            <div class="card">
                <div class="d-flex justify-content-between align-items-center pt-3 px-3">
                    <h3>Current GK List </h3>
                    <div>
                        <a href="{{ route('gks.create') }}" class="btn btn-primary">Add
                            GK</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="book-table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th class="w-25">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($currentsGKs as $gk)
                                <tr>

                                    <td>{{ $gk->title }}</td>
                                    <td>{!! $gk->description !!}</td>
                                    <td>
                                        @includeIf('components.buttons.edit', [
                                            'url' => route('gks.edit', $gk->id),
                                        ])

                                        @includeIf('components.buttons.delete', [
                                            'url' => route('gks.destroy', $gk->id),
                                        ])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @includeIf('admin.partials.pagination', ['pagination' => $currentsGKs->links()])
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

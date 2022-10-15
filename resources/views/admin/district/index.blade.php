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
                            @foreach ($districts as $district)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td><a href="{{ route('districts.edit', $district->id) }}">{{ $district->name }}</a></td>
                                    <td>
                                        @includeIf('components.buttons.edit', [
                                            'url' => route('districts.edit', $district->id),
                                        ])
                                        @includeIf('components.buttons.delete', [
                                            'url' => route('districts.destroy', $district->id),
                                        ])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @includeIf('admin.partials.pagination', ['pagination' => $districts->links()])
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add New District</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('districts.store') }}" method="POST">
                        @csrf
                        <div class="from-group">
                            <label for="">District Name</label>
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

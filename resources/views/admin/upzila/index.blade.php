@extends('layouts.admin')

@section('content')
    <div class="row m-2">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Upzila List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="book-table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Upzila Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($upzilas as $upzila)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td><a href="{{ route('upzilas.edit', $upzila->id) }}">{{ $upzila->name }}</a></td>
                                    <td>
                                        @includeIf('components.buttons.edit', [
                                            'url' => route('upzilas.edit', $upzila->id),
                                        ])
                                        @includeIf('components.buttons.delete', [
                                            'url' => route('upzilas.destroy', $upzila->id),
                                        ])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mt-2">
                            {{ $upzilas->links() }}
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add New Upzila</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('upzilas.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="district">Select District</label>
                            <select name="district_id" id="district" class="form-control">
                                <option >Select One</option>
                                @foreach ($districts as $district)
                                <option value="{{$district->id}}">{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">Upzila Name </label>
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

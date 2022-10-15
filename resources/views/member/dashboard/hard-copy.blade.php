@extends('layouts.member')
@section('content')
    <div class="cotainer mt-5">
        <div class="row">
            <div class="col-md-8">
                <h3>Your Hard Copy Documents</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>প্রতিষ্ঠানের নাম</th>
                            <th>পদের নাম</th>
                            <th>হার্ড কপি</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($hardCopis as $hardCopy)
                            <tr>
                                <td>{{ $hardCopy->institute_name }}</td>
                                <td>{{ $hardCopy->post_name }}</td>
                                <td><a href="{{ asset($hardCopy->hard_copy_image) }}" class="btn btn-success btn-sm" download="{{ asset($hardCopy->hard_copy_image) }}"><i class="fa-solid fa-download mr-5"></i>Download Now</a></td>
                                <td>@includeIf('components.buttons.delete', ['url' => route('delete.hardcopy.document',$hardCopy->id)])</td>
                            </tr>
                        @empty
                            No Data Found
                        @endforelse
                    </tbody>
                </table>

            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h4>Add Hard Copy Documnet</h4>
                    <form action="{{route('store.hardcopy.document')}}" class="form" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="institute-name" class="form-label">প্রতিষ্ঠানের নাম</label>
                            <input type="text" class="form-control" name="institute_name" id="institute-name" value="{{old('institute_name')}}" required>
                            @error('institute_name')
                                <div class="alert alert-danger mt-2">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="post-name" class="form-label">পদের নাম</label>
                            <input type="text" class="form-control" name="post_name" id="post-name" value="{{old('post_name')}}" required>
                            @error('post_name')
                                <div class="alert alert-danger mt-2">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="hard-copy-image" class="form-label">হার্ড কপি</label>
                            <input type="file" class="form-control" name="hard_copy_image" id="hard-copy-image" value="{{old('hard_copy_image')}}" accept="image/*" required>
                            @error('hard_copy_image')
                                <div class="alert alert-danger mt-2">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn theme-btn">Add<i class="fa-solid fa-plus ml-5"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @includeIf('components.alerts.delete')
    @includeIf('components.alerts.success')
    @includeIf('components.alerts.error')
@endsection

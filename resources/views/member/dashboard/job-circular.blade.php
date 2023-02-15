@extends('layouts.member')
@section('content')
    <div class="cotainer mt-5">
        <div class="row">
            <div class="col-md-8">
                <h3>Your Job Circular Documents</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>প্রতিষ্ঠানের নাম</th>
                            <th>পদের নাম</th>
                            <th>সার্কুলার</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($jobCirculars as $jobCircular)
                            <tr>
                                <td>{{ $jobCircular->institute_name }}</td>
                                <td>{{ $jobCircular->post_name }}</td>
                                <td><a href="{{ asset($jobCircular->job_circular_image) }}" class="btn btn-success btn-sm"
                                        download="{{ asset($jobCircular->job_circular_image) }}"><i
                                            class="fa-solid fa-download mr-5"></i>Download Now</a></td>
                                <td>@includeIf('components.buttons.delete', [
                                    'url' => route('delete.job.document', $jobCircular->id),
                                ])</td>
                            </tr>
                        @empty
                            No Data Found
                        @endforelse
                    </tbody>
                </table>

            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h4>Add New Job Circular Documents</h4>
                    <form action="{{ route('store.job.document') }}" class="form" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-2">
                            <label for="institute-name" class="form-label">প্রতিষ্ঠানের নাম</label>
                            <input type="text" class="form-control" name="institute_name" id="institute-name"
                                value="{{ old('institute_name') }}" required>
                            @error('institute_name')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="post-name" class="form-label">পদের নাম</label>
                            <input type="text" class="form-control" name="post_name" id="post-name"
                                value="{{ old('post_name') }}" required>
                            @error('post_name')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="job-circular-image" class="form-label">সার্কুলার</label>
                            <input type="file" class="form-control" name="job_circular_image" id="job-circular-image"
                                value="{{ old('job_circular_image') }}" accept="image/*" required>
                            @error('job_circular_image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
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
@push('scripts')
    @includeIf('components.alerts.delete')
    @includeIf('components.alerts.success')
    @includeIf('components.alerts.error')
@endpush

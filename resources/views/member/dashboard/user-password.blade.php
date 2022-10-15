@extends('layouts.member')
@section('content')
    <div class="cotainer mt-5">
        <div class="row">
            <div class="col-md-8">
                <h3>Your Saved Password Documents</h3>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>প্রতিষ্ঠানের নাম</th>
                            <th>পদের নাম</th>
                            <th>ইউজার</th>
                            <th>পাসওয়ার্ড</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($passwords as $password)
                            <tr>
                                <td>{{ $password->institute_name }}</td>
                                <td>{{ $password->post_name }}</td>
                                <td>{{ $password->user }}</td>
                                <td>{{ $password->password }}</td>
                                <td>@includeIf('components.buttons.delete', ['url' => route('delete.password.document',$password->id)])</td>
                            </tr>
                        @empty
                        <tr>
                            <td colspan="4">No Data found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>

            </div>
            <div class="col-md-4">
                <div class="card p-3">
                    <h4>Add New Document</h4>
                    <form action="{{route('store.password.document')}}" class="form" method="POST">
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
                            <label for="user" class="form-label">ইউজার</label>
                            <input type="text" class="form-control" name="user" id="user" value="{{old('user')}}" required>
                            @error('user')
                                <div class="alert alert-danger mt-2">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-2">
                            <label for="password" class="form-label">পাসওয়ার্ড</label>
                            <input type="text" class="form-control" name="password" id="password" value="{{old('password')}}" required>
                            @error('password')
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

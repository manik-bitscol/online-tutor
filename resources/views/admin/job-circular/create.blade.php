@extends('layouts.admin')
@push('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{asset('/assets/admin/plugins/time-picker/jquery.ui.timepicker.css')}}">
@endpush
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Add New Job Circular</h3>
        </div>
        <div class="card-body">
            <form action="{{route('job.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="circular-title">Job Circular Title</label>

                    <input type="text" name="circular_title" id="circular-title" class="form-control" value="{{old('circular_title')}}">
                </div>
                @error('circular_title')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="form-group">
                    <label for="application-fee">Application Fee</label>

                    <input type="text" name="application_fee" id="application-fee" class="form-control" value="{{old('application_fee')}}">
                </div>
                @error('application_fee')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="form-group">
                    <label for="circular-image">Job Circular Image</label>
                    <input type="file" name="circular_image" id="circular-image" class="form-control" value="{{old('circular_image')}}">
                </div>
                @error('circular_image')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="form-group">
                    <label for="exam-date">Exam Date</label>

                    <input type="text" name="exam_date" id="exam-date" class="form-control" value="{{old('exam_date')}}">
                </div>
                @error('exam_date')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="form-group">
                    <label for="exam-time">Exam Time</label>

                    <input type="text" name="exam_time" id="exam-time" class="form-control" value="{{old('exam_time')}}">
                </div>
                @error('exam_time')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="form-group">
                    <label for="circular-location">Circular For</label>

                    <input type="text" name="circular_location" id="circular-location" class="form-control" value="{{old('circular_location')}}">
                </div>
                @error('circular_location')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="form-group">
                    <label for="circular-description">Job Description:</label>

                    <textarea name="circular_description" id="circular-description">{{old('circular_description')}}</textarea>
                </div>
                @error('circular_description')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="form-group">
                    @includeIf('components.buttons.add', ['text' => 'Save'])
                </div>
            </form>
        </div>

    </div>
@endsection
@push('js')

    @includeIf('components.alerts.error')
    @includeIf('components.tinymce.tinymce', ['id' => '#circular-description'])
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="{{asset('/assets/admin/plugins/time-picker/jquery.ui.timepicker.js')}}">
    <script>
        $(document).ready(function(){
            $('#exam-date').datepicker();
            
        });
        $('#exam-time').timepicker({
                showPeriod: true,
                showLeadingZero: true
            });
    </script>
@endpush

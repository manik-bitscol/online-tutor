@extends('layouts.web')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="card shadow-sm border-0">
                <div class="card-title">
                    <div class="d-flex justify-content-between">
                        <h3>{{$circular->circular_title}}</h3><h4>Application Fee:   <span class="badge theme-bg-primary text-white">{{$circular->application_fee}}  $</span> </h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p>Exam Date: {{$circular->exam_date}} </p>
                            <p>Exam Time: {{$circular->exam_time}}</p>
                            <p>Location: {{$circular->circular_location}}</p>
                        </div>
                        <img src="{{asset($circular->circular_image)}}" alt="" class="img-fluid">
                        <p class="description">
                            {!!$circular->circular_description!!}
                        </p>
                    </div>
                    <a href="" class="btn theme-btn text-end">Apply Now</a>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
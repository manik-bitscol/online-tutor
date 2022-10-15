@extends('layouts.web')
@section('content')
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-8 mt-2">
                <h4 class="top-heading">Last 5 Job Circulars</h4>
                @forelse ($circulars as $circular)
                    <div class="card my-1">
                        <div class="card-body">
                            <h5 class="d-flex justify-content-between align-content-center">
                                <a href="{{route('circular.show',$circular->id)}}" class="text-decoration-none">{{$circular->circular_title}}</a>
                                <a href="{{route('circular.show',$circular->id)}}" class="text-decoration-none"><i class="fa-solid fa-angles-right"></i></a>
                            </h5>
                        </div>
                    </div>
                @empty
                    No Data Found
                @endforelse
            </div>
            <div class="col-md-4 mt-2">
                <h4 class="top-heading">WRITE YOUR PROBLEM</h4>
                @forelse ($circulars as $circular)
                    <div class="card my-1">
                        <div class="card-body">
                            <div class="problem">
                                <h4>User Name</h4>
                                <p>Problem goes here</p>
                                <button type="button" class="btn theme-btn btn-sm btn-reply">Reply</button>
                                <form action="" method="post" class="reply-form">
                                    <input type="text" class="form-control mt-2">
                                    <button class="btn btn-dark btn-sm mt-2" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    
                @endforelse
            </div>
            <div class="col-md-6 mt-2">
                <h4 class="top-heading">Last 5 Job Circulars</h4>
                @forelse ($circulars as $circular)
                    <div class="card my-1">
                        <div class="card-body">
                            <h5 class="d-flex justify-content-between align-content-center">
                                <a href="{{route('circular.show',$circular->id)}}" class="text-decoration-none">{{$circular->circular_title}}</a>
                                <a href="{{route('circular.show',$circular->id)}}" class="text-decoration-none"><i class="fa-solid fa-angles-right"></i></a>
                            </h5>
                        </div>
                    </div>
                @empty
                    
                @endforelse
            </div>
            <div class="col-md-6 mt-2">
                <h4 class="top-heading">Last 5 Job Circulars</h4>
                @forelse ($circulars as $circular)
                    <div class="card my-1">
                        <div class="card-body">
                            <h5 class="d-flex justify-content-between align-content-center">
                                <a href="{{route('circular.show',$circular->id)}}" class="text-decoration-none">{{$circular->circular_title}}</a>
                                <a href="{{route('circular.show',$circular->id)}}" class="text-decoration-none"><i class="fa-solid fa-angles-right"></i></a>
                            </h5>
                        </div>
                    </div>
                @empty
                    
                @endforelse
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function(){
            
            $('.btn-reply').click(function () {
                $(this).siblings('.reply-form').slideToggle();
            });
        })
    </script>
@endpush
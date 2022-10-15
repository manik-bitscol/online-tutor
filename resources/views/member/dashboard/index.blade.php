@extends('layouts.member')
@section('content')
    <h2>Member Dashboard</h2>
    {{Auth::user()->name}}
    {{Auth::user()->email}}
    <div class="w-50">
        <img src="{{Auth::user()->profile_image}}" alt="" class="img-fluid">
    </div>
@endsection
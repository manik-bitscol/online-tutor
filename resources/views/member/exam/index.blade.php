@extends('layouts.member')
@section('content')
    <div class="container mt-5 exam-category">
        <div class="row text-center">
            <div class="col-md-4 col-12 mb-4">
                <div class="card p-3 shadow-lg">
                    <div class="ribbon"><span>PAID</span></div>
                    <div class="card-body">
                        <h4>Everyday Exam</h4>
                        <a href="{{ route('member.daily.exam') }}" class="btn btn-primary">Attend Exam</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card p-3 shadow-lg position-relative">
                    <div class="ribbon"><span>Free</span></div>
                    <div class="card-body">
                        <h4>Everyday Free Exam</h4>
                        <a href="{{ route('member.free.exam') }}" class="btn btn-primary">Attend Exam</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card p-3 shadow-lg">
                    <div class="ribbon"><span>PAID</span></div>
                    <div class="card-body">
                        <h4>Model Test</h4>
                        <a href="{{ route('member.model.test') }}" class="btn btn-primary">Attend Exam</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card p-3 shadow-lg">
                    <div class="ribbon"><span>PAID</span></div>
                    <div class="card-body">
                        <h4>Special Model Test</h4>
                        <a href="{{ route('member.specail.test') }}" class="btn btn-primary">Attend Exam</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 mb-4">
                <div class="card p-3 shadow-lg">
                    <div class="ribbon"><span>PAID</span></div>
                    <div class="card-body">
                        <h4>Chapter Base Exam</h4>
                        <a href="{{ route('member.specail.test') }}" class="btn btn-primary">Attend Exam</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

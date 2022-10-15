@extends('layouts.member')
@section('content')
    <div class="container mt-5 current-gk">

        <div class="row">

            <div class="col-md-12">
                <div class="text-capitalize p-2 card border-none shadow-lg my-2">
                    <p class="theme-text-priamry">
                        {{ $sheet->title }}
                    </p>
                    <p class="description">{!! $sheet->description !!}</p>

                </div>

            </div>
        </div>
    </div>
@endsection

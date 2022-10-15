@extends('layouts.member')
@section('content')
    <div class="container mt-5 current-gk">
        <div class="row text-center">
            <h3>Lecture Sheet</h3>
        </div>
        <div class="row">

            @forelse($sheets as $sheet)
                <div class="col-md-6">
                    <div class="text-capitalize p-2 card border-none shadow-lg my-2">
                        <p class="theme-text-priamry">
                            {{ $loop->iteration }}. {{ $sheet->title }}
                        </p>
                        <p class="description">{!! \Illuminate\Support\Str::words(strip_tags($sheet->description), 20) !!}</p>
                        <div>
                            <a href="{{ route('member.sheet.show', $sheet->id) }}" class="btn btn-primary btn-sm">Read
                                More</a>
                        </div>
                    </div>

                </div>
            @empty
                <span class="text-danger">No Sheet Found </span>
            @endforelse
            <div class="col-12"></div>
        </div>
    @endsection

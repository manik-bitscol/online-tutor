@extends('layouts.member')
@section('content')
    <div class="container mt-5 current-gk">
        <div class="row text-center">
            <h3>Current GK</h3>
        </div>
        <div class="row">
            @forelse($gks as $gk)
                <div class="col-12 my-2">
                    <div class="card shadow-lg p-4 border-none">
                        <h5>{{ $gks->firstItem() + $loop->index }}. {{ $gk->title }}</h5>
                        <div>{!! $gk->description !!}</div>
                    </div>
                </div>
            @empty
                <span class="text-danger">No Available Current GK</span>
            @endforelse
            @includeIf('admin.partials.pagination', ['pagination' => $gks->links()])
        </div>
    </div>
@endsection

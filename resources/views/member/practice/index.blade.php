@extends('layouts.member')
@section('content')
    <div class="container mt-5 current-gk">
        <div class="row text-center">
            <h3>Practice Question</h3>
        </div>
        <ul class="list-unstyled">
            @forelse($subjects as $subject)
                <li class="col-12 text-capitalize p-2 primary-border-1">

                    <a href="" class="d-block theme-text-priamry decoration-none subject-name">
                        {{ $loop->iteration }}. {{ $subject->name }}
                    </a>

                    <ul class="list-unstyled topics">
                        @forelse($subject->topics as $topic)
                            <li>
                                <a href="{{ route('member.practice.show', $topic->id) }}"
                                    class="d-block theme-text-secondary decoration-none">
                                    {{ $topic->name }}
                                </a>
                            </li>


                        @empty
                            <span class="text-danger">No Topic Found </span>
                        @endforelse

                    </ul>
                </li>
            @empty
                <span class="text-danger">No Subject Found </span>
            @endforelse
        </ul>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.subject-name').click(function(e) {
                e.preventDefault();
                $(this).siblings('.topics').slideToggle();
            })
        })
    </script>
@endsection

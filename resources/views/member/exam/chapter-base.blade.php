@extends('layouts.member')
@section('content')
    <div class="container mt-5 current-gk">
        <div class="row text-center">
            <h3>Current GK</h3>
        </div>
        <ul class="list-unstyled">
            @forelse($subjects as $subject)
                <li class="col-12 text-capitalize p-2 primary-border-1">

                    <p class="d-block subject-name">
                        {{ $loop->iteration }}. {{ $subject->name }}
                    </p>

                    <ul class="list-unstyled topics">
                        @forelse($subject->topics as $topic)
                            <li>
                                <p class="d-block theme-text-secondary decoration-none topic">
                                    {{ $loop->iteration }}. {{ $topic->name }}
                                </p>
                                <ul class="list-unstyled exams">
                                    @forelse($topic->exams as $exam)
                                        <li>
                                            <a href="{{ route('member.practice.show', $exam->id) }}"
                                                class="d-block theme-text-priamry  decoration-none">
                                                {{ $loop->iteration }}. {{ $exam->name }}
                                            </a>
                                        </li>


                                    @empty
                                        <span class="text-danger mb-3">No Exam Found </span>
                                    @endforelse

                                </ul>
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
            $('.subject-name').click(function() {
                $(this).siblings('.topics').slideToggle();
            })
            $('.topic').click(function() {
                $(this).siblings('.exams').slideToggle();
            })
        })
    </script>
@endsection

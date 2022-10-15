@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Job Circular List</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="book-table">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Application Fee</th>
                        <th>Exam Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobCirulars as $circular)
                        <tr>
                            <td><a href="{{ route('job.edit', $circular->id) }}">{{ $circular->circular_title }}</a></td>
                            <td>{{ $circular->application_fee }}</td>
                            <td>{{ $circular->exam_date }}</td>
                            <td>
                                @includeIf('components.buttons.edit', [
                                    'url' => route('job.edit', $circular->id),
                                ])
                                <span class="mr-1"></span>
                                @includeIf('components.buttons.delete', [
                                    'url' => route('job.delete', $circular->id),
                                ])
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
@push('js')
    @includeIf('components.alerts.success')
    @includeIf('components.alerts.delete')
    <script href="{{ asset('assets/admin/plugins/jquery.dataTables.min.js') }}"></script>
    <script>
        $('#book-table').Datatable();
    </script>
@endpush

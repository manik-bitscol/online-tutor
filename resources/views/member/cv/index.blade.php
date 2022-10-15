@extends('layouts.member')
@section('content')
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-6">My CV</div>
            <div class="col-6 text-end">
                <a href="{{ route('member.cv.create') }}" class="btn theme-btn btn-sm"><i
                        class="fa-solid fa-pen-to-square mr-5"></i>Add CV</a>
            </div>
        </div>
        @if ($bioData)
            <table class="table table-bordered table-striped">
                <tr>
                    <td>Applicant's Name</td>
                    <td>{{ $bioData->name }}</td>
                </tr>
                <tr>
                    <td>Father's Name</td>
                    <td>{{ $bioData->father_name }}</td>
                </tr>
                <tr>
                    <td>Mother's Name</td>
                    <td>{{ $bioData->mother_name }}</td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>{{ $bioData->date_of_birth }}</td>
                </tr>
                <tr>
                    <td>Place of birth</td>
                    <td>{{ $bioData->birth_place }}</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>{{ $bioData->gender }}</td>
                </tr>
                <tr>
                    <td>Nationality</td>
                    <td>{{ $bioData->nationality }}</td>
                </tr>
                <tr>
                    <td>Religion</td>
                    <td>{{ $bioData->religion }}</td>
                </tr>
                <tr>
                    <td>National ID</td>
                    <td>{{ $bioData->national_id }}</td>
                </tr>
                <tr>
                    <td>Birth Registration</td>
                    <td>{{ $bioData->birth_registration }}</td>
                </tr>
                <tr>
                    <td>Passport No</td>
                    <td>{{ $bioData?->passport_no }}</td>
                </tr>
                <tr>
                    <td>Marital Status</td>
                    <td>{{ $bioData->marital_status }}</td>
                </tr>
                @if ($bioData->marital_status)
                    <tr>
                        <td>Spouse Name</td>
                        <td>{{ $bioData->spouse_name }}</td>
                    </tr>
                @endif

                <tr>
                    <td>Quota</td>
                    <td>{{ $bioData->quota }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-capitalize text-white" style="background-color: var(--primary) !important">
                        {{ $presentAddress->address_type }}</td>
                </tr>

                <tr>
                    <td>Care of</td>
                    <td>{{ $presentAddress->careof }}</td>
                </tr>
                <tr>
                    <td>District</td>
                    <td>{{ $presentAddress->district }}</td>
                </tr>
                <tr>
                    <td>UpZilla</td>
                    <td>{{ $presentAddress->upzilla }}</td>
                </tr>
                <tr>
                    <td>Village</td>
                    <td>{{ $presentAddress->village }}</td>
                </tr>
                <tr>
                    <td>Post Office</td>
                    <td>{{ $presentAddress->post_office }}</td>
                </tr>
                <tr>
                    <td>Post Code</td>
                    <td>{{ $presentAddress->post_code }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="text-capitalize text-white"
                        style="background-color: var(--primary) !important">
                        {{ $presentAddress->address_type }}</td>
                </tr>

                <tr>
                    <td>Care of</td>
                    <td>{{ $presentAddress->careof }}</td>
                </tr>
                <tr>
                    <td>District</td>
                    <td>{{ $presentAddress->district }}</td>
                </tr>
                <tr>
                    <td>UpZilla</td>
                    <td>{{ $presentAddress->upzilla }}</td>
                </tr>
                <tr>
                    <td>Village</td>
                    <td>{{ $presentAddress->village }}</td>
                </tr>
                <tr>
                    <td>Post Office</td>
                    <td>{{ $presentAddress->post_office }}</td>
                </tr>
                <tr>
                    <td>Post Code</td>
                    <td>{{ $presentAddress->post_code }}</td>
                </tr>
                <tr>
                    <td class="w-50">Typing minimum speed of Bangla:20 & English:20 words per miniute</td>
                    <td>{{ $bioData->typing_speed ? 'Yes' : 'NO' }}</td>
                </tr>
                <tr>
                    <td>Profile Photo</td>
                    <td><img src="{{ asset($bioData->profile_photo) }}" style="width:100px" /></td>
                </tr>
                <tr>
                    <td>Signature</td>
                    <td><img src="{{ asset($bioData->signature_photo) }}" style="width:50px" /></td>
                </tr>
                <tr>
                    <td>Departmental Candidate Status</td>
                    <td>{{ $bioData->candidate_for }}</td>
                </tr>

            </table>
            <h3>Educational Qualification</h3>
            <table class="table table-bordered table-striped">
                <tr>
                    <td>Exam</td>
                    <td>Board / University</td>
                    <td>Subject</td>
                    <td>Result</td>
                    <td>Passing Year</td>
                </tr>
                @forelse ($educations as $education)
                    <tr>
                        <td>{{ $education->exam_name }}</td>
                        <td>{{ $education->board_name }}</td>
                        <td>{{ $education->subject }}</td>
                        <td>{{ $education->result }}</td>
                        <td>{{ $education->passing_year }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No Data Found</td>
                    </tr>
                @endforelse

            </table>
        @else
            No CV Found
        @endif
    </div>
@endsection

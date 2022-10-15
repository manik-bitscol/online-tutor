@extends('layouts.member')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">Add New CV</div>
            <div class="col-6 text-end">
                <a href="{{route('member.cv.index')}}" class="btn theme-btn btn-sm">My CV<i class="fa-solid fa-plus ml-5"></i></a>
            </div>
        </div>
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
            <div class="row my-2">
                <div class="col-3">
                    <label for="name">
                        Applicant's Name
                    </label>
                </div>
                <div class="col-9">
                    <input type="text" class="form-control" placeholder="Applicant's Name" name="name" id="name">
                </div>
            </div>
        </form>
        
    </div>
@endsection
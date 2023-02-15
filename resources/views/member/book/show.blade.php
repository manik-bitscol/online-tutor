@extends('layouts.member')
@section('content')
    <div class="container mt-5 book">

        <div class="row">

            <div class="col-md-8 col-12">
                <div class="text-capitalize card border-none shadow-lg my-1">
                    <img src="{{ asset($book->cover_image) }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <p class="theme-text-priamry">
                            {{ $book->book_name }}-{{ $book->price }} TK
                        </p>
                        <p class="text-justify">{{ $book->long_desc }}</p>

                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="text-capitalize card border-none shadow-lg my-1 p-3">
                    <h6>Make A Order</h6>
                    <form action="" method="POST">
                        @csrf

                        <div class="form-group my-1">
                            <label for="district" class="form-label">District</label>
                            <select name="district_id" id="district" class="form-control">

                                <option value="">Select One</option>
                                @forelse($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @empty
                                    <span class="text-danger">No District Found</span>
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group my-1">
                            <label for="upzila" class="form-label">Upzila</label>
                            <select name="upzila_id" id="upzila" class="form-control">

                                <option value="">Select One</option>

                            </select>
                        </div>
                        <div class="form-group my-1">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address">
                        </div>
                        <div class="form-group my-1">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="form-group my-1">
                            <label for="courier" class="form-label">Select Courier</label>
                            <select name="courier" id="courier" class="form-control">

                                <option value="">Select One</option>
                                <option value="">Sundarban Courier Service</option>

                            </select>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $('#district').on('change', function() {
            let subjectId = $(this).val()
            $.get(`/state/all/${subjectId}`, function(upzilas, status) {

                $.each(upzilas, function(id, upzila) {
                    $('#upzila').append(
                        '<option value="' + upzila.id + '">' + upzila
                        .name + '</option>'
                    );
                })
            })
        })
    </script>
@endpush

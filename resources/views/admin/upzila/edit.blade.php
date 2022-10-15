@extends('layouts.admin')

@section('content')
    <div class="row">

        <div class="col-md-4 offset-md-4 mt-3">
            <div class="card">
                <div class="card-header">
                    <h3>Edit {{$upzila->name}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('upzilas.update',$upzila->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="district">Select Subject</label>
                            <select name="district_id" id="district" class="form-control">
                                <option >Select One</option>
                                @foreach ($districts as $district)
                                <option value="{{$district->id}}" {{$district->id==$upzila->district_id ? 'selected' : ''}} >{{$district->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">Upzila Name</label>
                            <input type="text" class="form-control" name="name" value="{{$upzila->name}}">
                        </div>
                        <div class="from-group mt-2">
                            @includeIf('components.buttons.add',['text'=>'Update'])
                        </div>
                    </form>
                </div>
        
            </div>
            
        </div>
    </div>
@endsection
@push('js')
    @includeIf('components.alerts.success')
    @includeIf('components.alerts.delete')
    @includeIf('components.alerts.error')

@endpush

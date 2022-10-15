@extends('layouts.admin')

@section('content')
    <div class="row">

        <div class="col-md-4 offset-md-4 mt-3">
            <div class="card">
                <div class="card-header">
                    <h3>Edit {{$district->name}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('districts.update',$district->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="from-group">
                            <label for="">District Name</label>
                            <input type="text" class="form-control" name="name" value="{{$district->name}}">
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

@endpush

@extends('layouts.admin')

@section('content')
    <div class="row">

        <div class="col-md-4 offset-md-4 mt-3">
            <div class="card">
                <div class="card-header">
                    <h3>Edit {{$topic->name}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('topics.update',$topic->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="subject">Select Subject</label>
                            <select name="subject_id" id="subject" class="form-control">
                                <option >Select One</option>
                                @foreach ($subjects as $subject)
                                <option value="{{$subject->id}}" {{$subject->id==$topic->subject_id ? 'selected' : ''}} >{{$subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="">Topic Name</label>
                            <input type="text" class="form-control" name="name" value="{{$topic->name}}">
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

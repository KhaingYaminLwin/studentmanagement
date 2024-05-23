@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('courses/' .$courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{ old('name',$courses->name) }}" class="form-control">
        <div class="text-danger">{{ $errors->first('name')}}</div></br></br>
        <label>Syllabus</label></br>
        <input type="text" name="syllabus" id="syllabus" value="{{old('syllabus',$courses->syllabus)}}" class="form-control">
        <div class="text-danger">{{ $errors->first('syllabus')}}</div></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" value="{{$courses->duration}}" class="form-control">
        <div class="text-danger">{{ $errors->first('duration')}}</div>
    </br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

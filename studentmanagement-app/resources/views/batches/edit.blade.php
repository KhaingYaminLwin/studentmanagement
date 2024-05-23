@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('batches/' .$batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" value="{{ old('name',$batches->name) }}" class="form-control">
        <div class="text-danger">{{ $errors->first('name')}}</div></br></br>
        <label>Course</label></br>
        <input type="text" name="course_id" id="course_id" value="{{old('course_id',$batches->course->name)}}" class="form-control">
        <div class="text-danger">{{ $errors->first('course_id')}}</div></br>
        <label>Duration</label></br>
        <input type="text" name="start_date" id="start_date" value="{{$batches->start_date}}" class="form-control">
        <div class="text-danger">{{ $errors->first('start_date')}}</div>
    </br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

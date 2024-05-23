@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('enrollments/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />

        {{-- <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{ old('name',$courses->name) }}" class="form-control">
        <div class="text-danger">{{ $errors->first('name')}}</div></br></br>
        <label>Syllabus</label></br>
        <input type="text" name="syllabus" id="syllabus" value="{{old('syllabus',$courses->syllabus)}}" class="form-control">
        <div class="text-danger">{{ $errors->first('syllabus')}}</div></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" value="{{$courses->duration}}" class="form-control">
        <div class="text-danger">{{ $errors->first('duration')}}</div>
    </br>
        <input type="submit" value="Update" class="btn btn-success"></br> --}}




        <label>Enroll no</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{ $enrollments->enroll_no}}">
        {{-- <div class="text-danger">{{ $errors->first('enroll_no')}}</div></br> --}} </br>

        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control" value="{{ $enrollments->batch_id}}"></br>
        {{-- <div class="text-danger">{{ $errors->first('batch_id')}}</div></br> --}}

        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control" value="{{ $enrollments->student_id}}"></br>
        {{-- <div class="text-danger">{{ $errors->first('student_id')}}</div></br> --}}

        <label>Join date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control" value="{{ $enrollments->join_date}}">
        {{-- <div class="text-danger">{{ $errors->first('join_date')}}</div></br> --}}

        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control" value="{{ $enrollments->fee }}">
        {{-- <div class="text-danger">{{ $errors->first('fee')}}</div></br> --}}

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

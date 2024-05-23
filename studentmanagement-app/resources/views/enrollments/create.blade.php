@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">

      <form action="{{ route('enrollments.store') }}" method="post">
        @csrf
        {{-- {!! csrf_field() !!} --}}
        <label>Enroll no</label></br>
        <input type="text" name="enroll_no" id="enroll_no" class="form-control" value="{{ old('enroll_no') }}">
        <div class="text-danger">{{ $errors->first('enroll_no')}}</div></br>

        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" class="form-control">
        <div class="text-danger">{{ $errors->first('batch_id')}}</div></br>

        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" class="form-control">
        <div class="text-danger">{{ $errors->first('student_id')}}</div></br>

        <label>Join date</label></br>
        <input type="text" name="join_date" id="join_date" class="form-control">
        <div class="text-danger">{{ $errors->first('join_date')}}</div></br>

        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" class="form-control" value="{{ old('fee') }}">
        <div class="text-danger">{{ $errors->first('fee')}}</div></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

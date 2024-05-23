@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Courses Page</div>
  <div class="card-body">

      <form action="{{ route('courses.store') }}" method="post">
        @csrf
        {{-- {!! csrf_field() !!} --}}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        <div class="text-danger">{{ $errors->first('name')}}</div></br>
        <label>Syllabus</label></br>
        <input type="text" name="syllabus" id="syllabus" class="form-control">
        <div class="text-danger">{{ $errors->first('syllabus')}}</div></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" class="form-control">
        <div class="text-danger">{{ $errors->first('duration')}}</div>
    </br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Batches Page</div>
  <div class="card-body">

      <form action="{{ route('batches.store') }}" method="post">
        @csrf
        {{-- {!! csrf_field() !!} --}}
        <label>Batch Name</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        <div class="text-danger">{{ $errors->first('name')}}</div></br>

        <label>Course </label></br>
        {{-- <input type="text" name="course_id " id="course_id" class="form-control"> --}}
        {{-- <div class="text-danger">{{ $errors->first('course_id')}}</div></br> --}}

        <select name="course_id" id="course_id" class="form-control">
            @foreach ($courses as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>

        <label>Start Date</label></br>
        <input type="text" name="start_date" id="start_date" class="form-control">
        <div class="text-danger">{{ $errors->first('start_date')}}</div>
    </br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

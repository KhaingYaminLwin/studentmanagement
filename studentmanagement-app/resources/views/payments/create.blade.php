@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Payments </div>
  <div class="card-body">

      <form action="{{ route('payments.store') }}" method="post">
        @csrf
        {{-- {!! csrf_field() !!} --}}
        <label>Enrollment No </label></br>
        <select name="enroll_no" id="enroll_no" class="form-control">
            @foreach ($enrollments as $id => $enroll_no)
                <option value="{{ $id }}">{{ $enroll_no }}</option>
            @endforeach
        </select>

        {{-- <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        <div class="text-danger">{{ $errors->first('name')}}</div></br> --}}

        <label>Paid Date </label></br>
        <input type="text" name="paid_date" id="paid_date" class="form-control">
        {{-- <div class="text-danger">{{ $errors->first('course_id')}}</div></br> --}}

        {{-- <select name="course_id" id="course_id" class="form-control">
            @foreach ($courses as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select> --}}

        <label>Amount </label></br>
        <input type="text" name="amount" id="amount" class="form-control">
        <div class="text-danger">{{ $errors->first('amount')}}</div>
    </br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('payments/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$payments->id}}" id="id" />

        <label>Enrollment No </label></br>
        <select name="enroll_no" id="enroll_no" class="form-control">
            @foreach ($payments as $id => $enroll_no)
                <option value="{{ $id }}">{{ $enroll_no }}</option>
            @endforeach
        </select>
        {{-- <input type="text" name="name" id="name" value="{{ old('name',$payments->name) }}" class="form-control">
        <div class="text-danger">{{ $errors->first('name')}}</div></br></br> --}}

        <label>Paid Date</label></br>
        <input type="text" name="paid_date" id="paid_date" value="{{old('paid_date',$payments->name)}}" class="form-control">
        <div class="text-danger">{{ $errors->first('paid_date')}}</div></br>

        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control">
        <div class="text-danger">{{ $errors->first('amount')}}</div>
    </br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

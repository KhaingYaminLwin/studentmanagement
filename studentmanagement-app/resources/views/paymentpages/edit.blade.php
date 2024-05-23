@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('paymentpages/' .$paymentpages->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$paymentpages->id}}" id="id" />
        <label>Enrollment no</label></br>
        {{-- <select name="enrollment_id" id="enrollment_id" class="form-control">
            @foreach ($paymentpages as $id => $enroll_no)
                <option value="{{ $id }}">{{ $enroll_no }}</option>
            @endforeach
        </select> --}}
        <select name="enrollment_id" id="enrollment_id" class="form-control">
            @foreach($enrollments as $id => $enrollment)
              <option value="{{ $enrollment->id }}">{{ $enrollment->enroll_no}}</option>
            @endforeach
          </select>

        <label>Paid date</label></br>
        <input type="text" name="paid_date" id="paid_date" value="{{old('paid_date',$paymentpages->paid_date)}}" class="form-control">
        <div class="text-danger">{{ $errors->first('paid_date')}}</div></br>

        <label>Amount</label></br>
        <input type="text" name="amount" id="amount" value="{{$paymentpages->amount}}" class="form-control">
        <div class="text-danger">{{ $errors->first('amount')}}</div>
    </br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

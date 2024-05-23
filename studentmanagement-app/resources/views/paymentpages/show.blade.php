@extends('layout')
@section('content')


<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Enrollment No : {{ $paymentpages->enrollment->enroll_no }}</h5>
        <p class="card-text">Paid date : {{ $paymentpages->paid_date }}</p>
        <p class="card-text">amount : {{ $paymentpages->amount }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection

@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('students/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{ old('name',$students->name) }}" class="form-control">
        <div class="text-danger">{{ $errors->first('name')}}</div></br></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{old('address',$students->address)}}" class="form-control">
        <div class="text-danger">{{ $errors->first('address')}}</div></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control">
        <div class="text-danger">{{ $errors->first('mobile')}}</div>
    </br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

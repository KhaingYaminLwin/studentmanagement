@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('teachers/' .$teachers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{ old('name',$teachers->name) }}" class="form-control">
        <div class="text-danger">{{ $errors->first('name')}}</div></br></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{old('address',$teachers->address)}}" class="form-control">
        <div class="text-danger">{{ $errors->first('address')}}</div></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$teachers->mobile}}" class="form-control">
        <div class="text-danger">{{ $errors->first('mobile')}}</div>
    </br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

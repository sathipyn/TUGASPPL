@extends('layouts.app')
@section('title', 'Form Edit Address')
@section('content')
<form action="/address/update/{{$address->id}}" method="POST" class="pt-2 pb-2">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label> Street</label>
        <input type="text" name="street" class="form-control" value="{{$address->street}}">
    </div>
    <div class="form-group">
        <label> City</label>
        <input type="text" name="city" class="form-control" value="{{$address->city}}">
    </div>
    <div class="form-group">
        <label> Province</label>
        <input type="text" name="province" class="form-control" value="{{$address->province}}">
    </div>
    <div class="form-group">
        <label> Country</label>
        <input type="text" name="country" class="form-control" value="{{$address->country}}">
    </div>
    <div class="form-group">
        <label>Postal Code</label>
        <input type="text" name="postalcode" class="form-control" value="{{$address->postal_code}}">
    </div>
    <div class="form-group pt-4">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>

@endsection

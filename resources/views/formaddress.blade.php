@extends('layouts.app')
@section('title', 'Form Address')
@section('content')
    <form action="/address/save" method="POST" class="pt-2 pb-2"> 
        @csrf
        <div class="form-group">
            <label> Street</label>
            <input type="text" name="street" class="form-control" placeholder="Masukkan Street">
        </div>
        <div class="form-group">
            <label> City</label>
            <input type="text" name="city" class="form-control" placeholder="Masukkan City">
        </div>
        <div class="form-group">
            <label> Province</label>
            <input type="text" name="province" class="form-control" placeholder="Masukkan Province">
        </div>
        <div class="form-group">
            <label> Country</label>
            <input type="text" name="country" class="form-control" placeholder="Masukkan Country">
        </div>
        <div class="form-group">
            <label>Postal Code</label>
            <input type="text" name="postalcode" class="form-control" placeholder="Masukkan Postal Code">
        </div>
        <div class="form-group pt-4">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
        
    </form>
@endsection

@extends('layouts.app')
@section('title', 'Form Edit Contact')
@section('content')
<form action="/contact/update/{{$contact->id}}" method="POST" class="pt-2 pb-2">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label> Nama Depan</label>
        <input type="text" name="namadepan" class="form-control" value="{{$contact->namadepan}}">
    </div>
    <div class="form-group">
        <label> Nama Belakang</label>
        <input type="text" name="namabelakang" class="form-control" value="{{$contact->namabelakang}}">
    </div>
    <div class="form-group">
        <label> E-mail</label>
        <input type="text" name="email" class="form-control" value="{{$contact->email}}">
    </div>
    <div class="form-group">
        <label> No Hp</label>
        <input type="text" name="nohp" class="form-control" value="{{$contact->nohp}}">
    </div>
    <div class="form-group pt-4">
        <input type="submit" value="SIMPAN" class="btn btn-primary">
    </div>
</form>



@endsection
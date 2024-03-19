@extends('layouts.app')
@section('title', 'Form Contact')
@section('content')
    <form action="/contact/save" method="POST" class="pt-2 pb-2">
        @csrf
        <div class="form-group">
            <label> Nama Depan</label>
            <input type="text" name="namadepan" class="form-control" placeholder="Masukkan Nama Depan">
        </div>
        <div class="form-group">
            <label> Nama Belakang</label>
            <input type="text" name="namabelakang" class="form-control" placeholder="Masukkan Nama Belakang">
        </div>
        <div class="form-group">
            <label> E-mail</label>
            <input type="text" name="email" class="form-control" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label> No Hp</label>
            <input type="text" name="nohp" class="form-control" placeholder="Masukkan Nomor Handphone">
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat Lengkap (cth; Ketintang Timur PTT IV 32, Surabaya, Jawa Timur, 60231)">
        </div>
        <div class="form-group pt-4">
            <input type="submit" value="SIMPAN" class="btn btn-primary">
        </div>
    </form>
@endsection

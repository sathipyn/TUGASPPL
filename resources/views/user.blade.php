@extends('layouts.app')
@section('title','User')

@section('content')
    <h3>Halaman User</h3>
    <div class="row">
        <div class="col-lg-12">
            <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/pencarianuser">
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
              </form>
        </div>
    </div>
    <table class="table mt-4">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama User</th>
            <th scope="col">Username</th>
            <th scope="col">Email User</th>
            <th scope="col">Password</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $no=>$u)
            <tr>
                <th scope="row">{{++$no}}</th>
                <td>{{$u->name}}</td>
                <td>{{$u->username}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->password}}</td>
              </tr> 
            @endforeach
          </tr>
        </tbody>
      </table>
@endsection
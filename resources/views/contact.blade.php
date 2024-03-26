@extends('layouts.app')
@section('title', 'Contact')
@section('content')
@if (session('flash'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{session('flash')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
    
@endif
<h3>Halaman Contact</h3>
    <div class="row">
        <div class="col-lg-12">
            <a class="btn btn-primary" href="/contact/form" role="button"><i class="bi bi-person-fill-add"></i> Tambahkan Data</a>
            <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/pencariancontact">
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
              </form>
        </div>
    </div>
<table class="table mt-4">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Depan</th>
        <th scope="col">Nama Belakang</th>
        <th scope="col">Email</th>
        <th scope="col">No.Hp</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($contact as $idx=> $c)
        <tr>
            <th scope="row">{{++$idx}}</th>
            <td>{{$c->namadepan}}</td>
            <td>{{$c->namabelakang}}</td>
            <td>{{$c->email}}</td>
            <td>{{$c->nohp}}</td>
            
            <td>
                <a href="/contact/form-edit/{{$c->id}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                <a href="/contact/delete/{{$c->id}}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
            </td>
          </tr> 
        @endforeach
    </tbody>
  </table>  
  <nav aria-label="Page navigation example">
    <ul class="pagination float-right">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </a>
      </li>
    </ul>
  </nav>
@endsection

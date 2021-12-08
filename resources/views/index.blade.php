<div class="container text-center ">
    <div class="card-header bg-secondary">
        <h5 class="card-title">DATA MAHASISWA</h5>
    </div>
    <div class="container mt-2">
      <a href=" {{url('create')}}" class="btn btn-primary">+ Tambah Data</a>
    </div>
</div>
@extends('layouts.default')
@section('content')
<section>
<div class="container ">
    <div class="">
        <div class="col-lg-8 mt-5">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $dataMahasiswa)
                  <tr>
                    <td>{{$dataMahasiswa->id}}</td>
                    <td>{{$dataMahasiswa->nama}}</td>
                    <td>{{$dataMahasiswa->nim}}</td>
                    <td>{{$dataMahasiswa->alamat}}</td>
                    <td>
                        <a href="{{url('/show/'.$dataMahasiswa->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{url('/destroy/'.$dataMahasiswa->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
<nav class="navbar fixed-bottom navbar-light bg-secondary" >
    <div class="container-fluid" >
        <h5 class="text-center">Copy Right &copy Weray2021</h5>
    </div>
</nav>
</section>
@endsection
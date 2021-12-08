@extends('layouts.default')
@section('content')
<section>
<div class="container ">
    <div class="">
        <div class="">
            <h1>DATA MAHASISWA</h1>
            <a href=" {{url('create')}}" class="btn btn-primary">+Tambah Mahasiswa</a>
        </div>
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
</section>
@endsection
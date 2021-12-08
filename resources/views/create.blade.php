@extends('layouts.default')

@section('content')
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="btn btn-primary" href="{{url('/')}}">DATA MAHASISWA</a>
    </div>
  </nav>
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" name="nama" class="form-control" placeholder="Dhimas Wahyu">
                    </div>
                    <div class="form-group">
                        <label for="nama">NIM</label>
                        <input type="number" name="nim" class="form-control" placeholder="123190000">
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <textarea type="text" name="alamat" class="form-control" placeholder="Yogyakarta"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    <div class="form-group mt-2">

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
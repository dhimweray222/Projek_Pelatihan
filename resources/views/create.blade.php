<div class="container text-center ">
    <div class="card-header bg-secondary">
        <h5 class="card-title">DATA MAHASISWA</h5>
    </div>
    <div class="container mt-2">
        <a class="btn btn-primary" href="{{url('/')}}">DATA MAHASISWA</a>
    </div>
</div>


@extends('layouts.default')

@section('content')

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
<nav class="navbar fixed-bottom navbar-light bg-secondary" >
        <div class="container-fluid" >
            <h5 class="text-center">Copy Right &copy Weray2021</h5>
        </div>
</nav>
</section>
@extends('layouts.default')

@section('content')

<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <form action="{{ url('/update/'.$data->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" name="nama" class="form-control" placeholder="Dhimas Wahyu" value="{{$data->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">NIM</label>
                        <input type="number" name="nim" class="form-control" placeholder="123190000" value="{{$data->nim}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <textarea type="text" name="alamat" class="form-control" placeholder="Yogyakarta" >{{$data->alamat}}</textarea>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                    <div class="form-group mt-2">
                        <a href="{{url('/')}}">
                            << Kembali Ke Halaman utama</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
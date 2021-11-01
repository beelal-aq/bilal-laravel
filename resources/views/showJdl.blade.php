@extends('layout.main')

@section('container')
<h1>SHOW MAHASISWA</h1>
NAMA MAHASISWA        : <h5>{{$model->mahasiswa}}</h5>
NIM  DOSEN            :<h5>{{$model->dosen}}</h5>
JUDUL                 :<h5>{{$model->judul}}</h5>
DESKRIPSI             :<h5>{{$model->deskripsi}}</h5>
WAKTU AWAL            :<h5>{{$model->awal}}</h5>
WAKTU AWAL            :<h5>{{$model->akhir}}</h5>
@endsection
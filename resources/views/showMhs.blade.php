@extends('layout.main')

@section('container')
<h1>SHOW MAHASISWA</h1>
NAMA        : <h5>{{$model->nama}}</h5>
NIM         :<h5>{{$model->nim}}</h5>
ALAMAT      :<h5>{{$model->alamat}}</h5>
Tgl Lahir   :<h5>{{$model->ttl}}</h5>
Tahun Masuk :<h5>{{$model->thn_masuk}}</h5>
@endsection
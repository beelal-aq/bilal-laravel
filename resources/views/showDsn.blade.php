@extends('layout.main')

@section('container')
<h1>SHOW Dosen</h1>
NAMA        : <h5>{{$model->nama_D}}</h5>
NIDN       :<h5>{{$model->nidn}}</h5>
ALAMAT      :<h5>{{$model->alamat_D}}</h5>
kontak   :<h5>{{$model->kontak}}</h5>

@endsection
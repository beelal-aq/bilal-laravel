@extends('layout.main')

@section('container')
        <a class ="btn btn-info text-white" href="{{url('jadwal/create')}}">+JADWAL</a>
        <br>
        <br>
        <table class = "table-bordered table">
            <tr>
                <th> No </th>
                <th> Nama Mahasiswa </th>
                <th> Nam Dosen </th>
                <th> Judul Skripsi </th>
                <th> Deskripsi </th>
                <th> Waktu Awal </th>
                <th> Waktu Akhir </th>
                
                <th colspan="2"> action </th>
            </tr>

            @foreach( $datas as $key=>$value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->mahasiswa}}</td>
                <td>{{$value->dosen}}</td>
                <td>{{$value->judul}}</td>
                <td>{{$value->deskripsi}}</td>
                <td>{{$value->awal}}</td>
                <td>{{$value->akhir}}</td>
                
                <td><a class="btn btn-warning text-white"  href="{{url('jadwal/'.$value->id.'/edit') }}">update</a></td>
                <td>
                        <form action="{{url('jadwal/'.$value->id)}}" method="GET">
                        @csrf
                        <input type="hidden" name="_method" value="SHOW">
                        <button class="btn btn-success" type="submit">SHOW</button>

                    </form>

                </td>
                <td>
                    <form action="{{url('jadwal/'.$value->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
            
            </tr>
            @endforeach
        </table>

@endsection
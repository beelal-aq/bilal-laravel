@extends('layout.main')

@section('container')
        <a class ="btn btn-info text-white" href="{{url('mahasiswa/create')}}">+MAHASISWA</a>
        <br>
        <br>
        <table class = "table-bordered table">
            <tr>
                <th> No </th>
                <th> Nama </th>
                <th> NIM </th>
                <th> Alamat </th>
                <th> Tgl Lahir </th>
                <th> tahun masuk </th>
                <th colspan="2"> action </th>
            </tr>

            @foreach( $datas as $key=>$value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->nama}}</td>
                <td>{{$value->nim}}</td>
                <td>{{$value->alamat}}</td>
                <td>{{$value->ttl}}</td>
                <td>{{$value->thn_masuk}}</td>
                <td><a class="btn btn-warning text-white"  href="{{url('mahasiswa/'.$value->id.'/edit') }}">update</a></td>
                <td>
                        <form action="{{url('mahasiswa/'.$value->id)}}" method="GET">
                        @csrf
                        <input type="hidden" name="_method" value="SHOW">
                        <button class="btn btn-success" type="submit">SHOW</button>

                    </form>

                </td>
                <td>
                    <form action="{{url('mahasiswa/'.$value->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
            
            </tr>
            @endforeach
        </table>

@endsection
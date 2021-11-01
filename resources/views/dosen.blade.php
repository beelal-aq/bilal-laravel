@extends('layout.main')

@section('container')
        <a class ="btn btn-info text-white" href="{{url('dosen/create')}}">+DOSEN</a>
        <br>
        <br>
        <table class = "table-bordered table">
            <tr>
                <th> No </th>
                <th> Nama </th>
                <th> NIDN </th>
                <th> Alamat </th>
                <th> kontak </th>
                
                <th colspan="2"> action </th>
            </tr>

            @foreach( $datas as $key=>$value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->nama_D}}</td>
                <td>{{$value->nidn}}</td>
                <td>{{$value->alamat_D}}</td>
                <td>{{$value->kontak}}</td>
                
                <td><a class="btn btn-warning text-white"  href="{{url('dosen/'.$value->id.'/edit') }}">update</a></td>
                <td>
                        <form action="{{url('dosen/'.$value->id)}}" method="GET">
                        @csrf
                        <input type="hidden" name="_method" value="SHOW">
                        <button class="btn btn-success" type="submit">SHOW</button>

                    </form>

                </td>
                <td>
                    <form action="{{url('dosen/'.$value->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">DELETE</button>

                    </form>
                </td>
            
            </tr>
            @endforeach
        </table>

@endsection
@extends('layouts.master');

@section('content')
<div class='row'>
    <div class='col-12'>
        @if(session('success'))
            <div class=" alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <a class = "btn btn-primary" href="{{route('mahasiswa.create')}}">Tambah</a>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JURUSAN</th>
                <th>ACTION</th>
            </tr>

            @foreach ($mahasiswas as $mhs)
                <tr>
                    <td>{{$mhs->id}}</td>
                    <td>{{$mhs->nim}}</td>
                    <td>{{$mhs->nama}}</td>
                    <td>{{$mhs->jurusan->nama_jurusan}}</td>
                    <td class = "d-flex">
                        <a href="{{route('mahasiswa.edit' , $mhs->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('mahasiswa.destroy' , $mhs->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
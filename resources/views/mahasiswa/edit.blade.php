@extends('layouts.master')

@section('content')
<div class='row'>
    <div class='col-12'>
        <form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="post">
            @csrf
            @method('PUT')
            <label for="">NIM</label>
            <input type="text" name="nim" value="{{$mahasiswa->nim}}" required>
            <label for="">Nama</label>
            <input type="text" name="nama" value="{{$mahasiswa->nama}}"required>  

            <label for="">Jurusan</label>
            <select name="jurusan_id" id="">
                @foreach ($jurusans as $jur )
                    <option value="{{$jur->id}}" {{$mahasiswa->jurusan_id == $jur->id ? 'selected' : '' }}>{{$jur->nama_jurusan}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
</div>
@endsection
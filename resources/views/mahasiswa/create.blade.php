@extends('layouts.master')


@section('content')
<div class='row'>
    <div class='col-12'>
        <form action="{{route('mahasiswa.store')}}" method="post">
            @csrf
            <label for="">NIM</label>
            <input type="text" name="nim" required>
            <label for="">Nama</label>
            <input type="text" name="nama" required>  

            <label for="">Jurusan</label>
            <select name="jurusan_id" id="">
                @foreach ($jurusans as $jur )
                    <option value="{{$jur->id}}">{{$jur->nama_jurusan}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection
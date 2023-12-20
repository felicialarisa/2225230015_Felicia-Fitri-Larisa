@extends('layout.felis')
@section('kontent')
<a href="/">Tambah Data</a>
<table class=table border= "2" cellpading="10" cellpading="0">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->Nama}}</td>
            <td>{{$item->NIM}}</td>
            <td>{{$item->Jurusan}}</td>
            <td>{{$item->Kelas}}</td>
            <td>
                <a class='btn btn-warning btn-sm' href="{{url('/isian/'.$item->Nama.'/edit')}}">Edit</a>
                <form onsubmit="return confirm('Apakah Yakin?')" class="d-inline" action="{{'/isian/'.$item->Nama}}" method="post"> @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>    
        @endforeach
    </tbody>
</table>
@endsection
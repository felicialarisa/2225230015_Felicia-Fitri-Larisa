@extends('layout.felis')
@section('kontent')

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="">




<form method="post" action="{{'/isian/'.$data->Nama}}">
@csrf
@method('put')
<div class="col-auto">
    <label for="Nama" class="form-label"> Nama :</label>
    <input type="text" name="Nama" id="Nama" class="form-control" placeholder="Masukan Nama Anda" value="{{Session::get('Nama')}}">
</div>
<div class="col-auto">
    <label for="NIM" class="form-label"> NIM :</label>
    <input type="nomor" name="NIM" id="NIM" class="form-control" placeholder="Masukan NIM Anda" value="{{Session::get('NIM')}}">
</div>
<div class="col-auto">
    <label for="Jurusan" class="form-label"> Jurusan :</label>
    <input type="text" name="Jurusan" id="Jurusan" class="form-control" placeholder="Jurusan" value="{{Session::get('Jurusan')}}">
</div>
<div class="col-auto">
    <label for="Kelas" class="form-label"> Kelas :</label>
    <input type="text" name="Kelas" id="Kelas" class="form-control" placeholder="Kelas" value="{{Session::get('Kelas')}}">
</div>
<br><br><br><br>
<div class="col-12">
    <button class="btn btn-primary">Edit</button>
    <a class="btn btn-primary" href="/isian">Kembali</a>
</div>
</form>
@endsection

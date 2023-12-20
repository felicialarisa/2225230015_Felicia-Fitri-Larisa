@extends('layout.felis')
@section('kontent')
<h3>Input Data Peserta Lomba Melukis Mahasiswa Untirta</h3>

<table>
<form method="POST" action="/isian" class="form-control">
    @csrf
    <div class="mb-3">
        <label for="Nama" class="form_label">Nama :</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Masukan Nama Anda" value="{{Session::get('Nama')}}">
    </div>
    <div class="mb-3">
        <label for="NIM" class="form_label">NIM :</label>
        <input type="number" id="NIM" name="NIM" class="form-control" placeholder="Masukan NIM Anda" value="{{Session::get('NIM')}}">
    </div>
    <div class="mb-3">
        <label for="Jurusan" class="form_label">Jurusan :</label>
        <input type="text" id="Jurusan" name="Jurusan" class="form-control" placeholder="Jurusan" value="{{Session::get('Jurusan')}}">
    </div>
    <div class="mb-3">
        <label for="Kelas" class="form_label">Kelas :</label>
        <input type="text" id="Kelas" name="Kelas" class="form-control" placeholder="Kelas" value="{{Session::get('Kelas')}}">
    </div>
    <div class="mb-3">
        <button>Submit</button>
    </div>
</form>
</table>
@endsection
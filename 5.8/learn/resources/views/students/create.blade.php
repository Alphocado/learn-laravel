@extends('layout/main')
@section('title', 'Form Tambah Data Mahasiswa')
@section('active', 'students')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-8">
      <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>
      <ul class="list-group">

        <form method="post" action="/students">
          @csrf
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukkan nama" name="nama">
          </div>
          <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control" id="nrp" placeholder="Masukkan nrp" name="nrp">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Masukkan email" name="email">
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" placeholder="Masukkan jurusan" name="jurusan">
          </div>
          <button type="submit" class="btn btn-primary">Tambah Data!</button>
        </form>

      </ul>
    </div>
  </div>
</div>
@endsection
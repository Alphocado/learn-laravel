@extends('layout/main')
@section('title', 'Mahasiswa')
@section('active', 'mahasiswa')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h1 class="mt-3">Detail Mahasiswa</h1>
        <ul class="list-group">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $student->nama }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp }}</h6>
              <p class="card-text">{{ $student->email }}</p>
              <p class="card-text">{{ $student->jurusan }}</p>

              <button type="submit" class="btn btn-primary">Edit</button>
              <form action="{{ $student->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
              <a href="{{ url('/students') }}" class="card-link">Kembali</a>
            </div>
          </div>

        </ul>
      </div>
    </div>
  </div>
@endsection

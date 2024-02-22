@extends('layout/main')
<!-- section dan yield saling sambung -->
<!-- yield variable -->
<!-- section isi untuk isi variable (yield) -->
@section('title', 'Home')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <h1 class="mt-3">Hello World!</h1>
    </div>
  </div>
</div>
@endsection
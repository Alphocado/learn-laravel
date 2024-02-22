@extends('layout/main')
@section('title', 'about')

@section('container')
<div class="container">
  <div class="row">
    <div class="col-10">
      <!-- cara lama -->
      <!-- <h1 class="mt-3">Hello <?= $nama ?>!</h1> -->
      <!-- cara laravel -->
      <h1 class="mt-3">Hello {{ $nama }}!</h1>
    </div>
  </div>
</div>
@endsection
@extends('layouts.master')
@section('content')
<div class="container">
  <div class="content  wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="col-md-8 col-md-offset-2">
      <h2 style="text-align:center">WELCOME TO IT CONTEST 2017</h2><br>
      <p style="text-align:justify">IT CONTEST adalah lomba cerdas cermat yang diadakan Himpunan Mahasiswa
      Teknik Informatika (HMTI) Universitas Dian Nuswantoro untuk pelajar tingkat SMA/SMK/MA sederajat.
    Dimana lomba ini merupakan bagian dari acara yang diadakan UDINUS yaitu DINUS FESTIVAL 2017.</p>
    </div>
    <div class="col-md-4 col-md-offset-4" style="margin-top:100px">
        <a href="{{route('tahap1.index')}}" class="btn btn-block btn-primary">I'M READY</a>
    </div>
  </div>
</div>
@endsection

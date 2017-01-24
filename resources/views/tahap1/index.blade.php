@extends('layouts.master')
@section('content')
<div class="container">
    <div class="content  wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="col-md-8 col-md-offset-2">
      <h2 style="text-align:center">PETUNJUK TAHAP 1</h2><br>
      <p style="text-align:justify">
        <ul>
          <li>Babak Final Tahap 1 menggunakan system point jika benar akan bertambah score dengan
          jumlah point berbeda-beda setiap soalnya.</li>
          <li>Jika salah, maka score tidak bertambah (tetap seperti sebelumnya).</li>
          <li>Babak Final Tahap 1 terdapat 10 soal. </li>
          <li>Setiap peserta diberikan modal point 30.</li>
          <li>Empat peserta dengan score terendah akan gugur dan tidak dapat melanjutkan ke Babak Final Tahap 2.</li>
        </ul>
      </p>
    </div>
    <div class="col-md-4 col-md-offset-4" style="margin-top:100px">
      <form action="{{route('tahap1.store')}}" method="post">
        {!! csrf_field() !!}
        <a href="{{route('tahap1.soal1')}}">
        <input type="submit" name="submit" value="START TAHAP 1"  class="btn btn-block btn-danger"></a>
      </form>

    </div>
  </div>
</div>
@endsection

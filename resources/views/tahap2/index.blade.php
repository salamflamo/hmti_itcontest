@extends('layouts.master')
@section('content')
<div class="container">
    <div class="content  wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s" >
    <div class="col-md-8 col-md-offset-2" >
      <h2 style="text-align:center">PETUNJUK TAHAP 2</h2><br>
      <p style="text-align:justify">
        <ul>
          <li>Babak Final Tahap 2 menggunakan system pertaruhan point.</li>
          <li>Terdapat 10 soal.</li>
          <li>Jika menjawab benar, maka score akan bertambah sesuai dengan point yang telah dipertaruhkan.</li>
          <li>Jika salah, maka score akan berkurang dengan point yang telah dipertaruhkan tersebut.</li>
          <li>Maksimal point yang dipertaruhkan yaitu 50% dari score yang dimiliki.</li>
          <li>Tiga peserta dengan score terendah akan gugur dan tidak dapat melanjutkan ke Babak Final Tahap 3.</li>
        </ul>
      </p>
    </div>
    <div class="col-md-10 col-md-offset-1" style="margin-top:10px">
      <form action="{{route('tahap2.store')}}" method="post">
        {!! csrf_field() !!}
        <div class="col-md-4 col-md-offset-4">
          <a href="{{route('tahap2.soal1')}}">
          <input type="submit" name="submit" value="START TAHAP 2"  class="btn btn-block btn-danger" style="margin-top:15px"></a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

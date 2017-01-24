@extends('layouts.master')
@section('content')
<div class="container">
  <div class="content">
    <div class="col-md-10 col-md-offset-1">
      <h2 style="text-align:center; margin-bottom:20px">SOAL 9</h2>
      <div class="soal">
        <p style="text-align:justify">Printer yang mencetak gambar dan dapat memancarkan tinta pada kertas disebut… </p>
      </div>
      <div class="row" style="margin-top:50px">
        <form class="" action="{{route('tahap2.store9')}}" method="post">
            {!! csrf_field() !!}
            <div class="col-md-4">
              <label>Your Score : </label><br>
              <input type="text" name="score" value="{{$score->score}}" disabled><br>
              <label style="margin-top:20px">Point yang di Pertaruhkan : </label><br>
              <input type="text" name="point" value="">
            </div>
          <div class="col-md-8">
            <label>JAWABAN : </label><br><br>
            <input type="radio" name="answer" value="a"> A.	Printer Jet <br><br>
            <input type="radio" name="answer" value="b"> B.	Printer  Laser
          </div>
          <div class="col-md-8">

          </div>
          <div class="col-md-4" style="margin-top:100px">
            <a href="{{route('tahap2.soal10')}}">
              <input type="submit" name="Submit" value="NEXT SOAL 10 >>>"  class="btn btn-block btn-danger"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

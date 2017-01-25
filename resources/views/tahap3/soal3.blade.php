@extends('layouts.master')
@section('content')
<div class="container">
  <div class="content">
    <div class="col-md-10 col-md-offset-1">
      <h2 style="text-align:center; margin-bottom:20px">SOAL 3</h2>
      <div class="soal">
        <p style="text-align:center">Apa warna dari USB 3.0 ?<br><br>
        <img src="images/tahap3soal3.jpg" alt="tahap3soal3" height="150px" width="400">
        </p>
      </div>
      <div class="row" style="margin-top:20px">
        <form class="" action="{{route('tahap3.store3')}}" method="post">
            {!! csrf_field() !!}
            <div class="col-md-4">
              <label>Your Score : </label><br>
              <input type="text" name="score" value="{{$score->score}}" disabled><br>
              <label style="margin-top:20px">Point yang di Pertaruhkan : </label><br>
              <input type="text" name="point" value="">
            </div>
          <div class="col-md-8">
            <label>JAWABAN : </label><br><br>
            <input type="radio" name="answer" value="a"> A. <br><br>
            <input type="radio" name="answer" value="b"> B.
          </div>
          <div class="col-md-8">

          </div>
          <div class="col-md-4" style="margin-top:40px">
            <a href="{{route('tahap3.soal4')}}">
              <input type="submit" name="Submit" value="NEXT SOAL 4 >>>"  class="btn btn-block btn-danger"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

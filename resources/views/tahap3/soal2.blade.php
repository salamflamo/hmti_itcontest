@extends('layouts.master')
@section('content')
<div class="container">
  <div class="content">
    <div class="col-md-10 col-md-offset-1">
      <h2 style="text-align:center; margin-bottom:20px">SOAL 2</h2>
      <div class="soal">
        <p style="text-align:center">Dibawah ini merupakan keyboard standart
          ISO yang digunakan pada umumnya. Apa huruf dari kotak yang berwarna merah ?<br>
          <img src="images/tahap3soal2.jpg" alt="tahap3soal3" height="150px" width="400">
          </p>
      </div>
      <div class="row" style="margin-top:10px">
        <form class="" action="{{route('tahap3.store2')}}" method="post">
            {!! csrf_field() !!}
            <div class="col-md-4">
              <label>Your Score : </label><br>
              <input type="text" name="score" value="{{$score->score}}" disabled><br>
              <label style="margin-top:20px">Point yang di Pertaruhkan : </label><br>
              <input type="text" name="point" value="">
            </div>
          <div class="col-md-8">
            <label>JAWABAN : </label><br><br>
            <input type="radio" name="answer" value="a"> A. Q-W-E-A-S-D <br><br>
            <input type="radio" name="answer" value="b"> B. Q-W-E-D-A-S
          </div>
          <!-- <div class="col-md-8">

          </div> -->
          <div class="col-md-4" style="margin-top:40px">
            <a href="{{route('tahap3.soal3')}}">
              <input type="submit" name="Submit" value="NEXT SOAL 3 >>>"  class="btn btn-block btn-danger"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

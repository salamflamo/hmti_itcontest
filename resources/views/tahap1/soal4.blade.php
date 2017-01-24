@extends('layouts.master')
@section('content')
<div class="container">
  <div class="content">
    <div class="col-md-10 col-md-offset-1">
      <h2 style="text-align:center; margin-bottom:20px">SOAL 4</h2>
      <div class="soal">
        <p style="text-align:justify">Darimana Aplikasi mobile Whatsapp ?</p>
      </div>
      <div class="row" style="margin-top:50px">
        <form class="" action="{{route('tahap1.store4')}}" method="post">
            {!! csrf_field() !!}
          <div class="col-md-8">
            <label>SCORE : </label>
            <input type="text" name="score" value="{{$score->score}}" disabled>
          </div>
          <div class="col-md-4">
            <label>JAWABAN : </label><br><br>
            <input type="radio" name="answer" value="a"> A.	Amerika <br> <br>
            <input type="radio" name="answer" value="b"> B.	China
          </div>
          <div class="col-md-8">

          </div>
          <div class="col-md-4" style="margin-top:100px">
            <a href="{{route('tahap1.soal5')}}">
              <input type="submit" name="Submit" value="NEXT SOAL 5 >>>"  class="btn btn-block btn-danger"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

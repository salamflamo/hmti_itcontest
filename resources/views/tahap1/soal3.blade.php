@extends('layouts.master')
@section('content')
<div class="container">
  <div class="content">
    <div class="col-md-10 col-md-offset-1">
      <h2 style="text-align:center; margin-bottom:20px">SOAL 3</h2>
      <div class="soal">
        <p style="text-align:justify">Smartphone pertama  didunia adalah… </p>
      </div>
      <div class="row" style="margin-top:50px">
        <form class="" action="{{route('tahap1.store3')}}" method="post">
            {!! csrf_field() !!}
          <div class="col-md-8">
            <label>SCORE : </label>
            <input type="text" name="score" value="{{$score->score}}" disabled>
          </div>
          <div class="col-md-4">
            <label>JAWABAN : </label><br><br>
            <input type="radio" name="answer" value="a"> A.	IBM Simon  <br><br>
            <input type="radio" name="answer" value="b"> B.	Motorola
          </div>
          <div class="col-md-8">

          </div>
          <div class="col-md-4" style="margin-top:100px">
            <a href="{{route('tahap1.soal4')}}">
              <input type="submit" name="Submit" value="NEXT SOAL 4 >>>"  class="btn btn-block btn-danger"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

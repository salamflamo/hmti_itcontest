@extends('layouts.master')
@section('content')
<div class="container">
  <div class="content">
    <div class="col-md-10 col-md-offset-1">
      <h2 style="text-align:center; margin-bottom:20px">SOAL 8</h2>
      <div class="soal">
        <p style="text-align:justify">Media penyimpanan yang kapasitas hanya 1,44 MB dengan ukuran 3,5 inchi disebut... </p>
      </div>
      <div class="row" style="margin-top:50px">
        <form class="" action="{{route('tahap1.store8')}}" method="post">
            {!! csrf_field() !!}
          <div class="col-md-8">
            <label>SCORE : </label>
            <input type="text" name="score" value="{{$score->score}}" disabled>
          </div>
          <div class="col-md-4">
            <label>JAWABAN : </label><br><br>
            <input type="radio" name="answer" value="a"> A.	Cd room <br><br>
            <input type="radio" name="answer" value="b"> B.	Floppy disk
          </div>
          <div class="col-md-8">

          </div>
          <div class="col-md-4" style="margin-top:100px">
            <a href="{{route('tahap1.soal9')}}">
              <input type="submit" name="Submit" value="NEXT SOAL 9 >>>"  class="btn btn-block btn-danger"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

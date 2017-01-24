@extends('layouts.master')
@section('content')
<div class="container">
  <div class="content">
    <div class="col-md-10 col-md-offset-1">
      <h2 style="text-align:center; margin-bottom:20px">SOAL 2</h2>
      <div class="soal">
        <p style="text-align:justify"> ENIAC (Electronic Numerical Integrator And Computer) adalah komputer generasi.. </p>
      </div>
      <div class="row" style="margin-top:50px">
        <form class="" action="{{route('tahap1.store2')}}" method="post">
            {!! csrf_field() !!}
          <div class="col-md-4">
            <label>SCORE : </label>
            <input type="text" name="score" value="{{$score->score}}" disabled>
          </div>
          <div class="col-md-8">
            <label>JAWABAN : </label><br><br>
            <input type="radio" name="answer" value="a">
            A.	Pertama <br><br>
            <input type="radio" name="answer" value="b">
            B.	Kedua
          </div>
          <div class="col-md-8">

          </div>
          <div class="col-md-4" style="margin-top:100px">
            <a href="{{route('tahap1.soal3')}}">
              <input type="submit" name="Submit" value="NEXT SOAL 3 >>>"  class="btn btn-block btn-danger"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

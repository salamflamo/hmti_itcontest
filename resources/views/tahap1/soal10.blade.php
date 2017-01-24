@extends('layouts.master')
@section('content')
<div class="container">
  <div class="content">
    <div class="col-md-10 col-md-offset-1">
      <h2 style="text-align:center; margin-bottom:20px">SOAL 10</h2>
      <div class="soal">
        <p style="text-align:justify">Sebuah sistem pengiriman pesan yang
          menggunakan kombinasi suara panjang dan pendek dalam berbagai cara yang
          bervariasi unutk mengkodekan huruf-huruf, dit – dit mewakili dengan titik-titik,
          sedangkan dah-dah diwakili dengan garis penghubung merupakan pengertian dari...</p>
      </div>
      <div class="row" style="margin-top:50px">
        <form class="" action="{{route('tahap1.store10')}}" method="post">
            {!! csrf_field() !!}
          <div class="col-md-8">
            <label>SCORE : </label>
            <input type="text" name="score" value="{{$score->score}}" disabled>
          </div>
          <div class="col-md-4">
            <label>JAWABAN : </label><br><br>
            <input type="radio" name="answer" value="a"> A.	Kode Morse <br><br>
            <input type="radio" name="answer" value="b"> B.	Kode Biner
          </div>
          <div class="col-md-8">

          </div>
          <div class="col-md-4" style="margin-top:100px">
            <a href="{{route('tahap1.hasil')}}">
              <input type="submit" name="Submit" value="HASIL TAHAP 1 >>>"  class="btn btn-block btn-danger"></a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@extends('layouts.master')
@section('content')
<div class="container">
    <div class="content  wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
    <div class="col-md-12">
      <h2 style="text-align:center">HASIL TAHAP 2</h2><br>
      <table class="table table-striped">
        <thead>
          <th>NIS</th>
          <th>NAMA</th>
          <th>SCORE</th>
        </thead>
        <tbody>

          @foreach ($scores as $score)
          <tr>
            <td>{{$score->nis}}</td>
            <td>{{$score->name}}</td>
            <td>{{$score->score}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-4 col-md-offset-4" style="margin-top:10px">
        <a href="{{route('tahap3.index')}}" class="btn btn-block btn-primary">
          TAHAP 3
        </a>
    </div>
  </div>
</div>
@endsection

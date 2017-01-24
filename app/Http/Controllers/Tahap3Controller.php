<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Score;
use App\Tahap3;
use Auth;

class Tahap3Controller extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
 public function index()
 {
   $user=Auth::user();
   $id=$user->id;
   $score= Score::find($id);
   return view('tahap3.index',['score'=>$score]);
 }
 public function store(Request $request)
 {
   $user=Auth::user();
   $id=$user->id;
   $score= Score::find($id);
   $tahap3=new Tahap3;
   $tahap3->point=$request->point;
   $tahap3->id=$id;
   $tahap3->save();
   return redirect('/tahap3-soal1');
 }
 public function soal1(){
   $user=Auth::user();
   $id=$user->id;
   $score=Score::find($id);
   return view('tahap3.soal1',compact('score'));
 }
 public function store1(Request $request){
   $this->validate($request, array('answer'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap3 = Tahap3::find($id);
   $point=$request->point;
   if($jawaban=='a'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap3->one=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap3->save();
   return redirect()->route('tahap3.soal2');
 }
 public function soal2(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap3.soal2',['score'=>$score]);
 }
 public function store2(Request $request){
   $this->validate($request, array('answer'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap3 = Tahap3::find($id);
   $point=$request->point;
   if($jawaban=='a'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap3->two=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap3->save();
   return redirect()->route('tahap3.soal3');
 }
 public function soal3(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap3.soal3',['score'=>$score]);
 }
 public function store3(Request $request){
   $this->validate($request, array('answer'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap3 = Tahap3::find($id);
   $point=$request->point;
   if($jawaban=='a'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap3->three=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap3->save();
   return redirect()->route('tahap3.soal4');
 }
 public function soal4(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap3.soal4',['score'=>$score]);
 }
 public function store4(Request $request){
   $this->validate($request, array('answer'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap3 = Tahap3::find($id);
   $point=$request->point;
   if($jawaban=='b'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap3->four=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap3->save();
   return redirect()->route('tahap3.soal5');
 }
 public function soal5(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap3.soal5',['score'=>$score]);
 }
 public function store5(Request $request){
   $this->validate($request, array('answer'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap3 = Tahap3::find($id);
   $point=$request->point;
   if($jawaban=='a'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap3->five=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap3->save();
   return redirect()->route('tahap3.hasil');
 }
 public function hasil(){
   $scores = Score::orderBy('score','esc')->get();
   return view('tahap3.hasil',['scores'=>$scores]);
 }
}

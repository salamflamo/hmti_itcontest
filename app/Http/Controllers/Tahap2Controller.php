<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Score;
use App\Tahap2;
use Auth;

class Tahap2Controller extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }
 public function index()
 {
   $user=Auth::user();
   $id=$user->id;
   $score= Score::find($id);
   return view('tahap2.index',['score'=>$score]);
 }
 public function store(Request $request)
 {
   $user=Auth::user();
   $id=$user->id;
   $score= Score::find($id);
   $tahap2=new Tahap2;
   $tahap2->point=$request->point;
   $tahap2->id=$id;
   $tahap2->save();
   return redirect('/tahap2-soal1');
 }
 public function soal1(){
   $user=Auth::user();
   $id=$user->id;
   $score=Score::find($id);
   return view('tahap2.soal1',compact('score'));
 }
 public function store1(Request $request){
   $this->validate($request, array('answer'=>'required','point'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $point=$request->point;
   if($jawaban=='a'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap2 = Tahap2::find($id);
   $tahap2->one=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap2->save();
   return redirect()->route('tahap2.soal2');
 }
 public function soal2(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
     return view('tahap2.soal2',['score'=>$score]);
 }
 public function store2(Request $request){
   $this->validate($request, array('answer'=>'required','point'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap2 = Tahap2::find($id);
   $point=$request->point;
   if($jawaban=='a'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap2->two=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap2->save();
   return redirect()->route('tahap2.soal3');
 }
 public function soal3(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap2.soal3',['score'=>$score]);
 }
 public function store3(Request $request){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $this->validate($request, array('answer'=>'required','point'=>'required'));

   $jawaban = $request->answer;
   $tahap2 = Tahap2::find($id);
   $point=$request->point;
   if($jawaban=='a'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap2->three=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap2->save();
   return redirect()->route('tahap2.soal4');
 }
 public function soal4(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap2.soal4',['score'=>$score]);
 }
 public function store4(Request $request){
   $this->validate($request, array('answer'=>'required','point'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap2 = Tahap2::find($id);
    $point=$request->point;
   if($jawaban=='b'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap2->four=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap2->save();
   return redirect()->route('tahap2.soal5');
 }
 public function soal5(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap2.soal5',['score'=>$score]);
 }
 public function store5(Request $request){
   $this->validate($request, array('answer'=>'required','point'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap2 = Tahap2::find($id);
    $point=$request->point;
   if($jawaban=='b'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap2->five=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap2->save();
   return redirect()->route('tahap2.soal6');
 }
 public function soal6(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap2.soal6',['score'=>$score]);
 }
 public function store6(Request $request){
   $this->validate($request, array('answer'=>'required','point'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap2 = Tahap2::find($id);
    $point=$request->point;
   if($jawaban=='b'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap2->six=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap2->save();
   return redirect()->route('tahap2.soal7');
 }
 public function soal7(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap2.soal7',['score'=>$score]);
 }
 public function store7(Request $request){
   $this->validate($request, array('answer'=>'required','point'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap2 = Tahap2::find($id);
    $point=$request->point;
   if($jawaban=='a'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap2->seven=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap2->save();
   return redirect()->route('tahap2.soal8');
 }
 public function soal8(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap2.soal8',['score'=>$score]);
 }
 public function store8(Request $request){
   $this->validate($request, array('answer'=>'required','point'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap2 = Tahap2::find($id);
    $point=$request->point;
   if($jawaban=='a'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap2->eight=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap2->save();
   return redirect()->route('tahap2.soal9');
 }
 public function soal9(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap2.soal9',['score'=>$score]);
 }
 public function store9(Request $request){
   $this->validate($request, array('answer'=>'required','point'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap2 = Tahap2::find($id);
    $point=$request->point;
   if($jawaban=='b'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap2->nine=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap2->save();
   return redirect()->route('tahap2.soal10');
 }
 public function soal10(){
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   return view('tahap2.soal10',['score'=>$score]);
 }
 public function store10(Request $request){
   $this->validate($request, array('answer'=>'required','point'=>'required'));
   $user=Auth::user();
   $id=$user->id;
   $score = Score::find($id);
   $tmp = $score->score;
   $jawaban = $request->answer;
   $tahap2 = Tahap2::find($id);
    $point=$request->point;
   if($jawaban=='a'){
     $tmp = $tmp + $point;
   }
   else{
     $tmp = $tmp - $point;
   }
   $tahap2->ten=$jawaban;
   $score->score = $tmp;
   $score->save();
   $tahap2->save();
   return redirect()->route('tahap2.hasil');
 }
 public function hasil(){
   $scores = Score::orderBy('score','esc')->get();
   return view('tahap2.hasil',['scores'=>$scores]);
 }
}

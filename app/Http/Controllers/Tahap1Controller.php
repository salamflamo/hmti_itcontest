<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Score;
use App\Tahap1;
use Auth;

class Tahap1Controller extends Controller
{

     public function __construct(){
       $this->middleware('auth');
     }
    public function index()
    {
        return view('/tahap1.index');
    }
    public function store(Request $request)
    {
      $user=Auth::user();
      $id=$user->id;
      $score=new Score;
      $tahap1=new Tahap1;
      $score->id=$id;
      $score->score=30;
      $score->nis=$user->nis;
      $score->name=$user->name;
      $tahap1->id=$id;
      $score->save();
      $tahap1->save();
      return redirect('/tahap1-soal1');
    }

    public function soal1(){
      $user=Auth::user();
      $id=$user->id;
      $score=Score::find($id);
      return view('tahap1.soal1',compact('score'));
    }
    public function store1(Request $request){
      $this->validate($request, array('answer'=>'required'));
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      $tmp = $score->score;
      $jawaban = $request->answer;
      if($jawaban=='a'){
        $tmp = $tmp + 2;
      }
      else{
        $tmp = $tmp - 0;
      }
      $tahap1 = Tahap1::find($id);
      $tahap1->one=$jawaban;
      $score->score = $tmp;
      $score->save();
      $tahap1->save();
      return redirect()->route('tahap1.soal2');
    }
    public function soal2(){
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      return view('tahap1.soal2',['score'=>$score]);
    }
    public function store2(Request $request){
      $this->validate($request, array('answer'=>'required'));
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      $tmp = $score->score;
      $jawaban = $request->answer;
      if($jawaban=='a'){
        $tmp = $tmp + 2;
      }
      else{
        $tmp = $tmp - 0;
      }
      $tahap1 = Tahap1::find($id);
      $tahap1->two=$jawaban;
      $score->score = $tmp;
      $score->save();
      $tahap1->save();
      return redirect()->route('tahap1.soal3');
    }
    public function soal3(){
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      return view('tahap1.soal3',['score'=>$score]);
    }

    public function store3(Request $request){
      $this->validate($request, array('answer'=>'required'));
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      $tmp = $score->score;
      $jawaban = $request->answer;
      if($jawaban=='a'){
        $tmp = $tmp + 2;
      }
      else{
        $tmp = $tmp - 0;
      }
      $tahap1 = Tahap1::find($id);
      $tahap1->three=$jawaban;
      $score->score = $tmp;
      $score->save();
      $tahap1->save();
      return redirect()->route('tahap1.soal4');
    }

    public function soal4(){
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      return view('tahap1.soal4',['score'=>$score]);
    }
    public function store4(Request $request){
      $this->validate($request, array('answer'=>'required'));
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      $tmp = $score->score;
      $jawaban = $request->answer;
      if($jawaban=='a'){
        $tmp = $tmp + 2;
      }
      else{
        $tmp = $tmp - 0;
      }
      $tahap1 = Tahap1::find($id);
      $tahap1->four=$jawaban;
      $score->score = $tmp;
      $score->save();
      $tahap1->save();
      return redirect()->route('tahap1.soal5');
    }
    public function soal5(){
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      return view('tahap1.soal5',['score'=>$score]);
    }
    public function store5(Request $request){
      $this->validate($request, array('answer'=>'required'));
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      $tmp = $score->score;
      $jawaban = $request->answer;
      if($jawaban=='a'){
        $tmp = $tmp + 3;
      }
      else{
        $tmp = $tmp - 0;
      }
      $tahap1 = Tahap1::find($id);
      $tahap1->five=$jawaban;
      $score->score = $tmp;
      $score->save();
      $tahap1->save();
      return redirect()->route('tahap1.soal6');
    }
    public function soal6(){
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      return view('tahap1.soal6',['score'=>$score]);
    }
    public function store6(Request $request){
      $this->validate($request, array('answer'=>'required'));
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      $tmp = $score->score;
      $jawaban = $request->answer;
      if($jawaban=='b'){
        $tmp = $tmp + 3;
      }
      else{
        $tmp = $tmp - 0;
      }
      $tahap1 = Tahap1::find($id);
      $tahap1->six=$jawaban;
      $score->score = $tmp;
      $score->save();
      $tahap1->save();
      return redirect()->route('tahap1.soal7');
    }
    public function soal7(){
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      return view('tahap1.soal7',['score'=>$score]);
    }
    public function store7(Request $request){
      $this->validate($request, array('answer'=>'required'));
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      $tmp = $score->score;
      $jawaban = $request->answer;
      if($jawaban=='a'){
        $tmp = $tmp + 3;
      }
      else{
        $tmp = $tmp - 0;
      }
      $tahap1 = Tahap1::find($id);
      $tahap1->seven=$jawaban;
      $score->score = $tmp;
      $score->save();
      $tahap1->save();
      return redirect()->route('tahap1.soal8');
    }
    public function soal8(){
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      return view('tahap1.soal8',['score'=>$score]);
    }
    public function store8(Request $request){
      $this->validate($request, array('answer'=>'required'));
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      $tmp = $score->score;
      $jawaban = $request->answer;
      if($jawaban=='b'){
        $tmp = $tmp + 4;
      }
      else{
        $tmp = $tmp - 0;
      }
      $tahap1 = Tahap1::find($id);
      $tahap1->eight=$jawaban;
      $score->score = $tmp;
      $score->save();
      $tahap1->save();
      return redirect()->route('tahap1.soal9');
    }
    public function soal9(){
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      return view('tahap1.soal9',['score'=>$score]);
    }
    public function store9(Request $request){
      $this->validate($request, array('answer'=>'required'));
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      $tmp = $score->score;
      $jawaban = $request->answer;
      if($jawaban=='a'){
        $tmp = $tmp + 4;
      }
      else{
        $tmp = $tmp - 0;
      }
      $tahap1 = Tahap1::find($id);
      $tahap1->nine=$jawaban;
      $score->score = $tmp;
      $score->save();
      $tahap1->save();
      return redirect()->route('tahap1.soal10');
    }
    public function soal10(){
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      return view('tahap1.soal10',['score'=>$score]);
    }
    public function store10(Request $request){
      $this->validate($request, array('answer'=>'required'));
      $user=Auth::user();
      $id=$user->id;
      $score = Score::find($id);
      $tmp = $score->score;
      $jawaban = $request->answer;
      if($jawaban=='a'){
        $tmp = $tmp + 4;
      }
      else{
        $tmp = $tmp - 0;
      }
      $tahap1 = Tahap1::find($id);
      $tahap1->ten=$jawaban;
      $score->score = $tmp;
      $score->save();
      $tahap1->save();
      return redirect()->route('tahap1.hasil');
    }
    public function hasil(){
      $scores = Score::orderBy('score','esc')->get();
      return view('tahap1.hasil',['scores'=>$scores]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    public function index(){
        $questions = Question::all();
        return view('question.index',compact('questions'));

    }

    public function create(Request $request){
        return view('question.create');
    }

    public function store(Request $request){
    Question::create([
        'question' => $request->question,
        'user_id' => '1'
    ]);

    }

    public function show(Request $request){
    $q=Question::with('answer')->get()->find(1);
    return view('question.show',compact(['q']));
    }


    public function answer_store(Request $request){
       // return $request;

        Answer::create([
            'question_id' => $request ->question,
//            'user_id' => Auth::id(),
            'user_id' => '1',
            'answer' => $request->answer
        ]);
        return redirect()->route('question.show');
    }
}

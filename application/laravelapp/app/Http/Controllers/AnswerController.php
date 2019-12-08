<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Question;
use Illuminate\Support\Facades\Auth;

class AnswerController extends Controller
{
    public function create(Request $request)
    {
        $question = Question::where('id', $request->id)->get();
        return view('answer.create', ['question' => $question]);
    }

    public function store(Request $request)
    {
        $answer = new Answer();
        $answer->text = $request->text;
        $answer->user_id = Auth::user()->id;
        $answer->question_id = $request->question_id;
        $answer->save(); //DBに保存

        return redirect()->route('question.index');
    }

    public function destroy(int $id)
    {
        $answer = Answer::find($id);
        $answer->delete();

        return redirect()->route('question.index');
    }

    public function edit(int $id)
    {
        $answer = Answer::find($id);

        return view('answer.edit', ['answer' => $answer]);
    }

    public function update(int $id, Request $request)
    {
        $answer = Answer::find($id);

        $answer->text = $request->text;
        $answer->save();

        return redirect()->route('question.index');
    }
}

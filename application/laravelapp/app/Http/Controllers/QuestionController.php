<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Genre;
use App\Answer;
use App\Http\Requests\CreateQuestion; // バリデーション用
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        $genres = Genre::all();
        $answers = Answer::all();

        return view('question.index',['questions' => $questions], ['answers' => $answers]);
    }

    public function create()
    {
        $genres = Genre::all();
        return view('question.create', ['genres' => $genres]);
    }

    public function store(CreateQuestion $request)
    {
        $question = new Question();

        $question->genre_id = $request->genre_id;
        $question->text = $request->text;
        $question->user_id = Auth::user()->id;
        $question->save(); //DBに保存

        return redirect()->route('question.index');
    }

    public function destroy(int $id)
    {
        $question = Question::find($id);
        $question->delete();

        return redirect()->route('question.index');
    }

    public function edit(int $id)
    {
        $question = Question::find($id);
        $genres = Genre::all();

        return view('question.edit', ['question' => $question,], ['genres' => $genres,]);
    }

    public function update(int $id, CreateQuestion $request)
    {
        $question = Question::find($id);

        $question->genre_id = $request->genre_id; //画面で入力されたタイトルを代入
        $question->text = $request->text; //画面で入力された本文を代入
        $question->save(); //DBに保存

        return redirect()->route('question.index'); //一覧ページにリダイレクト
    }
}

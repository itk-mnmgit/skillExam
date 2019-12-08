@extends('layouts.app')

@section('content')

    <a href="{{ route('question.create') }}" class="btn btn-primary btn-block">
        新規投稿
    </a>

    @foreach ($questions as $question)
        <div class="m-4 p-4 border border-primary">
            <p>{{ $question->genre_id }}</p>
            <p>{{ $question->text }}</p>
            <p>{{ $question->created_at }}</p>
            @if(Auth::check())
                <a class="btn btn-primary" href="{{ route('answer.create', ['id' => $question->id]) }}">回答</a>
                @if(Auth::user()->id === $question->user_id)
                    <a class="btn btn-success" href="{{ route('question.edit', ['id' => $question->id]) }}">編集</a>
                    <form action="{{ route('question.destroy', ['id' => $question->id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">削除</button>
                    </form>
                @endif
            @endif
        @foreach($answers as $answer)
            @if($answer->question_id == $question->id)
                <div class="m-4 p-4 border border-primary">
                    <p>{{ $answer->user_id }}</p>
                    <p>{{ $answer->text }}</p>
                    <p>{{ $question->created_at }}</p>
                    @if(Auth::user()->id === $answer->user_id)
                        <a class="btn btn-success" href="{{ route('answer.edit', ['id' => $answer->id]) }}">編集</a>
                        <form action="{{ route('answer.destroy', ['id' => $answer->id]) }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">削除</button>
                        </form>
                    @endif
                </div>
            @endif
        @endforeach
    </div>

    @endforeach


@endsection
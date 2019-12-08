@extends('layouts.app')

@section('content')

<section class="container m-5">
        <div class="row justify-content-center">
            <div class="col-8">
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $message)
                        <li class="alert alert-danger">{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
                <form action="{{ route('question.update', ['id' => $question->id]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <h4 class ="mb-3 mt-3">ジャンル選択</h4>
                        <div class="form-check">
                            @foreach($genres as $genre)
                                <input class="form-check-input" type="radio" name="genre_id" id="{{ $genre->name }}" value='{{ $genre->id }}' {{ old('genre_id', $question->genre_id) == $genre->id ? 'checked' : '' }}>
                                <label class="form-check-label mr-5" for="{{ $genre->name }}">{{ $genre->name }}</label>
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="body">本文</label>
                        <textarea class="form-control" name="text" id="text">{{ old('text', $question->text) }}</textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
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
                <form action="{{ route('question.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 order-md-1">
                            <h4 class ="mb-3 mt-3">ジャンル選択</h4>
                            <div class="form-check">
                                @foreach($genres as $genre)
                                    <input class="form-check-input" type="radio" name="genre_id" id="{{ $genre->name }}" value='{{ $genre->id }}' {{ old('genre_id') == $genre->id ? 'checked' : '' }}>
                                    <label class="form-check-label mr-5" for="{{ $genre->name }}">{{ $genre->name }}</label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 order-md-1">
                            <div class="form-group">
                                <label for="body">本文</label>
                                <textarea class="form-control" name="text" id="text">{{ old('text') }}</textarea>
                            </div>
                        </div>
                    </div>
                    {{-- <input type="hidden" name="question_id"  value='{{ $question->id }}'> --}}
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">投稿</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @endsection
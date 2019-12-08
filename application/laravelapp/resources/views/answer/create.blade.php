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
                <form action="{{ route('answer.create') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8 order-md-1">
                            <div class="form-group">
                                <label for="body">お返事</label>
                                <textarea class="form-control" name="text" id="text">{{ old('text') }}</textarea>
                            </div>
                        </div>
{{-- value に $question->idが持ってこれませんでした --}}
                        <input type="hidden" name="question_id"  value='1' >
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">投稿</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @endsection
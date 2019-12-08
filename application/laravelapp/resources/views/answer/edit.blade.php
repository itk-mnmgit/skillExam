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
                <form action="{{ route('answer.update', ['id' => $answer->id]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="body">本文</label>
                        <textarea class="form-control" name="text" id="text">{{ old('text', $answer->text) }}</textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">更新</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
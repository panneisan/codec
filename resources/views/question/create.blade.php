@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create New Question</div>

                    <div class="card-body">
                        <form action='{{route('question.store',$questionaire->id)}}' method="post">
                            @csrf
                            <div class="form-group">
                                <label for="question">Enter Your Title</label>
                                <input type="text" class="form-control" name="question[question]" id="question" value="{{old("question.question")}}">
                                <small class="text-black ">Give Your Questionaires Title</small>
                                <br>
                                @error('question.question')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <fieldset>
                                    <legend>Choices</legend>
                                    <small class="text-black ">Give Choices that give you the most insight into your question </small>

                                    <div>
                                        <div class="form-group">
                                            <label for="answer1">Answer 1</label>
                                            <input type="text" class="form-control" name="answers[][answer]" id="answer1" value="{{old("answers.0.answer")}}">
                                            @error('answers.0.answer')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                        <div>
                                            <div class="form-group">
                                                <label for="answer2">Answer 2</label>
                                                <input type="text" class="form-control" name="answers[][answer]" id="answer2" value="{{old("answers.1.answer")}}">
                                                @error('answers.1.answer')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="form-group">
                                                <label for="answer3">Answer 3</label>
                                                <input type="text" class="form-control" name="answers[][answer]" id="answer3" value="{{old("answers.2.answer")}}">
                                                @error('answers.2.answer')
                                                <small class="text-danger">{{$message}}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    <div class="">
                                        <div class="form-group">
                                            <label for="answer4">Answer 4</label>
                                            <input type="text" class="form-control" name="answers[][answer]" id="answer4" value="{{old("answers.3.answer")}}">
                                            @error('answers.3.answer')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <button class="btn btn-dark">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

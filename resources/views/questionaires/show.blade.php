@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{$questionaire->title}}</div>

                    <div class="card-body">
                        <a href="{{url('question/create')}}" class="btn btn-dark">Create Question</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Create New Questionaires</div>

                    <div class="card-body">
                        <form action="{{url("/questionaire/store")}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Enter Your Title</label>
                                <input type="text" class="form-control" name="title" id="title">
                                <small class="text-black ">Give Your Questionaires Title</small>
                                <br>
                                @error('title')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="purpose">Enter Your Purpose</label>
                                <input type="text" class="form-control" name="purpose" id="purpose">
                                <small class="text-black ">Give Your Questionarirues Purpose of Your Visiting..</small>
                                <br>
                                @error('purpose')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <button class="btn btn-dark">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

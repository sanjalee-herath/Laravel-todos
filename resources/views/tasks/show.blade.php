@extends('layouts.app')

@section('content')



    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>{{ $task->title }}</h3></div>

                    <div class="panel-body">

                        <p>{{ $task->description }}</p>

                        <a href="/tasks/{{ $task->id }}/edit">
                        
                        <button type="button" class="btn btn-primary">edit</button>
                        
                        </a>

                        <a href="/tasks/{{ $task->id }}/delete">

                        <button type="button" class="btn btn-danger">Delete</button>

                        </a>

                        <a href="/home">

                        <button type="button" class="btn btn-success">Back</button>

                        </a>
                    </div>
                </div>
            </div>
    </div>
    

@endsection
@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mytodos</div>

                <div class="panel-body">

                    <form method="GET" action="/tasks/{{ $task->id }}/update">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title">Title </label>
                            <input type="text" class="form-control" name="title" value="{{ $task->title }}" >
                        </div>


                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" rows="3">{{ $task->description }}</textarea>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">edit</button>

          
                    </form>

                    <hr>

                    <a href="/tasks/{{ $task->id }}">

                        <button type="button" class="btn btn-success">Back</button>

                    </a>
                    
                </div>
            </div>
        </div>
    </div>

@endsection
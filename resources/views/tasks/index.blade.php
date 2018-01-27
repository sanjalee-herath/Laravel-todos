@extends('layouts.app')

@section('content')

<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mytodos</div>

                <div class="panel-body">

                <ul>
                
                    @if($tasks)

                        @foreach($tasks as $task)

                            <li><a href="/tasks/{{ $task->id }}">{{ $task->title }}</a></li>

                        @endforeach

                    @endif
                
                
                </ul>

                    <form method="POST" action="/tasks">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="title">Title </label>
                            <input type="text" class="form-control" name="title" required>
                        </div>


                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" rows="3" required></textarea>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Add</button> 

                        @include('layouts.errors')
          
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    

@endsection
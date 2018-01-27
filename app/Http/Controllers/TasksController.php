<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){

        $tasks = Task::where('user_id',auth()->id())->get();

        return view('tasks.index',compact('tasks'));
    }

    public function store(){

        $this->validate(request(),[
            'title' => 'required|min:5',
            'description' => 'required|min:10|max:255'
        ]);

        Task::create([
            'title' => request('title') ,
            'description'=> request('description'),
            'user_id' => auth()->id()
        ]);

        return redirect('/home');
    }



    public function show(Task $task){

        return view('tasks.show',compact('task'));
    }



    public function edit(Task $task){

        return view('tasks.edit',compact('task'));
    }



    public function update($id){

        $taskToEdit = Task::find($id);

        Task::where('id',$taskToEdit->id)
                ->update([
                    'title' => request('title') , 'description' => request('description')
                ]);

        $task = Task::find($id);

        return view('tasks.edit',compact('task'));
    }

    public function destroy($id){

        $task = Task::find($id);

        Task::where('id','=', $task->id)->delete();

        return redirect('/home');
    }
}


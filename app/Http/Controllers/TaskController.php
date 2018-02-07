<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Validator;
use Illuminate\Validation\Rule;
use Session;

class TaskController extends Controller
{
    function show(){
        $tasks = Task::all();
        return view('/tasks', compact('tasks'));
    }

    function add(Request $request){
        // $rules = [
        //     'task' => [ Rule::in('task')]
        // ];
        $validate = $request->validate([
            'task' => ['required','max:255','regex:^Task.*^']
        ]);
            
        // Rule::in('task')]
    

        $task = new Task();
        $task->name = $request->task;
        $task->save();

        Session::flash('statusA','Task was successfully added!');

        return redirect('/tasks');
    }

    function delete($id){
        $task = Task::find($id);
        $task->delete();

        Session::flash('statusB','Task Deleted');

        return redirect('/tasks');
    }

     function edit($id){
        $task = Task::find($id);
        return view('tasks_edit', compact('task'));
    }

    function update(Request $request, $id){


        $task = Task::find($id);
        $task->name = $request->task;
        $task->save();
        return redirect('/tasks');
    }
}




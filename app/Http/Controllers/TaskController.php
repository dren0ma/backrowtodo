<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Comment;
use Validator;
use Illuminate\Validation\Rule;
use Session;
use Auth;

class TaskController extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }


    function show(){
        // $tasks = Auth::user()->tasks;
        $tasks = Task::all();
        return view('/tasks', compact('tasks'));
    }

    function add(Request $request){
      
        $validate = $request->validate([
            'task' => ['required','max:255','regex:^Task.*^']
        ]);
            
        // Rule::in('task')]
    

        $task = new Task();
        $task->name = $request->task;
        $task->user_id = Auth::user()->id;
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




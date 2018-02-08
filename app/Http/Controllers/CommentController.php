<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Comment;
use Validator;
use Illuminate\Validation\Rule;
use Session;
use Auth;
class CommentController extends Controller

{
     function showComment($id){
       $task = Task::find($id);
       return view('tasks_comment', compact('task'));
    }

    function addComment(Request $request, $id){

        $comment = new Comment();
        $comment->task_Id = $id;
        $comment->comment = $request->comment;
        $comment->user_id = Auth::user()->id;
        $comment->save();

        return redirect('/tasks');

    }

    
}

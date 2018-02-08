@extends('template')
@section('main_content')
<div class="section"></div>
<div class="columns">

    <div class="column is-6 is-offset-3">
        <div class="section">
            
            @if(Session::has('statusA'))
                <div class="notification is-primary" id="notif">
                    <button class="delete" id="closenot"></button>
                    {{Session::get('statusA')}}
                </div> 
            @elseif(Session::has('statusB'))
                <div class="notification is-warning" id="notif">
                    <button class="delete" id="closenot"></button>
                    {{Session::get('statusB')}}
                </div> 
            @endif

            <p class="title has-text-centered">Task List</p>
            <div class="level">
                <div class="level-item">
                    <form method="POST">
                            {{ csrf_field() }}
                        <div class="field has-addons">
                            <div class="control has-icons-left">
                                <input class="input" type="text" name="task">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}'Task' is required</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </input>
                            </div>
                            <div class="control">
                                <input type="submit" name="submit" value="Add Task" class="button is-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="box">
            <p class="title is-4">Current Tasks</p>
        
           

            @foreach($tasks as $task)
            <div class="columns">
                <div class="column is-one-third">
                    <p class="title is-6">{{ $task->name }}</p>
                    <p class="subtitle is-7">by: {{$task->user->name}}</p>
                    @foreach($task->comments as $comment)
                        <p class="subtitle is-6">- {{$comment->comment}}, {{$comment->updated_at->diffForHumans()}} by {{$comment->user->name}} 
                            <a href="{{url("/tasks/$comment->id/delcomment")}}"><span><i class="delete"></i></span></a>

                        </p>

                    @endforeach
                    
                </div>
                <div class="column is-one-third">
                    <div class="field is-grouped">
                        <p><a href='{{url("/tasks/$task->id/edit")}}'><button class="button is-info">Edit Task</button></a></p>

                        <p><a class="notif" href='{{url("/tasks/$task->id/addcomment")}}'><button class="button is-warning">Add Comment</button></a></p>

                        <p><a class="notif" href='{{url("/tasks/$task->id/delete")}}'><button class="button is-danger">Delete Task</button></a></p>
                        

                    </div>


                </div>  
                </div>  
            @endforeach
            
        
        </div>
    </div> {{-- column --}}
</div>
@endsection



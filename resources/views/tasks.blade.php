<!--   imports bulma   -->
    <link rel="stylesheet" type="text/css" href="{{asset('bulma/bulma.css')}}">
    

    

<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/bootstrap.css')}}">

<div class="section"></div>
<div class="columns">

    <div class="column is-6 is-offset-3">
        <div class="section box">
            @if(Session::has('status'))
<div class="notification is-primary">
    <button class="delete"></button>
  <strong>Success!</strong> Task was successfully added!
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
                                                <li>{{ $error }}'Task' is requred</li>
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
                    <p class="title is-6 level-item">{{ $task->name }}</p>
                </div>
                <div class="column is-one-third">
                    <div class="field is-grouped">
                        <p><a href='{{url("/tasks/$task->id/edit")}}'><button class="button is-info">Edit</button></a></p>
                        <p><a href='{{url("/tasks/$task->id/delete")}}'><button class="button is-danger">Delete</button></a></p>
                    </div>    
                </div>  
                </div>  
            @endforeach
            
        </div>
    </div> {{-- column --}}
</div>




<!--   imports fontaweseome   -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>

<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.js')}}"></script>


@extends('template')
@section('main_content')
<form method="POST">
        {{ csrf_field() }}
     <div class="column is-6 is-offset-3">
        <div class="field">
            <div class="control has-icons-left">
                <input class="input" type="text" name="task" value="{{ $task->name }}" disabled> 
                
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
        </div>
        <div class="field has-addons">
            <div class="control has-icons-left">
                <input class="input" type="text" name="comment">
                
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
            <div class="control">
                <input type="submit" name="submit" value="Add Comment" class="button is-primary">
            </div>
        </div>
    </div>
</form>
@endsection
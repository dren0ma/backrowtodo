@extends('template')
@section('main_content')
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
@endsection
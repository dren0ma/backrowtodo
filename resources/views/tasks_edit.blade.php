<form method="POST">
    {{ csrf_field() }}
<input type="text" name="task" value={{$task->name}}>
<input type="submit" name="submit" value="EDIT Task">
</form>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                
        <style>
table, th, td {
  border:1px solid black;
  background-color: rgb(216, 237, 247);
}
</style>
        <a href="todo_create">Add Record</a><br/><br/>
        {{session('msg')}}
        <br/>
        <table style="width:100%">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Created At</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($todoArr as $todo)
                    <tr>
                        <td>{{$todo->id}}</td>
                        <td>{{$todo->name}}</td>
                        <td>{{$todo->created_at}}</td>
                        <td>
                            <a href="todo_delete/{{$todo->id}}">Delete</a>
                            <a href="todo_edit/{{$todo->id}}">Edit</a>
                        </td>
                        </tr>
                    @endforeach
                </table>
        </div>
    </body>
</html>

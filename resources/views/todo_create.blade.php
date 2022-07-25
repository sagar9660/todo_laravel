<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                
        <style>
table, th, td {
  border:1px solid black;
  background-color: rgb(215, 250, 216);
}
</style>
        <a href="todo_show">Back</a><br/><br/>
        <form method="post" action="todo_submit">
            @csrf
            <table style="width:50%">
                <tr>
                    <td>Name</td>
                    <td><input type="textname" name="name" required style="width: 99%;"/></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" style="width: 100%;"/></td>
                </tr>
            </table>
        </form>
        </div>
    </body>
</html>

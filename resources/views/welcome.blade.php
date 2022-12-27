<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    TODO list <br>
    <hr>

    <form action="" method="POST">
        {{ csrf_field() }}
        <input type="text" name="content" id="addtask">
        <input type="submit" value="add task">
    </form>
    <form action="">
        {{ csrf_field() }}
    <input type="checkbox" id="task" name="done" onchange="this.form.submit()"  >
    <label for="task"> the task </label>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoItem</title>
</head>
<a>

<h1>Список дел:</h1>
@if ($todo !== null)
    <p>ID: {{$todo->id}}</p>
    <p>Заголовок задачи: {{$todo->title}}</p>
    <p>Описание задачи: {{$todo->description}}</p>
    <p>Задача создана: {{$todo->created_at}}</p>
    <p>Задача обновлена: {{$todo->updated_at}}</p>

@else
<p>Произошла ошибка</p>
@endif

<a href="{{url('/todo')}}">Назад</a>

</body>
</html>

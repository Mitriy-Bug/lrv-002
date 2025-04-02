<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Добавление студента в группу {{ $group->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-9">
    <h1 class="mb-4">Добавление студента в группу {{ $group->title }}</h1>
    <form action="{{ route('groups.students.store', ['group' => $group]) }}" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input class="form-control" type="text" name="surname" id="surname" required placeholder="Фамилия">
            <label for="surname">Фамилия</label>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" type="text" name="name" id="name" required placeholder="Имя">
            <label for="name">Имя</label>
        </div>
        <button class="btn btn-success" type="submit">Добавить</button>
    </form>
</div>
    <div class="col-md-3">
        <a class="btn btn-primary" href="/groups">В начало</a>
    </div>
</div>
</div>
</body>
</html>

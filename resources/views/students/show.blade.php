<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Информация о студенте {{ $student->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-9">
            <h1>Информация о студенте {{ $student->name }}</h1>
            <p>ФИО: {{ $student->surname }} {{ $student->name }}</p>
            <p>Группа: <a href="{{ route('groups.show', ['group' => $group]) }}">{{ $group->title }}</a></p>
        </div>
        <div class="col-md-3">
            <a class="btn btn-primary" href="/groups">В начало</a>
        </div>
</div>
</body>
</html>

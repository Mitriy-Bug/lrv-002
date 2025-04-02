    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Список групп</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-9">
                <h1>Информация о группе {{ $group->title }}</h1>
                <p>Начало обучения: {{ $group->start_from }}</p>
                <p>Статус: {{ $group->is_active ? 'Активна' : 'Не активна' }}</p>
                <h2>Студенты</h2>
                <p class="mb-3">
                    <a class="btn btn-success" href="{{ route('groups.students.create', ['group' => $group]) }}">Добавить студента</a>
                <p>
                <ul>
                    @forelse ($group->students as $student)
                        <li><a href="{{ route('groups.students.show', ['group' => $group, 'student' => $student]) }}">{{ $student->surname }} {{ $student->name }}</a></li>
                    @empty
                        <li>Нет студентов</li>
                    @endforelse
                </ul>
            </div>
            <div class="col-md-3">
                <p>
                    <a class="btn btn-primary" href="/groups">В начало</a>
                </p>
            </div>
        </div>
    </div>

    </body>
    </html>

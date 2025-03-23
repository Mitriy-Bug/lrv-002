    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Создание новой группы</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-5">
        <form action="{{ route('groups.store') }}" method="POST">
            @csrf
        <div class="row">
            <div class="mb-3">
                <label class="form-label">
                    Название группы<br>
                    <input type="text" class="form-control" placeholder="Название группы" name="title" required>
                </label>
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Дата начала обучения<br>
                    <input type="date" class="form-control" placeholder="Дата начала обучения" name="start_from" required value="<?php echo date('Y-m-d'); ?>">
                </label>
            </div>
            <div class="mb-3">
                Группа начала обучение?<br>
                <label class="form-check">
                    <input class="form-check-input" type="radio" value="1" name="is_active" required>
                    Да
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="radio" value="0" name="is_active">
                    Нет
                </label>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Добавить</button>
            </div>
        </div>
        </form>
    </div>
    </body>
    </html>

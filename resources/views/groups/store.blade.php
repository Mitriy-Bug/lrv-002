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
                <h1>Список групп - store</h1>
                <ul>
                    @foreach ($groups as $group)
                        <li><a href="{{ route('groups.show', ['group' => $group]) }}">{{ $group->title }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-3">
                <?php
                    //print_r(POST);
                    ?>
                <p class="text-center mt-3">
                    <a href="{{ route('groups.create') }}">Добавить группу</a>
                </p>
            </div>
        </div>
    </div>

    </body>
    </html>

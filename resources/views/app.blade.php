
    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title-block')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body class="bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column flex-md-row align-items-center bg-dark text-white px-md-4 p-3 mb-3 border-bottom">
    @yield('content')
            </div>
        </div>
    </div>
    </body>
    </html>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма ввода данных</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-dark text-white">

    <div class="container">

        <div class="d-flex flex-column flex-md-row align-items-center bg-dark text-white px-md-4 p-3 mb-3 border-bottom">

            <form method="post" action="{{ url ('user_form/data') }}">
                <h1>Форма ввода данных</h1><br>

                @csrf
                <input type="text" name="first_name" id="first_name" placeholder="Ваше имя" class="form-control"><br><br>
                <input type="text" name="last_name" id="last_name" placeholder="Ваша фамилия" class="form-control"><br><br>
                <input type="email" name="email" id="email" placeholder="Ваш email" class="form-control"><br><br>
                <button type="submit" class="btn btn-success">Отправить</button>
            </form>
        </div>
      
    </div>
</body>
</html>

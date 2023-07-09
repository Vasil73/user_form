
@extends('app')

@section('title-block')Форма@endsection

@section('content')

    <form method="post" action="{{ url ('user_data') }}">
        @csrf
        <h1>Форма ввода данных</h1><br>
        <input type="text" name="first_name" id="first_name" placeholder="Ваше имя" class="form-control"><br><br>
        <input type="text" name="last_name" id="last_name" placeholder="Ваша фамилия" class="form-control"><br><br>
        <input type="email" name="email" id="email" placeholder="Ваш email" class="form-control"><br><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

@endsection






@extends('app')

@section('title-block')Данные пользователя@endsection

@section('content')
    <div class="flex-column">
        <h1>Все данные</h1>
        <h3>
            Имя: {{  $user_data['first_name'] }}
        </h3>
        <h3>
            Фамилия: {{  $user_data['last_name'] }}
        </h3>
        <h3>
            Эл.почта: {{  $user_data['email'] }}
        </h3>
    </div>

@endsection

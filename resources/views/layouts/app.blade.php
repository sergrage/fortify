<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <title>Fortify</title>
</head>
<body>
<div class="container">
    <div class="">
        Nav goes here for auth layout
        <ul>
            <li><a href="{{ route('profile') }}">Данные пользователя</a></li>
            <li>
                <form method="POST" action="{{ route('logout')  }}">
                    @csrf
                    <a href="{{  route('logout')  }}" onclick="event.preventDefault();
                       this.closest('form').submit();">
                        Выйти
                    </a>
                </form>
            </li>
        </ul>
    </div>
    <div class="">
        {{ $slot  }}
    </div>
</div>
</body>
</html>

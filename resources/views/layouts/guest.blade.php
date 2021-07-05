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
<body class="font-sans leading-normal tracking-normal">
<div id="app">
    <header>
        <!--Nav-->
        <nav class="bg-gray-800 p-2 mt-0 w-full"> <!-- Add this to make the nav fixed: "fixed z-10 top-0" -->
                <menu-component current-url="{{ Request::path() }}"></menu-component>
                <menubtn-component></menubtn-component>
                <div class="hidden lg:block absolute w-1/4 top-0 right-0 px-6 py-6 text-right">
                    <a href="{{ route('login') }}" class="text-sm text-white underline mt-6">Войти <i class="fas fa-sign-in-alt"></i></a>
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline mt-6 p-3 border rounded-lg transition duration-500 ease-in-out hover:bg-purple-700">Зарегистрироваться</a>
                </div>
        </nav>
    </header>
    <main>
        {{ $slot  }}
    </main>
    <footer>

    </footer>

</div>
<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>

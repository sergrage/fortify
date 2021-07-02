<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>

        </style>

    </head>
    <body class="bg-gray-400 font-sans leading-normal tracking-normal">
        <div id="app">
                    <header>
                <!--Nav-->
            <nav class="bg-gray-800 p-2 mt-0 w-full"> <!-- Add this to make the nav fixed: "fixed z-10 top-0" -->
                <div class="container mx-auto flex flex-wrap items-center">
                    <div class="flex w-1/2 lg:w-1/3 justify-center md:justify-start text-white font-extrabold py-2">
                        <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
                            <span class="text-2xl pl-2"><i class="em em-grinning"></i> Название бренда</span>
                        </a>
                    </div>
                    <div class="flex pt-2 content-center justify-between w-1/2 lg:w-5/12 md:justify-end hidden lg:block">
                        <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                            <li class="mr-3">
                                <a class="inline-block py-2 px-4 text-white no-underline" href="{{ url('/home') }}">Главная</a>
                            </li>
                            <li class="mr-3">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2" href="#">Страница 1</a>
                            </li>
                            <li class="mr-3">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2" href="#">Страница 2</a>
                            </li>
                            <li class="mr-3">
                                <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2" href="#">Страница 3</a>
                            </li>
                        </ul>
                    </div>
                </div>
             <test-component></test-component>
                @if (Route::has('login'))
                <div class="fixed w-1/4 top-0 right-0 px-6 py-6 hidden lg:block text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-white underline pt-6">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-white underline pt-6">Войти</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline pt-6">Зарегистрироваться</a>
                        @endif
                    @endauth
                </div>
            @endif
            </nav>
        </header>
        <main>
            
        </main>
        <footer>
            
        </footer>

        </div>
        <script src="{{ mix('/js/app.js') }}"></script>

    </body>
</html>

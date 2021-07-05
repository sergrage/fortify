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
    <body class="font-sans leading-normal tracking-normal">
        <div id="app">
          <header>
                <!--Nav-->
              <nav class="bg-gray-800 p-2 mt-0 w-full"> <!-- Add this to make the nav fixed: "fixed z-10 top-0" -->
                  @auth
                  <menu-component current-url="{{ Request::path() }}"></menu-component>
                  <menubtn-component></menubtn-component>
                  <div class="hidden lg:block fixed w-1/4 top-0 right-0 pr-6 py-6 text-right">
                      <a href="{{ url('/home') }}" class="flex-none bg-white hover:bg-gray-100 transition-colors duration-200 text-gray-900 font-semibold rounded-lg py-2 px-4">{{Auth()->user()->name}} <i class="fas fa-sort-down"></i></a>
                      <form class="inline" method="POST" action="{{ route('logout')  }}">
                          @csrf
                          <a href="{{  route('logout')  }}" class="text-sm text-white underline mt-6 ml-5" onclick="event.preventDefault();
                       this.closest('form').submit();">
                              Выйти
                          </a>
                      </form>
                  </div>
                  @else
                  <menu-component current-url="{{ Request::path() }}"></menu-component>
                  <menubtn-component></menubtn-component>
                  <div class="hidden lg:block fixed w-1/4 top-0 right-0 pr-6 py-6 text-right">
                      <a href="{{ route('login') }}" class="text-sm text-white underline mt-6">Войти <i class="fas fa-sign-in-alt"></i></a>
                      <a href="{{ route('register') }}" class="registerButton">Зарегистрироваться</a>
                  </div>
                  @endauth
              </nav>
        </header>
        <main>
            {{ $slot }}
        </main>
        <footer>

        </footer>

        </div>
        <script src="{{ mix('/js/app.js') }}"></script>

    </body>
</html>

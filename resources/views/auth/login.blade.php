<x-guest-layout>
    <div class="mt-52 overflow-hidden flex items-center justify-center">
    <div class="flex items-center bg-white dark:bg-gray-900" style="width: 600px;">
        <div class="container mx-auto">
            <div class="my-10">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Войти на сайт</h1>
                    <p class="text-gray-500 dark:text-gray-400">Заполните форму, чтобы войти в аккаунт</p>
                </div>
                <div class="m-7">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Адрес почты Email</label>
                            <input type="email" id="email" name="email" placeholder="Ваш email" value="{{ old('email') }}" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            @error('email')
                            <span class="text-red-600" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600 dark:text-gray-400">Пароль</label>
                                <a href="/forgot-password" class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500 dark:hover:text-indigo-300">Забыли пароль?</a>
                            </div>
                            <input type="password" name="password" id="password" placeholder="Ваш пароль" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" /><i class="far fa-eye-slash cursor-pointer absolute ml-1.5 mt-3.5"></i>
                            <i class="far fa-eye cursor-pointer absolute ml-1.5 mt-3.5"></i>
                            @error('password')
                            <span class="text-red-600" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <input type="checkbox" class="form-check-input" id="checkbox" name="remember">
                            <label class="form-check-label" for="checkbox">Запомни меня</label>
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Войти</button>
                        </div>
                        <p class="text-sm text-center text-gray-400">У вас еще нет аккаунта? <a href="#!" class="text-indigo-400 focus:outline-none focus:underline focus:text-indigo-500 dark:focus:border-indigo-800">Зарегистрироваться</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div>
</x-guest-layout>

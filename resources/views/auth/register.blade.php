<x-guest-layout>
<div class="mt-52 overflow-hidden flex items-center justify-center">
    <div class="flex items-center bg-white dark:bg-gray-900" style="width: 600px;">
        <div class="container mx-auto">
            <div class="my-10">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Регистрация на сайте</h1>
                    <p class="text-gray-500 dark:text-gray-400">Заполните форму, чтобы зарегистрироваться</p>
                </div>
                <div class="m-7">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Имя</label>
                            <input type="text" placeholder="Введите ваше имя" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" name="name" id="name" value="{{ old('name') }}" autofocus>
                            @error('name')
                            <span class="text-red-600" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Адрес почты Email</label>
                            <input type="email" id="email" name="email" placeholder="Введите Ваш email" value="{{ old('email') }}" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            @error('email')
                            <span class="text-red-600" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="password" class="form-label">Введите пароль</label>
                            <input type="password" name="password" id="password" placeholder="Введите Ваш пароль" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            @error('password')
                            <span class="text-red-600" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="password_confirmation" class="form-label">Повторно введите пароль</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Повторите Ваш пароль" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            @error('password_confirmation')
                            <span class="text-red-600" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Зарегистрироваться</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>

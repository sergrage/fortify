<x-guest-layout>
    <h2>Введите логин и пароль</h2>
    @if($errors->any())
        <div class="">
            <h3>Ошибки</h3>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error  }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/login" method="POST">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="checkbox" name="remember">
            <label class="form-check-label" for="checkbox">Запомни меня</label>
            <a href="/forgot-password">Забыли пароль?!</a>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</x-guest-layout>

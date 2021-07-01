<x-guest-layout>
    <h2>Восстановление пароля</h2>
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
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
    <form action="/forgot-password" method="POST">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Введите Ваш Email для отправки письма</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
        </div>
        <button type="submit" class="btn btn-primary">Отправить письмо для смены пароля</button>
    </form>
</x-guest-layout>

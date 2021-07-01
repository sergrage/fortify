<x-app-layout>
    <h2>Изменение данных пользователя</h2>
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
    @if (session('status') === 'profile-information-updated')
        <div class="mb-4 font-medium text-sm text-green-600">
            Данные профиля обновлены
        </div>
    @endif
    <form action="/user/profile-information" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="name" class="form-label">Введите Ваше имя</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('email', auth()->user()->name) }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Введите Ваш Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', auth()->user()->email) }}" autofocus>
        </div>
        <button type="submit" class="btn btn-primary">зменить данные</button>
    </form>
</x-app-layout>
